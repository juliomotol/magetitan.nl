@props([
    'tag' => 'a',
    'outlined' => false,
])

<{{ $tag }}
    {{ $attributes->class([
        'py-3 px-3.5 inline-flex justify-center items-center gap-2 text-white',
        'bg-primary' => !$outlined,
        'border border-white' => $outlined,
    ]) }}
>
    {{ $slot }}
</{{ $tag }}>
