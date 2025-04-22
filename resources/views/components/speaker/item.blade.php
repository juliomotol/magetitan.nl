@props(['speaker', 'borderColor' => 'dark-gray'])

<div {{ $attributes }}>
    <a href="{{ route('speakers.show', ['speaker' => $speaker]) }}">
        <div @class([
            'bg-conic mx-8 aspect-square rounded-full via-25% to-[25.1%] p-2',
            'from-dark-gray via-dark-gray' => $borderColor === 'dark-gray',
            'from-primary via-primary' => $borderColor === 'primary',
        ])>
            <img src="{{ Vite::asset($speaker->img) }}" alt="{{ $speaker->name }}"
                class="aspect-square h-auto w-full rounded-full bg-white object-cover" loading="lazy"
            />
        </div>
        <h4 class="text-heading-4-bold text-center">
            {{ $speaker->name }}
        </h4>
    </a>
</div>
