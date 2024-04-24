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
        $events = Event::where('event_date', '>=', Carbon::today())->orderBy('event_date')
            ->take(2)
            ->get();


        return view('layouts.guest',[
            'events' => $events,
        ]);
    }
}
