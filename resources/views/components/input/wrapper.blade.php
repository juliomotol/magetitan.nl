@props(['label', 'for' => ''])

<div {{ $attributes->class(['flex flex-col gap-2']) }}>
    <label for="{{ $for }}" class="text-heading-6-bold">{{ $label }}</label>
    {{ $slot }}
</div>
