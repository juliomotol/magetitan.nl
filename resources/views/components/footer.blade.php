<footer class="bg-primary pt-14 pb-16 flex flex-col items-center gap-12 text-white text-center">
    <img
        src="{{ Vite::asset('resources/images/footer-logo.png') }}"
        alt="Magetitans"
        class="h-24"
    >

    <nav class="flex items-center gap-12 ">
        @foreach (collect(Symfony\Component\Yaml\Yaml::parseFile(storage_path('app/data/navigation.yml')))->mapInto(Illuminate\Support\Fluent::class) as $item)
            <a href="{{ route($item->route) }}">
                {{ $item->title }}
            </a>
        @endforeach
    </nav>

    <section>
        <h4 class="text-heading-4">Organisation</h4>
        <p class="text-body">Brought to you by the Mage Titans Team, in partnership with Elgentos.</p>
        <ul class="flex items-center justify-center gap-4 mt-6 text-xs">
            <a href="">
                <li class="border border-white rounded-full w-6 h-6 flex items-center justify-center">
                    Fb
                </li>
            </a>

            <a href="">
                <li class="border border-white rounded-full w-6 h-6 flex items-center justify-center">
                    Ig
                </li>
            </a>

            <a href="">
                <li class="border border-white rounded-full w-6 h-6 flex items-center justify-center">
                    Tw
                </li>
            </a>
        </ul>
    </section>
</footer>
