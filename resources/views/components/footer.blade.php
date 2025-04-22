<footer class="bg-primary px-4 pb-16 pt-14 text-center text-white md:px-0">
    <div class="container mx-auto space-y-12 px-4">
        <img src="{{ Vite::asset('resources/images/footer-logo.png') }}" alt="Magetitans" class="mx-auto h-24">

        <ul class="flex flex-col justify-center gap-4 md:flex-row md:gap-8 lg:gap-12">
            @foreach ($navigation as $item)
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
            <ul class="mt-6 flex items-center justify-center gap-4 text-xs">
                @foreach ($socialLinks as $item)
                    <li>
                        <a href="{{ $item['url'] }}" target="_blank" rel="noopener noreferrer"
                            class="flex size-6 items-center justify-center rounded-full border border-white"
                        >
                            {{ $item['title'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </section>
    </div>
</footer>
