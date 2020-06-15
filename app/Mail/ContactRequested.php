<?php

namespace App\Mail;

use App\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactRequested extends Mailable
{
    use Queueable, SerializesModels;

    protected $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact.requested')
                    ->from(['address'=>'noreply@eduvationgroup.com','name' => 'Eduvation group'])
                    ->subject($this->contact->school_name.' is requesting to contact Eduvation group')
                    ->with([
                        'contact' => $this->contact
                    ]);
    }
}
