<footer class="bg-primary px-4 pt-14 pb-16 text-center text-white md:px-0">
    <div class="container mx-auto px-4 space-y-12">
        <img
            src="{{ Vite::asset('resources/images/footer-logo.png') }}"
            alt="Magetitans"
            class="mx-auto h-24"
        >

        <ul class="flex flex-col justify-center gap-4 lg:gap-12 md:flex-row md:gap-8">
            @foreach (GlobalData::get('navigation') as $item)
                <li>
                    <a href="{{ route($item->route) }}">
                        {{ $item->title }}
                    </a>
                </li>
            @endforeach
        </ul>

        <section>
            <h4 class="text-heading-4">Organisation</h4>
            <p class="text-body">Brought to you by the Mage Titans Team, in partnership with Elgentos.</p>
            <ul class="flex justify-center items-center gap-4 mt-6 text-xs">
                @foreach (GlobalData::get('social-links') as $item)
                    <li class="w-6 h-6 flex justify-center items-center rounded-full border border-white">
                        <a
                            href="{{ $item->url }}"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            {{ $item->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </section>
    </div>
</footer>
