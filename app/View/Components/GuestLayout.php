<?php

namespace App\View\Components;

use App\Models\Event;
use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GuestLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        $events = Event::where('event_date', '>=', Carbon::today())
            ->orderBy('event_date')
            ->where('is_published', '=', '1' )

            ->get()
            ->take(2)
        ;



        $past_events = Event::where('is_published', '=', '1')

            ->get();

//        if ($events->count() > 2) {
//            $events = $events->take(2);
//        }
//        if ($past_events->count() > 4) {
//            $events = $events->take(4);
//        }
        return view('layouts.guest',[
            'events' => $events,
            'past_events' => $past_events,

        ]);
    }
}
