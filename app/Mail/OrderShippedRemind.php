<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderShippedRemind extends Mailable
{
    use Queueable, SerializesModels;

    /** @var Order $order */
    public $order;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( Order $order)
    {
        //
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $code = $this->order->getCodedId();
        return $this->view('mail.order-shipped-remind')
            ->text('mail.order-shipped-plain')->subject("Оповещение о заказе #$code: принят в работу");
    }
}
