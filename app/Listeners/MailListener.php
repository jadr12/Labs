<?php

namespace App\Listeners;

use App\Events\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use MailEvent;
use App\Mail\JadMail;

class MailListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Mail  $event
     * @return void
     */
    public function handle(MailEvent $event)
    {
        Mail::to('jad.riahi12@gmail.com')->send(new JadMail($event->request));
    }
}
