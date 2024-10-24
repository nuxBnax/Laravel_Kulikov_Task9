<?php

namespace App\Listeners;

use App\Events\NewsHidden;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Log;

class NewsHiddenListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(NewsHidden $event)
    {
        Log::info('News ' . $event->news->id . ' hidden');
    }
}
