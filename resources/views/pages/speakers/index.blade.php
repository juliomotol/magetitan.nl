<?php

use function Laravel\Folio\name;
use App\Models\Speaker;

name('speakers.index');

$speakers = Speaker::all();
?>

<x-layout.base>
    <x-hero-section class="bg-[url('/resources/images/home/home.png')]">
        <h1 class="text-heading-2-bold">
            List of Speakers
        </h1>
    </x-hero-section>

    <section class="bg-dark-gray bg-overlay pb-12 pt-16 text-white">
        <div class="container mx-auto space-y-12 p-4 relative">
            <section>
                <h2 class="text-heading-2-bold">
                    Meet Event Speakers
                </h2>
                <div class="mt-20 space-y-4 md:space-y-0 md:grid md:grid-cols-2 lg:grid-cols-4 md:gap-8">
                    @foreach ($speakers as $speaker)
                        <x-speaker.item :speaker="$speaker" borderColor="primary" />
                    @endforeach
                </div>
            </section>

            <section class="mt-10">
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
