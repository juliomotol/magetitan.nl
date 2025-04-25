@props(['agenda'])

@php
    $speaker = \App\Models\Speaker::find($agenda->speaker);
@endphp

<div class="flex gap-10">
    <div>
        <div class="aspect-square w-[120px] bg-white"></div>
        <p class="text-body mt-4">9.30 - 10.30</p>
    </div>
    <div>
        <h5 class="text-heading-5-bold">
            {{ $agenda->title }}
        </h5>
        <p class="text-body mt-2">
            {{ $agenda->description }}
        </p>

        <div class="mt-6 flex items-center gap-2">
            <img src="{{ Vite::asset($speaker->img) }}" alt="{{ $speaker->name }}" loading="lazy"
                class="aspect-square size-12 rounded-full bg-white object-cover"
            >
            <div>
                <p class="text-body underline">
                    {{ $speaker->name }}
                </p>
                <p class="text-body -mt-1">
                    Function
                </p>
            </div>
        </div>
    </div>
</div>
