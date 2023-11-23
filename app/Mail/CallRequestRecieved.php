<?php

namespace App\Mail;

use App\Models\CallRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CallRequestRecieved extends Mailable
{
    use Queueable, SerializesModels;
    /** @var CallRequest $request */
    public $request;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(CallRequest $data)
    {
        //
        $this->request = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.call-request_recieved')
            ->text('mail.call_request_recieved-plain')
            ->subject("Запрос на звонок принят в работу");
    }
}
