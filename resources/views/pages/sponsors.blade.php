<?php

use function Laravel\Folio\name;

name('sponsors.index');
?>

@php
    $sponsors = App\Models\Sponsor::all();

    $headlineSponsors = $sponsors->where('level', 'headline')->sortBy('sort');
    $goldSponsors = $sponsors->where('level', 'gold')->sortBy('sort');
    $silverPlusSponsors = $sponsors->where('level', 'silver+')->sortBy('sort');
    $silverSponsors = $sponsors->where('level', 'silver')->sortBy('sort');
    $bronzeSponsors = $sponsors->where('level', 'bronze')->sortBy('sort');
    $afterPartySponsors = $sponsors->where('level', 'after-party')->sortBy('sort');
    $organisationMaterialSponsors = $sponsors->where('level', 'organisation-material')->sortBy('sort');
    $organisationSponsors = $sponsors->where('level', 'organisation')->sortBy('sort');
@endphp

<x-layout.base>
    <x-hero-section class="bg-[url('/resources/images/home/home.png')]">
        <h1 class="text-heading-2-bold">
            Sponsors
        </h1>
    </x-hero-section>

    <section class="bg-dark-gray bg-overlay overflow-hidden pb-20 pt-28 text-white">
        <div class="container relative mx-auto space-y-16 p-4">
            <section class="space-y-8">
                <h2 class="text-heading-2-bold">
                    Sponsorships
                </h2>
                <p class="text-body">
                    We are very proud of our sponsors and their commitment to this event.
                </p>
            </section>
            <section class="space-y-8 text-center">
                @if ($headlineSponsors->isNotEmpty())
                    <h2 class="text-heading-2-bold">
                        Headline Sponsor
                    </h2>
                    <div class="flex items-center justify-center gap-8">
                        @foreach ($headlineSponsors as $sponsor)
                            <div class="hexagon flex w-72 items-center justify-center px-8">
                                <img src="{{ Vite::asset($sponsor->img) }}" alt="{{ $sponsor->name }}" class="w-full">
                            </div>
                        @endforeach
                    </div>
                @endif

                @if ($goldSponsors->isNotEmpty())
                    <h2 class="text-heading-2-bold">
                        Gold Sponsors
                    </h2>
                    <div class="flex flex-wrap items-center justify-center gap-16">
                        @foreach ($goldSponsors as $sponsor)
                            <div class="hexagon flex w-52 items-center justify-center px-8">
                                <img src="{{ Vite::asset($sponsor->img) }}" alt="{{ $sponsor->name }}" class="w-full">
                            </div>
                        @endforeach
                    </div>
                @endif

                @if ($silverPlusSponsors->isNotEmpty())
                    <h2 class="text-heading-2-bold">
                        Silver+ Sponsors
                    </h2>
                    <div class="flex flex-wrap items-center justify-center gap-16">
                        @foreach ($silverPlusSponsors as $sponsor)
                            <div class="hexagon flex w-40 items-center justify-center px-8">
                                <img src="{{ Vite::asset($sponsor->img) }}" alt="{{ $sponsor->name }}" class="w-full">
                            </div>
                        @endforeach
                    </div>
                @endif

                @if ($silverSponsors->isNotEmpty())
                    <h2 class="text-heading-2-bold">
                        Silver Sponsors
                    </h2>
                    <div class="flex flex-wrap items-center justify-center gap-16">
                        @foreach ($silverSponsors as $sponsor)
                            <div class="hexagon flex w-40 items-center justify-center px-8">
                                <img src="{{ Vite::asset($sponsor->img) }}" alt="{{ $sponsor->name }}" class="w-full">
                            </div>
                        @endforeach
                    </div>
                @endif

                @if ($bronzeSponsors->isNotEmpty())
                    <h2 class="text-heading-2-bold">
                        Bronze Sponsors
                    </h2>
                    <div class="flex flex-wrap items-center justify-center gap-16">
                        @foreach ($bronzeSponsors as $sponsor)
                            <div class="hexagon flex w-40 items-center justify-center px-8">
                                <img src="{{ Vite::asset($sponsor->img) }}" alt="{{ $sponsor->name }}" class="w-full">
                            </div>
                        @endforeach
                    </div>
                @endif

                @if ($afterPartySponsors->isNotEmpty())
                    <h2 class="text-heading-2-bold">
                        After Party
                    </h2>
                    <div class="flex flex-wrap items-center justify-center gap-16">
                        @foreach ($afterPartySponsors as $sponsor)
                            <div class="hexagon flex w-40 items-center justify-center px-8">
                                <img src="{{ Vite::asset($sponsor->img) }}" alt="{{ $sponsor->name }}" class="w-full">
                            </div>
                        @endforeach
                    </div>
                @endif

                @if ($organisationMaterialSponsors->isNotEmpty())
                    <h2 class="text-heading-2-bold">
                        Organisation Material Sponsor
                    </h2>
                    <div class="flex flex-wrap items-center justify-center gap-16">
                        @foreach ($organisationMaterialSponsors as $sponsor)
                            <div class="hexagon flex w-40 items-center justify-center px-8">
                                <img src="{{ Vite::asset($sponsor->img) }}" alt="{{ $sponsor->name }}" class="w-full">
                            </div>
                        @endforeach
                    </div>
                @endif

                @if ($organisationSponsors->isNotEmpty())
                    <h2 class="text-heading-2-bold">
                        Organisation
                    </h2>
                    <div class="flex flex-wrap items-center justify-center gap-16">
                        @foreach ($organisationSponsors as $sponsor)
                            <div class="hexagon flex w-40 items-center justify-center px-8">
                                <img src="{{ Vite::asset($sponsor->img) }}" alt="{{ $sponsor->name }}" class="w-full">
                            </div>
                        @endforeach
                    </div>
                @endif
            </section>
        </div>
    </section>
</x-layout.base>
