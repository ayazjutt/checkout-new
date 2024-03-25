<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendUserAccountEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $loginUrl;


    /**
     * Create a new job instance.
     */
    public function __construct(public $email, public $password)
    {
        $this->loginUrl = 'https://app.bizvee.com';
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::raw("Your email: $this->email\nYour password: $this->password\nLogin URL: $this->loginUrl", function ($message) {
            $message->to($this->email)->subject('Bizvee Account Details');
        });
    }
}
