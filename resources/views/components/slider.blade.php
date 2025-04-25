<div x-data="{
    previous() {
            $refs.container.scrollBy({
                left: -$refs.container.clientWidth,
                behavior: 'smooth'
            });
        },
        next() {
            $refs.container.scrollBy({
                left: $refs.container.clientWidth,
                behavior: 'smooth'
            });
        }
}" {{ $attributes->class(['space-y-12']) }}>
    <div class="scrollbar-hidden mt-16 flex snap-x snap-mandatory overflow-x-scroll" x-ref="container">
        {{ $slot }}
    </div>
    <div class="flex justify-center gap-4">
        <button type="button" class="bg-dark-gray h-14 cursor-pointer rounded-full p-4" @click="previous()">
            <x-icon name="arrow_back" class="leading-0 text-2xl" />
        </button>
        <button type="button" class="h-14 cursor-pointer rounded-full bg-white p-4 text-black" @click="next()">
            <x-icon name="arrow_forward" />
        </button>
    </div>
</div>
