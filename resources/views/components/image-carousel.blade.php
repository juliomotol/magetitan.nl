@props(['slides' => []])

@php
    $slides = collect($slides)->map(fn($slide) => Vite::asset($slide));
@endphp

<div x-data="{
    slides: @js($slides),
    currentSlideIndex: 1,
    interval: null,
    init() {
        this.start();
    },
    stop() {
        clearInterval(this.interval);
    },
    start() {
        this.interval = setInterval(() => {
            this.currentSlideIndex = this.currentSlideIndex === this.slides.length ? 1 : this.currentSlideIndex + 1;
        }, 5000);
    },
}" class="relative aspect-video w-full overflow-hidden" @mouseover="stop()" @mouseleave="start()">
    <div class="relative size-full">
        <template x-for="(slide, index) in slides">
            <div x-show="currentSlideIndex == index + 1" class="absolute inset-0" x-transition.opacity.duration.1000ms>
                <img class="absolute inset-0 size-full object-cover" x-bind:src="slide" loading="lazy" />
            </div>
        </template>
    </div>

    <div class="absolute bottom-8 left-1/2 z-20 flex -translate-x-1/2 gap-6">
        <template x-for="(slide, index) in slides">
            <button class="size-3 rounded-full bg-white transition" x-on:click="currentSlideIndex = index + 1"
                x-bind:class="[currentSlideIndex === index + 1 ? 'bg-white' : 'bg-white/40']"`
            ></button>
        </template>
    </div>
</div>
