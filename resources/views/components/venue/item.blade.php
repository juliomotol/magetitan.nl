@props(['icon', 'title', 'description'])

<div class="bg-primary p-8">
    <div class="bg-dark-gray flex aspect-square size-[88px] items-center justify-center rounded-full">
        <x-icon name="{{ $icon }}" class="!text-[2.5rem]" />
    </div>
    <h5 class="text-heading-5-bold mt-6">
        {{ $title }}
    </h5>
    <p class="text-body mt-4">
        {{ $slot }}
    </p>
</div>
