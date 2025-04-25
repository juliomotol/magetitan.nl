<?php

use function Laravel\Folio\name;

name('index');
?>

@php
    $featuredSponsors = App\Models\Sponsor::all()->whereNotNull('featured')->sortBy('featured');
@endphp

<x-layout.base>
    <x-hero-section class="bg-[url('/resources/images/home.png')]" fullScreen>
        <div class="lg:w-[843px]">
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
                <x-button href="https://www.eventbrite.com/e/magetitans-groningen-tickets-862029402147" target="_blank">
                    Get your tickets here!
                </x-button>
            </div>
        </div>
    </x-hero-section>

    <section class="bg-dark-gray bg-overlay pb-12 pt-16 text-white">
        <div class="container relative mx-auto space-y-12 p-4">
            <section class="flex flex-col gap-4 lg:flex-row">
                <div class="flex-1/3 flex flex-col">
                    <h5 class="text-heading-5-bold text-center">
                        Chosen Charity
                    </h5>
                    <div class="bg-primary relative mt-40 flex-1 px-8 pb-20 pt-60">
                        <div
                            class="hexagon absolute -top-32 left-1/2 flex w-72 -translate-x-1/2 items-center justify-center px-8">
                            <img src="{{ Vite::asset('resources/images/harstichting.png') }}" alt="harstichting"
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
                            class="hexagon absolute -top-32 left-1/2 flex w-72 -translate-x-1/2 items-center justify-center px-8">
                            <img src="{{ Vite::asset('resources/images/mollie.png') }}" alt="mollie"
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
                            class="hexagon absolute -top-32 left-1/2 flex w-72 -translate-x-1/2 items-center justify-center px-8">
                            <img src="{{ Vite::asset('resources/images/tickets.png') }}" alt="tickets"
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

            <section class="space-y-10 lg:grid lg:grid-flow-col lg:grid-cols-2 lg:grid-rows-2 lg:gap-x-4 lg:space-y-0">
                <div class="lg:pr-16 xl:pr-32">
                    <h2 class="text-heading-2-bold">
                        Event Schedule
                    </h2>
                    <p class="text-body mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum
                        venenatis justo sed mauris vestibulum rhoncus. Nunc et viverra elit, nec ultricies sem.
                        Phasellus a mi eget odio tincidunt iaculis sit amet id elit.
                    </p>
                    <x-button href="{{ route('agenda.index') }}" outlined class="mt-9">
                        More Details
                    </x-button>
                </div>

                <div class="relative row-span-2 lg:order-last">
                    <div x-data="{ selectedTab: 'day1' }" class="w-full">
                        <div class="border-outline flex gap-4 overflow-x-auto">
                            <button type="button" class="w-48 border-b-2 pb-4 text-left"
                                x-bind:class="selectedTab === 'day1' ? 'text-primary border-primary' : 'border-transparent'"
                                x-on:click="selectedTab = 'day1'"
                            >
                                <h4 class="text-heading-4-bold">
                                    Day 1
                                </h4>
                                <p class="text-body mt-2">
                                    fri, 13 September 2024
                                </p>
                            </button>
                            <button type="button" class="w-48 border-b-2 pb-4 text-left"
                                x-bind:class="selectedTab === 'day2' ? 'text-primary border-primary' : 'border-transparent'"
                                x-on:click="selectedTab = 'day2'"
                            >
                                <h4 class="text-heading-4-bold">
                                    Day 2
                                </h4>
                                <p class="text-body mt-2">
                                    sat, 14 September 2024
                                </p>
                            </button>
                        </div>
                        <div class="mt-10">
                            <div x-cloak x-show="selectedTab === 'day1'" class="space-y-10">
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
                            <div x-cloak x-show="selectedTab === 'day2'" class="space-y-10">
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
                    </div>
                </div>

                <div class="lg:pr-16 xl:pr-32">
                    <h4 class="text-heading-4-bold">
                        Headline sponsor: Mollie
                    </h4>
                    <p class="text-body mt-6">
                        Mollie is a robust payment service provider that integrates seamlessly with Magento,
                        offering a secure and flexible solution for processing online transactions. Visit
                        <a href="" class="underline">Mollie.nl</a> for more info!
                    </p>
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
                <div class="scrollbar-hidden mt-16 flex snap-x snap-mandatory overflow-x-scroll" x-ref="container">
                    @foreach (\App\Models\Speaker::all() as $speaker)
                        <x-speaker.item :speaker="$speaker"
                            class="w-full shrink-0 snap-start snap-always p-2 md:w-1/2 lg:w-1/4"
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

    <section class="bg-dark-gray bg-overlay overflow-hidden pb-12 pt-16 text-white">
        <div class="container relative mx-auto p-4">
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
                        <div class="hexagon flex w-2/5 items-center px-6 md:w-52">
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
