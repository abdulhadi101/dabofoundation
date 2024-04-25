<div class="pt-20 px-2">
    <h1 class="font-bold mt-10 text-2xl text-center">All Events</h1>
    @forelse($events as $event)

        <div class="flex px-auto my-3 md:max-w-5xl mx-auto mx-2 space-x-5 justify-between rounded-xl bg-secondary px-8 py-10 items-center">

            <div class="flex space-x-4">
                <div>
                    <h1 class="font-bold text-4xl">{{ \Carbon\Carbon::parse($event->event_date)->format('d') }}</h1>
                    <h2 class="font-bold text-xl uppercase">{{ \Carbon\Carbon::parse($event->event_date)->format('M') }}</h2>
                </div>

                <div>

                    <div class="flex w-full flex-col">
                        <div class="flex items-center">
                            <div class="font-semibold text-xl pr-4">
                                {{  $event->name }}
                            </div>
                           </div>
                        <h1 class=" line-clamp-5 text-balance text-base">
                            {{  $event->description }}
                        </h1>

                        <div class="flex justify-between">
                            <div></div>
                            <a class="py-2 w-fit items-end px-2 bg-white mt-2 rounded-md justify-end" href="{{ route('event.show', $event) }}">Continue Reading</a>

                        </div>

                    </div>
                </div>
            </div>


        </div>
    @empty

            <div class="items-center mx-auto text-center">
                <p >No Events</p>
              </div>
    @endforelse

</div>
