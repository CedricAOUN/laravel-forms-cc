<?php

namespace App\Mail;

use App\Models\Gift;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Attachment;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class GiftCreated extends Mailable
{
    use Queueable, SerializesModels;

    public Gift $gift;
    /**
     * Create a new message instance.
     */
    public function __construct(Gift $gift)
    {
        $this->gift = $gift;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Gift Created',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.gifts.created',
            with: [
                'giftName' => $this->gift->name,
                'giftPrice' => $this->gift->price,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            Attachment::fromPath(public_path('images/gift.jpg'))
                ->as('gift.jpg')
                ->withMime('image/jpeg'),
        ];
    }
}
