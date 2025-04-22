<?php

use function Laravel\Folio\name;

name('tickets.index');
?>

@php
    $featuredSponsors = App\Models\Sponsor::all()->whereNotNull('featured')->sortBy('featured');
@endphp

<x-layout.base>
    <x-hero-section class="bg-[url('/resources/images/home/home.png')]">
        <h1 class="text-heading-2-bold">
            Get The Ticket
        </h1>
    </x-hero-section>

    <section class="bg-dark-gray bg-overlay overflow-hidden pb-20 pt-28 text-white">
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
                        <div class="hexagon flex w-36 items-center px-6 md:w-48">
                            <img src="{{ Vite::asset($sponsor->img) }}" alt="{{ $sponsor->name }}" class="w-full" />
                        </div>
                        @if ($loop->iteration === 3)
                            <div class="w-full md:hidden md:w-auto"></div>
                        @endif
                    @endforeach
                </div>
            </section>
        </div>
    </section>
</x-layout.base>
