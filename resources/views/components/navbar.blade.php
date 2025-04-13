<nav
    {{ $attributes->class(' bg-dark-gray/30 transition-colors') }}
    x-data="{ open: false, atTop: window.pageYOffset < window.innerHeight }"
    @scroll.window="atTop = (window.pageYOffset < window.innerHeight)"
    :class="{'bg-dark-gray': !atTop, 'bg-dark-gray/30': atTop}"
>
    <div
        class="min-h-[96px] container mx-auto flex flex-wrap justify-between items-center px-4 pt-6 pb-5 lg:min-h-[120px]">
        <a
            href="{{ route('index') }}"
            class="flex items-center space-x-3"
        >
            <img
                src="{{ Vite::asset('resources/images/heading-logo.png') }}"
                alt="Magetitans"
                class="w-[120px]"
            >
        </a>

        <div class="flex space-x-3 lg:order-2 lg:space-x-0">
            <a
                href="https://www.eventbrite.com/e/magetitans-groningen-tickets-862029402147"
                target="_blank"
                class="bg-primary w-[120px] h-12 flex justify-center items-center text-white"
            >
                Register
            </a>
            <button
                type="button"
                class="w-12 h-12 inline-flex justify-center items-center p-2 text-white rounded-lg lg:hidden"
                @click="open = !open"
            >
                <span class="sr-only">Open main menu</span>
                <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 17 14"
                >
                    <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15"
                    />
                </svg>
            </button>
        </div>

        <div
            class="w-full hidden justify-between items-center lg:w-auto lg:flex lg:order-1"
            :class="{ 'hidden': !open }"
        >
            <ul class="flex flex-col gap-4 p-4 mt-5 text-white lg:flex-row lg:gap-6 lg:p-0 lg:mt-0 xl:gap-12">
                @foreach (collect(Symfony\Component\Yaml\Yaml::parseFile(storage_path('app/data/navigation.yml')))->mapInto(Illuminate\Support\Fluent::class) as $item)
                    <li>
                        <a
                            href="{{ route($item->route) }}"
                            @class([
                                'h-full pb-1 border-b-4',
                                'border-primary' => Route::is($item->route),
                                'border-transparent' => !Route::is($item->route),
                            ])
                        >
                            {{ $item->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
