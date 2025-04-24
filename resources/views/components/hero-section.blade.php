@props([
    'fullScreen' => false,
])

<section
    {{ $attributes->class([
        'bg-cover bg-right bg-no-repeat pb-[60px] pt-[180px]',
        'min-h-screen' => $fullScreen,
        'min-h-[75vh]' => !$fullScreen,
    ]) }}
    x-init
    x-intersect.margin.-120px="$store.navTransparent = true"
    x-intersect:leave.margin.-120px="$store.navTransparent = false"
>
    <div class="container mx-auto h-full px-4">
        <div class="w-fit bg-black/55 p-8 text-white">
            {{ $slot }}
        </div>
    </div>
</section>
