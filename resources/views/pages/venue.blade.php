<?php

use function Laravel\Folio\name;

name('venue.index');
?>

<x-layout.base title="Venue">
    <x-hero-section class="bg-[url('/resources/images/venue.jpg')]">
        <h1 class="text-heading-2-bold">
            About the Venue
        </h1>
    </x-hero-section>

    <section class="bg-dark-gray bg-overlay overflow-hidden py-20 text-white">
        <div class="container relative mx-auto space-y-20 p-4">
            <section class="space-y-4">
                <h2 class="text-heading-2-bold">
                    Venue - DOT - Groningen
                </h2>
                <p class="text-body">
                    We are hosting the event in DOT. DOT is a multifunctional, creative meeting place in the heart of
                    Groningen. On the ground floor you will find our spacious gastrobar and atmospheric terrace outside.
                    It is a wonderful place suitable for coffee, tea, lunch, drinks or dinner. Our beach terrace borders
                    the city beach of Groningen, a popular hotspot. The foyer, with its own bar, is located on the first
                    floor. Extremely suitable for private events, lectures, meetings and other types of gatherings,
                    ranging from 10 to 250 people. On the second floor is the beautiful Dome, a breathtaking film and
                    theater room, furnished with 234 luxurious seats. The room is equipped with a high-tech 3D digital
                    sound system (60 speakers and 4 subwoofers) and has an RGB programmable lighting system. Depending
                    on the set-up, the maximum capacity of the event in DOT is 240 people.
                </p>
            </section>
            <section class="space-y-4">
                <h2 class="text-heading-2-bold">
                    So why Groningen?
                </h2>
                <p class="text-body">
                    Why are we hosting this event in Groningen? Well, as many of you know, Groningen is the Magento
                    capital of the Netherlands. We have the most certified developers of any Dutch city. We even rank
                    4th worldwide according to research by Inchoo!
                </p>
                <p class="text-body">
                    Besides this, Groningen is a beautiful and quaint student city with a population of 200.000
                    (including over 30.000 students!). Here are <a
                        href="https://www.rug.nl/education/student-blog/8-surprising-facts-about-groningen?lang=en"
                        class="underline"
                    >more great facts about our great city</a>. Now you know why.
                </p>
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
                        Venue Gallery
                    </h2>
                    <div class="space-y-4 lg:w-1/3">
                        <h5 class="text-heading-5-bold">
                            Dot Groningen
                        </h5>
                        <p class="text-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </section>
            <section class="space-y-4">
                <h2 class="text-heading-2-bold">
                    Venue Facilities
                </h2>
                <p class="text-body">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae alias quas necessitatibus
                    architecto ab ipsa labore natus minus accusamus perspiciatis cupiditate, culpa magnam. Hic quam
                    excepturi aspernatur odio ex commodi!
                </p>
                <div class="mt-12 grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                    <x-venue.item icon="local_cafe" title="Hall Conference">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                    </x-venue.item>
                    <x-venue.item icon="hotel" title="Accommodation">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                    </x-venue.item>
                    <x-venue.item icon="restaurant" title="Healthy Food">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                    </x-venue.item>
                    <x-venue.item icon="directions_car" title="Personal Transportation">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                    </x-venue.item>
                    <x-venue.item icon="verified_user" title="High Privacy and Security">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                    </x-venue.item>
                    <x-venue.item icon="workspace_premium" title="Best Quality Services">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                    </x-venue.item>
                </div>
            </section>
            <section class="lg:flex lg:items-stretch">
                <div class="space-y-4 lg:w-1/2 lg:pb-20 lg:pr-16 xl:pr-32">
                    <h2 class="text-heading-2-bold">
                        Get Direction to Event Venue
                    </h2>
                    <p class="text-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </p>
                    <div class="mt-12 space-y-8">
                        <div class="flex items-center gap-4">
                            <div class="bg-primary flex aspect-square size-16 items-center justify-center rounded-full">
                                <x-icon name="call" />
                            </div>
                            <div>
                                <p class="text-body">Phone Number</p>
                                <a href="tel:+31502112514" class="underline">050 211 2514</a>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="bg-primary flex aspect-square size-16 items-center justify-center rounded-full">
                                <x-icon name="mail" />
                            </div>
                            <div>
                                <p class="text-body">Email</p>
                                <a href="mailto:info@dotgroningen.nl" class="underline">info@dotgroningen.nl</a>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="bg-primary flex aspect-square size-16 items-center justify-center rounded-full">
                                <x-icon name="location_pin" />
                            </div>
                            <div>
                                <p class="text-body">Email</p>
                                <a href="https://maps.app.goo.gl/8VeEAE6UZ6KSRpxx8" class="underline">Vrydemalaan 2,
                                    9713 WS Groningen</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 lg:relative lg:mt-0 lg:w-1/2">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2388.5896680619876!2d6.565081776724178!3d53.2252052722544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c9cd5c0030a4b3%3A0xd5b2312f858a2311!2sDOT%20Groningen!5e0!3m2!1sen!2sph!4v1745353393084!5m2!1sen!2sph"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        class="aspect-square w-full lg:absolute lg:left-0 lg:aspect-auto lg:h-full lg:w-[50vw]"
                    ></iframe>
                </div>
            </section>
        </div>
    </section>
</x-layout.base>
