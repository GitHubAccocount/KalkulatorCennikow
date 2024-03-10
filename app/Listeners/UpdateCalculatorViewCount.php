<?php

namespace App\Listeners;

use App\Events\CalculatorView;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateCalculatorViewCount
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
    public function handle(CalculatorView $event): void
    {
        $views = session()->get('views', collect());

        if(!$views->contains($event->calculator->id)) {

            $views->push($event->calculator->id);
        
            session(['views' => $views]);

            $timestamps = $event->calculator->timestamps;
            $event->calculator->timestamps=false;   // avoid view updating the timestamp

            $event->calculator->increment('views');

            $event->calculator->timestamps=$timestamps;   // restore timestamps

        }
    }
}
