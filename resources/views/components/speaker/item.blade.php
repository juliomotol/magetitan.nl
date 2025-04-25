@props(['speaker', 'borderColor' => 'dark-gray'])

<div {{ $attributes }}>
    <a href="{{ route('speakers.show', ['speaker' => $speaker]) }}">
        <div class="relative p-2">
            <div @class([
                'absolute top-0 right-0 size-1/2 rounded-tr-full',
                'bg-dark-gray' => $borderColor === 'dark-gray',
                'bg-primary' => $borderColor === 'primary',
            ])></div>
            <img src="{{ Vite::asset($speaker->img) }}" alt="{{ $speaker->name }}"
                class="relative aspect-square size-full rounded-full bg-white object-cover" loading="lazy"
            />
        </div>
        <h4 class="text-heading-4-bold text-center">
            {{ $speaker->name }}
        </h4>
    </a>
</div>
