<?php

namespace Makerscabin\Jobs;

use Makerscabin\User;
use Makerscabin\Jobs\Job;
use Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendPurchaseConfirmationEmail extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    public $user;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::send('emails.purchase', ['user' => $this->user], function ($m) {
            $m->from(env('MAIL_FROM'), env('MAIL_NAME'))->to($this->user->email, $this->user->email)->subject('Your Makers Cabin Purchase!');
        });
    }
}
