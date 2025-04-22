<?php

use function Laravel\Folio\name;

name('speakers.show');
?>

@php
    $otherSpeakers = \App\Models\Speaker::all()->where('name', '!==', $speaker->name);
@endphp

<x-layout.base>
    <x-hero-section style="background-image: url('{{ Vite::asset($speaker->heroImg) }}');">
        <div class="lg:w-[555px]">
            <h1 class="text-heading-5-bold">
                {{ $speaker->name }} - {{ $speaker->title }}
            </h1>
            <p class="text-body mt-4">
                {{ $speaker->description }}
            </p>
        </div>
    </x-hero-section>

    <section class="bg-dark-gray bg-overlay py-16 text-white md:py-28">
        <div class="container relative mx-auto space-y-12 p-4">
            <section class="space-y-10 md:flex md:gap-20 md:space-y-0">
                <div class="md:max-w-initial mx-auto max-w-96 space-y-6 md:mx-0 md:w-64 md:shrink-0 lg:w-96">
                    <img src="{{ Vite::asset($speaker->img) }}" alt="{{ $speaker->name }}"
                        class="border-primary aspect-square w-full rounded-full border-[12px] object-cover"
                    >
                    <h4 class="text-heading-4-bold text-center">
                        {{ $speaker->name }}
                    </h4>
                    <ul class="mt-6 flex items-center justify-center gap-4 text-xs">
                        @foreach ($speaker->socialLinks as $item)
                            <li>
                                <a href="{{ $item['url'] }}" target="_blank" rel="noopener noreferrer"
                                    class="flex size-12 items-center justify-center rounded-full border-4 border-white"
                                >
                                    {{ $item['title'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="prose prose-invert">
                    {!! $speaker->body() !!}
                </div>
            </section>
        </div>
    </section>

    <section class="bg-gradient-to-r from-[#EDC30D] to-[#DA5915] pb-14 pt-16 text-white">
        <div class="container mx-auto p-4">
            <h2 class="text-heading-2-bold">
                Meet Other Event Speakers
            </h2>
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
            }">
                <div class="scrollbar-hidden mt-16 flex snap-x snap-mandatory gap-4 overflow-x-scroll"
                    x-ref="container">
                    @foreach ($otherSpeakers as $speaker)
                        <x-speaker.item :speaker="$speaker"
                            class="w-full shrink-0 snap-start snap-always md:w-[calc(1/2_*_100%_-_(var(--spacing)_*_4))] lg:w-[calc(1/4_*_100%_-_(var(--spacing)_*_4))]"
                        />
                    @endforeach
                </div>
                <div class="flex justify-center gap-4">
                    <button type="button" class="bg-dark-gray h-14 cursor-pointer rounded-full p-4"
                        @click="previous()">
                        <x-icon name="arrow_back" class="leading-0 text-2xl" />
                    </button>
                    <button type="button" class="h-14 cursor-pointer rounded-full bg-white p-4 text-black"
                        @click="next()"
                    >
                        <x-icon name="arrow_forward" />
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dark-gray py-16 text-white">
        <div class="container relative mx-auto space-y-12 p-4">
            <section>
                <x-image-carousel :slides="[
                    'resources/images/gallery/2024/IMG_0611.jpg',
                    'resources/images/gallery/2024/IMG_0612.jpg',
                    'resources/images/gallery/2024/IMG_0614.jpg',
                    'resources/images/gallery/2024/IMG_0617.jpg',
                    'resources/images/gallery/2024/IMG_0619.jpg',
                    'resources/images/gallery/2024/IMG_0620.jpg',
                ]" />
                <div class="mt-12 justify-between lg:flex">
                    <h2 class="text-heading-2-bold">
                        Last Event Gallery
                    </h2>
                    <p class="text-body mt-4 lg:mt-0 lg:w-1/3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </section>
        </div>
    </section>
</x-layout.base>
