<div x-data="{
    notifications: [],
    displayDuration: 5000,
    addNotification({ type = 'success', sender = null, title = null, message = null }) {
        this.notifications.push({
            id: Date.now(),
            type,
            sender,
            title,
            message
        })
    },
    removeNotification(id) {
        setTimeout(() => {
            this.notifications = this.notifications.filter(
                (notification) => notification.id !== id,
            )
        }, 400);
    },
    init() {
        @foreach(session('notifications') ?? [] as $notification)
        this.addNotification({
            type: '{{ $notification['type'] }}',
            title: '{{ $notification['title'] }}',
            message: '{{ $notification['message'] }}',
        })
        @endforeach
    }
}">
    <div x-on:mouseenter="$dispatch('pause-auto-dismiss')" x-on:mouseleave="$dispatch('resume-auto-dismiss')"
        class="z-99 group pointer-events-none fixed inset-x-8 top-0 flex max-w-full flex-col gap-2 bg-transparent px-6 py-6 md:bottom-0 md:left-[unset] md:right-0 md:top-[unset] md:max-w-sm"
    >
        <template x-for="(notification, index) in notifications" x-bind:key="notification.id">
            <div
                x-data="{ isVisible: false, timeout: null }"
                x-cloak
                x-show="isVisible"
                class="pointer-events-auto relative text-white"
                role="alert"
                x-on:pause-auto-dismiss.window="clearTimeout(timeout)"
                x-on:resume-auto-dismiss.window=" timeout = setTimeout(() => {(isVisible = false), removeNotification(notification.id) }, displayDuration)"
                x-init="$nextTick(() => { isVisible = true }), (timeout = setTimeout(() => { isVisible = false, removeNotification(notification.id) }, displayDuration))"
                x-transition:enter="transition duration-300 ease-out"
                x-transition:enter-end="translate-y-0"
                x-transition:enter-start="translate-y-8"
                x-transition:leave="transition duration-300 ease-in"
                x-transition:leave-end="-translate-x-24 opacity-0 md:translate-x-24"
                x-transition:leave-start="translate-x-0 opacity-100"
            >
                <div class="flex w-full items-center gap-4 p-4 transition-all duration-300"
                    x-bind:class="{ 'bg-green-600': notification.type === 'success', 'bg-red-600': notification.type === 'danger' }"
                >
                    <div>
                        <x-icon x-show="notification.type === 'success'" name="check_circle" class="!text-4xl" />
                        <x-icon x-show="notification.type === 'danger'" name="error" class="!text-4xl" />
                    </div>
                    <div>
                        <h3 x-cloak x-show="notification.title" class="text-heading-6-bold" x-text="notification.title">
                        </h3>
                        <p x-cloak x-show="notification.message" class="text-body-sm" x-text="notification.message"></p>
                    </div>
                    <button type="button" class="ml-auto" aria-label="dismiss notification"
                        x-on:click="(isVisible = false), removeNotification(notification.id)"
                    >
                        <x-icon name="close" />
                    </button>
                </div>
            </div>
        </template>
    </div>
</div>
