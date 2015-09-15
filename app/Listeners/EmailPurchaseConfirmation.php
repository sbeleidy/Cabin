<?php

namespace Makerscabin\Listeners;

use Makerscabin\Events\SeatWasPurchased;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Makerscabin\Jobs\SendPurchaseConfirmationEmail;

class EmailPurchaseConfirmation
{
    use DispatchesJobs;

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
     * @param  SeatWasPurchased  $event
     * @return void
     */
    public function handle(SeatWasPurchased $event)
    {
        $user = $event->user;

        $this->dispatch(new SendPurchaseConfirmationEmail($user));
    }
}
