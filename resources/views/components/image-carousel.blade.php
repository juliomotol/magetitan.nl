@props(['slides' => []])

@php
    $slides = collect($slides)->map(fn($slide) => Vite::asset($slide));
@endphp

<div class="relative aspect-video w-full overflow-hidden" x-data="{
    slides: @js($slides),
    currentSlideIndex: 1,
    interval: null,
    duration: 5000,
    previous() {
        this.currentSlideIndex = this.currentSlideIndex > 1 ? this.currentSlideIndex - 1 : this.slides.length
    },
    next() {
        this.currentSlideIndex = this.currentSlideIndex < this.slides.length ? this.currentSlideIndex + 1 : 1
    },
    init() {
        this.start();
    },
    stop() {
        clearInterval(this.interval);
    },
    start() {
        this.interval = setInterval(() => this.next(), this.duration);
    },
}" @mouseover="stop()" @mouseleave="start()">
    <button type="button"
        class="absolute left-4 top-1/2 z-20 flex -translate-y-1/2 items-center justify-center rounded-full bg-white/15 p-2 text-white hover:bg-white/30 md:left-8"
        aria-label="previous slide" x-on:click="previous()"
    >
        <x-icon name="chevron_left" />
    </button>

    <button type="button"
        class="absolute right-4 top-1/2 z-20 flex -translate-y-1/2 items-center justify-center rounded-full bg-white/15 p-2 text-white hover:bg-white/30 md:right-8"
        aria-label="next slide" x-on:click="next()"
    >
        <x-icon name="chevron_right" />
    </button>

    <div class="relative size-full">
        <template x-for="(slide, index) in slides">
            <div x-show="currentSlideIndex == index + 1" class="absolute inset-0" x-transition.opacity.duration.1000ms>
                <img class="absolute inset-0 size-full object-cover" x-bind:src="slide" loading="lazy" />
            </div>
        </template>
    </div>

    <div class="absolute bottom-4 left-1/2 z-20 flex -translate-x-1/2 gap-6 md:bottom-8">
        <template x-for="(slide, index) in slides">
            <button class="size-3 rounded-full bg-white transition" x-on:click="currentSlideIndex = index + 1"
                x-bind:class="[currentSlideIndex === index + 1 ? 'bg-white' : 'bg-white/40']"`
            ></button>
        </template>
    </div>
</div>
