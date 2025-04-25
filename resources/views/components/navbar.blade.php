@push('scripts')
    <script>
        document.addEventListener('alpine:init', () => Alpine.store('navTransparent', true))
    </script>
@endpush

<nav {{ $attributes->class('fixed inset-x-0 top-0 z-30 bg-dark-gray/30 transition-colors') }} x-data="{ open: false }"
    :class="{ 'bg-dark-gray': !$store.navTransparent || open, 'bg-dark-gray/30': $store.navTransparent && !open }"
>
    <div
        class="container mx-auto flex min-h-[96px] flex-wrap items-center justify-between px-4 pb-5 pt-6 lg:min-h-[120px]">
        <a href="{{ route('index') }}" class="flex items-center space-x-3">
            <img src="{{ Vite::asset('resources/images/heading-logo.png') }}" alt="Magetitans" class="w-[120px]">
        </a>

        <div class="flex space-x-3 lg:order-2 lg:space-x-0">
            <x-button href="https://www.eventbrite.com/e/magetitans-groningen-tickets-862029402147" target="_blank"
                class="w-[120px]"
            >
                Register
            </x-button>
            </a>
            <button type="button"
                class="inline-flex size-12 items-center justify-center rounded-lg p-2 text-white lg:hidden"
                @click="open = !open"
            >
                <span class="sr-only">Open main menu</span>
                <svg
                    class="size-5"
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

        <div class="hidden w-full items-center justify-between lg:order-1 lg:flex lg:w-auto"
            :class="{ 'hidden': !open }"
        >
            <ul class="mt-5 flex flex-col gap-4 p-4 text-white lg:mt-0 lg:flex-row lg:gap-6 lg:p-0 xl:gap-12">
                @foreach ($navigation as $item)
                    <li>
                        <a href="{{ route($item->route) }}" @class([
                            'h-full pb-1 border-b-4',
                            'border-primary' => Route::is($item->route),
                            'border-transparent' => !Route::is($item->route),
                        ])>
                            {{ $item->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
