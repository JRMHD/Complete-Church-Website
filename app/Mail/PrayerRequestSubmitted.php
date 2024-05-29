<?php

namespace App\Mail;

use App\Models\PrayerRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PrayerRequestSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $prayerRequest;

    public function __construct(PrayerRequest $prayerRequest)
    {
        $this->prayerRequest = $prayerRequest;
    }

    public function build()
    {
        return $this->view('emails.prayer_request_submitted')
                    ->with([
                        'prayerRequest' => $this->prayerRequest
                    ]);
    }
}
