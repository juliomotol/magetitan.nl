<?php

use function Laravel\Folio\name;

name('index');
?>

@php
    $featuredSponsors = App\Models\Sponsor::all()->whereNotNull('featured')->sortBy('featured');
@endphp

<x-layout.base>
    <section
        class="min-h-screen bg-[url('/resources/images/home/home.png')] bg-cover bg-right bg-no-repeat pb-[60px] pt-[180px]"
    >
        <div class="container mx-auto h-full px-4">
            <div class="bg-black/55 p-7 pb-12 text-white lg:w-[835px]">
                <h1 class="text-heading-3-bold">
                    MageTitans Groningen is back!<br />
                    Friday September 13th, 2024
                </h1>
                <p class="text-body mt-3">
                    MageTitans is a Magento event purely focussed on developers. So expect talks about Magento
                    performance, <a href="" class="text-primary underline">Hyvä</a>, PHP, soft skills, dev-ops,
                    etcetera. Between talks, you have the opportunity get to
                    know your colleagues from other companies.
                </p>
                <div class="mt-7 flex items-center gap-10">
                    <div>
                        <p class="text-heading-5-bold">
                            13 September 2024
                        </p>
                        <p class="text-body">
                            Dot, Groningen
                        </p>
                    </div>
                    <x-button href="https://www.eventbrite.com/e/magetitans-groningen-tickets-862029402147"
                        target="_blank"
                    >
                        Get your tickets here!
                    </x-button>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dark-gray bg-overlay pb-12 pt-16 text-white">
        <div class="container mx-auto space-y-12 p-4">
            <section class="flex flex-col gap-4 lg:flex-row">
                <div class="flex-1/3 flex flex-col">
                    <h5 class="text-heading-5-bold text-center">
                        Chosen Charity
                    </h5>
                    <div class="bg-primary relative mt-40 flex-1 px-8 pb-20 pt-60">
                        <div
                            class="hexagon absolute -top-32 left-1/2 flex h-80 -translate-x-1/2 items-center justify-center px-8">
                            <img src="{{ Vite::asset('resources/images/home/harstichting.png') }}" alt="harstichting"
                                class="w-full"
                            >
                        </div>

                        <p class="text-body">
                            MageTitans is an event by the community, for the community, but why not expand this
                            community to give to others? Any profits we make are given back to our chosen charity. This
                            year this will be the Hartstichting.
                        </p>
                    </div>
                </div>
                <div class="flex-1/3 flex flex-col">
                    <h5 class="text-heading-5-bold text-center">
                        Chosen Headline sponsor: Mollie
                    </h5>
                    <div class="bg-primary relative mt-40 flex-1 px-8 pb-20 pt-60">
                        <div
                            class="hexagon absolute -top-32 left-1/2 flex h-80 -translate-x-1/2 items-center justify-center px-8">
                            <img src="{{ Vite::asset('resources/images/home/mollie.png') }}" alt="mollie"
                                class="w-full"
                            >
                        </div>

                        <p class="text-body">
                            Mollie is a robust payment service provider that integrates seamlessly with Magento,
                            offering a secure and flexible solution for processing online transactions. Visit
                            <a href="" class="underline">Mollie.nl</a> for more info!
                        </p>
                    </div>
                </div>
                <div class="flex-1/3 flex flex-col">
                    <h5 class="text-heading-5-bold text-center">
                        Tickets
                    </h5>
                    <div class="bg-primary relative mt-40 flex-1 px-8 pb-20 pt-60">
                        <div
                            class="hexagon absolute -top-32 left-1/2 flex h-80 -translate-x-1/2 items-center justify-center px-8">
                            <img src="{{ Vite::asset('resources/images/home/tickets.png') }}" alt="tickets"
                                class="w-full"
                            >
                        </div>

                        <p class="text-body">
                            Tickets are now available!
                        </p>

                        <x-button href="https://www.eventbrite.com/e/magetitans-groningen-tickets-862029402147"
                            target="_blank" class="mt-6 !bg-black"
                        >
                            Get your tickets here!
                        </x-button>
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
            </section>

            <section class="flex gap-4">
                <div class="flex-1/2">
                    <h2 class="text-heading-2-bold">
                        Event Schedule
                    </h2>
                    <p class="text-body mt-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi hic consequuntur, odio quia
                        consectetur dolor quis incidunt sunt quibusdam officiis consequatur ab veritatis error maiores,
                        labore id. Corporis, cumque expedita!
                    </p>
                    <x-button href="{{ route('agenda.index') }}" outlined class="mt-9">
                        More Details
                    </x-button>
                    <h4 class="text-heading-4-bold mt-24">
                        Headline sponsor: Mollie
                    </h4>
                    <p class="text-body mt-6">
                        Mollie is a robust payment service provider that integrates seamlessly with Magento,
                        offering a secure and flexible solution for processing online transactions. Visit
                        <a href="" class="underline">Mollie.nl</a> for more info!
                    </p>
                </div>

                <div class="flex-1/2">

                </div>
            </section>
        </div>
    </section>

    <section class="bg-gradient-to-r from-[#EDC30D] to-[#DA5915] pb-14 pt-16 text-white">
        <div class="container mx-auto p-4">
            <h2 class="text-heading-2-bold">
                Meet Event Speakers
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
                    @foreach (\App\Models\Speaker::all() as $speaker)
                        <div
                            class="w-full shrink-0 snap-start snap-always md:w-[calc(1/2_*_100%_-_(var(--spacing)_*_4))] lg:w-[calc(1/4_*_100%_-_(var(--spacing)_*_4))]">
                            <div
                                class="bg-conic from-dark-gray via-dark-gray mx-8 aspect-square rounded-full via-25% to-[25.1%] p-2">
                                <img src="{{ Vite::asset($speaker->img) }}" alt="{{ $speaker->name }}" fall
                                    class="aspect-square h-auto w-full rounded-full bg-white object-cover"
                                />
                            </div>
                            <h4 class="text-heading-4-bold text-center">
                                {{ $speaker->name }}
                            </h4>
                        </div>
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

    <section class="bg-dark-gray bg-overlay overflow-hidden pb-12 pt-16 text-white">
        <div class="container mx-auto p-4">
            <section>
                <h2 class="text-heading-2-bold">
                    Buy your tickets now!
                </h2>
                <p class="text-body mt-8">
                    After a great event in 2019, the Titans are back for another event! This year we'll be in the
                    <a href="{{ route('venue.index') }}" class="underline">DOT - Groningen</a> on September 13th 2024.
                    Don't
                    miss out! Mage Titans is open to all, it has something for every level of Magento developer. Learn
                    new
                    things and network with your fellow developers whilst enjoying a variety of presentations and panel
                    discussions. There will also be an opportunity to provide feedback, so if there are any topics you’d
                    like us to cover at future events, we want to know!
                </p>
                <div class="relative mt-16 justify-center gap-12 space-y-12 md:flex md:space-y-0">
                    <div class="absolute top-1/2 hidden h-64 w-dvw -translate-y-1/2 bg-black md:block"></div>
                    <div class="bg-primary-lighter relative p-8 lg:w-[400px]">
                        <p class="text-body">
                            Regular
                        </p>
                        <h2 class="text-heading-2-bold mt-2">
                            € 22,50
                        </h2>
                        <p class="text-body mt-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                        <x-button href="" outlined class="mt-6 w-full">
                            <x-icon name="shopping_cart" /> Get Ticket
                        </x-button>
                    </div>
                    <div class="bg-primary-darker relative p-8 lg:w-[400px]">
                        <p class="text-body">
                            Golden
                        </p>
                        <h2 class="text-heading-2-bold mt-2">
                            € 37,50
                        </h2>
                        <p class="text-body mt-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                        <x-button href="" outlined class="mt-6 w-full">
                            <x-icon name="shopping_cart" /> Get Ticket
                        </x-button>
                    </div>
                </div>
            </section>
            <section class="mt-28">
                <h2 class="text-heading-2-bold">
                    Our Sponsor and Partners
                </h2>
                <p class="text-body mt-4">
                    We are very proud of our sponsors and their commitment to this event.
                </p>
                <div class="mt-8 flex flex-wrap items-center justify-center gap-x-10">
                    @foreach ($featuredSponsors as $sponsor)
                        @if ($loop->iteration === 3)
                            <div class="w-full md:hidden md:w-auto"></div>
                        @endif
                        <div class="hexagon w-36 md:w-48 flex items-center px-6">
                            <img src="{{ Vite::asset($sponsor->img) }}" alt="{{ $sponsor->name }}" class="w-full" />
                        </div>
                        @if ($loop->iteration === 3)
                            <div class="w-full md:hidden md:w-auto"></div>
                        @endif
                    @endforeach
                </div>
            </section>
            <section class="mt-20">
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
