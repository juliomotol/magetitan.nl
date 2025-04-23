<section class="bg-neutral-300 py-14" id="newsletter">
    <div class="container mx-auto px-4">
        <form action="{{ route('subscribe') }}" method="POST" class="mx-auto max-w-[448px] space-y-4">
            @csrf
            <div>
                <h2 class="text-heading-2-bold text-center">Get updates!</h2>
                <h6 class="text-heading-6-bold text-primary text-center">Don’t miss our future updates</h6>
            </div>
            <x-input.wrapper label="Email" for="email">
                <x-input type="email" name="email" id="email" placeholder="your.email@example.com" />
                @error('email')
                    <p class="text-red-500 text-body-sm mt-1">{{ $message }}</p>
                @enderror
            </x-input.wrapper>
            <x-input.wrapper label="Name" for="name">
                <x-input type="text" name="name" id="name" placeholder="Your name" />
                @error('name')
                    <p class="text-red-500 text-body-sm mt-1">{{ $message }}</p>
                @enderror
            </x-input.wrapper>
            <button class="body-sm h-12 w-full border">
                Submit
            </button>
            <p class="text-body-sm text-center">We value your privacy and will never send irrelevant information</p>
        </form>
    </div>
</section>
