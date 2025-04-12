<header {{ $attributes->class('w-full h-[120px] bg-dark-gray/30') }}>
    <div class="container mx-auto flex items-center justify-between h-full">
        <div>
            <img src="{{ Vite::asset('resources/images/heading-logo.png') }}" alt="Magetitans" class="w-[120px]" >
        </div>
        <nav class="flex items-center gap-12 text-white h-8">
            @foreach (collect(Symfony\Component\Yaml\Yaml::parseFile(storage_path('app/data/navigation.yml')))->mapInto(Illuminate\Support\Fluent::class) as $item)
                <a href="{{ route($item->route) }}" @class([
                    'h-full pb-1 border-b-4',
                    'border-primary' => Route::is($item->route),
                    'border-transparent' => !Route::is($item->route)
                ])>
                    {{ $item->title }}
                </a>
            @endforeach
        </nav>
        <a href="https://www.eventbrite.com/e/magetitans-groningen-tickets-862029402147" target="_blank" class="w-[120px] h-12 flex items-center justify-center bg-primary text-white">
            Register
        </a>
    </div>
</header>
