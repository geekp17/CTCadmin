<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class MassInstagram implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    private $message;
    private $lugger;
    private $instagram;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($message, $lugger, $instagram)
    {
        $this->message = $message;
        $this->lugger = $lugger;
        $this->instagram = $instagram;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
      Log::info('Start'.$this->lugger->instagram);
      $usernameId = $this->instagram->getUsernameId($this->lugger->instagram);
      $dm = $this->instagram->direct_message($usernameId, $this->message);
      Log::info('End'.$this->lugger->instagram);

    }
}
