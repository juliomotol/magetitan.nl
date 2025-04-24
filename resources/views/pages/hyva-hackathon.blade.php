<?php

use function Laravel\Folio\name;

name('hyva-hackathon.index');
?>

<x-layout.base>

    <x-hero-section class="bg-[url('/resources/images/home/home.png')]">
        <h1 class="text-heading-2-bold">
            Hackathon
        </h1>
    </x-hero-section>

    <section class="bg-dark-gray bg-overlay overflow-hidden pb-20 pt-28 text-white">
        <div class="container relative mx-auto space-y-16 p-4">
            <section class="space-y-8">
                <h2 class="text-heading-2-bold">
                    Hyvä Hackathon
                </h2>
                <p class="text-body">
                    The day before MageTitans, on the 12th of september elgentos is organizing a Hyvä Hackathon! At this
                    event, we will work in teams on problems and/or features within the Hyva ecosystem. The goal here is
                    twofold. We aim to improve the product and allow participants to gain technical knowledge by delving
                    deeper. It is a great opportunity to work on a nice feature with colleagues from other
                    organizations.<br />
                    Of course, elgentos provides everything you need for a productive workday. Just make sure you bring
                    a laptop with an installed version of Magento with Hyvä with the sample data.
                </p>
            </section>
            <section class="space-y-8">
                <h2 class="text-heading-2-bold">Where and when?
                </h2>
                <p class="text-body">
                    Location: elgentos office, Hereweg 120 (fourth floor), 9725AK, Groningen<br />
                    Time: 9:00 - 17:30<br />
                    Lunch: Will be provided, we will gather your preferences and dietary restrictions in the morning.
                </p>
                <p class="text-body">
                    Ideas can be submitted in advance using this <a href="" class="underline">form</a>.<br />
                    Tickets for this event are free and can be ordered <a href="" class="underline">here</a>.
                </p>
            </section>
            <section class="flex flex-col gap-10 lg:flex-row lg:gap-4">
                <div class="lg:pr-16 xl:pr-32">
                    <h2 class="text-heading-2-bold">
                        Day 1 - Sept 12 2025
                    </h2>
                    <p class="text-body mt-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </p>
                </div>
                <div>
                    <div class="space-y-10">
                        <div class="flex gap-10">
                            <div>
                                <div class="aspect-square w-[120px] bg-white"></div>
                                <p class="text-body mt-4">9.30 - 10.30</p>
                            </div>
                            <div>
                                <h5 class="text-heading-5-bold">
                                    Lorem ipsum dolor sit amet
                                </h5>
                                <p class="text-body mt-2">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.
                                </p>

                                <div class="mt-6 flex items-center gap-2">
                                    <div class="aspect-square w-12 rounded-full bg-white"></div>
                                    <div>
                                        <p class="text-body underline">
                                            John Doe
                                        </p>
                                        <p class="text-body -mt-1">
                                            Function
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-10">
                            <div>
                                <div class="aspect-square w-[120px] bg-white"></div>
                                <p class="text-body mt-4">9.30 - 10.30</p>
                            </div>
                            <div>
                                <h5 class="text-heading-5-bold">
                                    Lorem ipsum dolor sit amet
                                </h5>
                                <p class="text-body mt-2">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.
                                </p>

                                <div class="mt-6 flex items-center gap-2">
                                    <div class="aspect-square w-12 rounded-full bg-white"></div>
                                    <div>
                                        <p class="text-body underline">
                                            John Doe
                                        </p>
                                        <p class="text-body -mt-1">
                                            Function
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-10">
                            <div>
                                <div class="aspect-square w-[120px] bg-white"></div>
                                <p class="text-body mt-4">9.30 - 10.30</p>
                            </div>
                            <div>
                                <h5 class="text-heading-5-bold">
                                    Lorem ipsum dolor sit amet
                                </h5>
                                <p class="text-body mt-2">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.
                                </p>

                                <div class="mt-6 flex items-center gap-2">
                                    <div class="aspect-square w-12 rounded-full bg-white"></div>
                                    <div>
                                        <p class="text-body underline">
                                            John Doe
                                        </p>
                                        <p class="text-body -mt-1">
                                            Function
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
