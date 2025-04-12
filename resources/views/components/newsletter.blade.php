<section class="bg-neutral-300 py-14">
    <form action="" class="w-[448px] mx-auto space-y-4">
        <div>
            <h2 class="text-heading-2-bold text-center">Get updates!</h2>
            <h6 class="text-heading-6-bold text-primary text-center">Don’t miss our future updates</h6>
        </div>
        <x-input.wrapper label="Email" for="email">
            <x-input
                type="email"
                name="email"
                id="email"
                placeholder="your.email@example.com"
            />
        </x-input.wrapper>
        <x-input.wrapper label="Name" for="name">
            <x-input
            type="text"
            name="name"
            id="name"
            placeholder="Your name"
            />
        </x-input.wrapper>
        <button class="border w-full h-12 body-sm">
            Submit
        </button>
        <p class="text-body-sm text-center">We value your privacy and will never send irrelevant information</p>
    </form>
</section>
