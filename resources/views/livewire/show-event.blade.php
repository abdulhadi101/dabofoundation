<div class="mt-20">
    <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16 relative">
        <img class="rounded-t-lg5 w-full h-[30vh] mx-auto"  src="{{  asset('storage/'.$event->thumbnail) }}" alt="">

        <div class="max-w-screen-xl mx-auto">
            <div class="mt-3 bg-white rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal">

                <div class="">

                    <h1 class="text-gray-900 font-bold text-3xl mb-2">{{ $event->name }}</h1>


                    <p class="text-base leading-8 my-5">
                        {{ html_entity_decode($event->description) }} </p>


{{--                    Image gallery--}}






                </div>

            </div>
        </div>
<div class="text-center pb-5" >
    <h1 class="font-bold underline text-4xl">Event Pictures</h1>
</div>
        <div class="grid grid-cols-2">
            @if($event->event_images)
        @forelse($event->event_images as $image)
               <div class=" bg-white p-3">
                    <img class=" w-full object-cover" height="800px" width="800px" src="{{  asset('storage/'.$image) }}"  alt=""/>
                </div>
        @empty
            <p></p>
        @endforelse
            @endif
        </div>
    </div>

</div>


