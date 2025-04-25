<?php

use function Laravel\Folio\name;
use App\Models\Speaker;

name('speakers.index');
?>

@php
    $speakers = Speaker::all();
@endphp

<x-layout.base>
    <x-hero-section class="bg-[url('/resources/images/speakers.jpg')] bg-top">
        <h1 class="text-heading-2-bold">
            List of Speakers
        </h1>
    </x-hero-section>

    <section class="bg-dark-gray bg-overlay py-20 text-white">
        <div class="container relative mx-auto space-y-20 p-4">
            <section>
                <h2 class="text-heading-2-bold">
                    Meet Event Speakers
                </h2>
                <div class="mt-12 grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-8 lg:grid-cols-4">
                    @foreach ($speakers as $speaker)
                        <x-speaker.item :speaker="$speaker" borderColor="primary" />
                    @endforeach
                </div>
            </section>

            <section>
                <x-image-carousel :slides="[
                    'resources/images/gallery/2024/IMG_0611.jpg',
                    'resources/images/gallery/2024/IMG_0612.jpg',
                    'resources/images/gallery/2024/IMG_0614.jpg',
                    'resources/images/gallery/2024/IMG_0617.jpg',
                    'resources/images/gallery/2024/IMG_0619.jpg',
                    'resources/images/gallery/2024/IMG_0620.jpg',
                ]" />
                <div class="mt-12 space-y-4 lg:flex lg:justify-between">
                    <h2 class="text-heading-2-bold">
                        Last Event Gallery
                    </h2>
                    <p class="text-body lg:w-1/3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </section>
        </div>
    </section>
</x-layout.base>
