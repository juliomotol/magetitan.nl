@props([
    'fullScreen' => false,
])

<section {{ $attributes->class([
    'bg-cover bg-right bg-no-repeat pb-[60px] pt-[180px]',
    'min-h-screen' => $fullScreen,
    'min-h-[75vh]' => !$fullScreen,
]) }}
>
    <div class="container mx-auto h-full px-4">
        <div class="bg-black/55 p-8 text-white w-fit">
            {{ $slot }}
        </div>
    </div>
</section>
