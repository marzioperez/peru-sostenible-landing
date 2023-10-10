<div>
    <div class="container sm:pt-16">
        <div>
            <h1 class="text-[#3E3C4F] sm:text-5xl text-4xl leading-none mb-0 uppercase">En vivo</h1>
        </div>
    </div>
    <div class="container sm:pb-10 pb-6">
        <div class="sm:grid grid-cols-12 gap-5">
            <div class="col-span-8">
                <livewire:event.live.video :logged-in="$loggedIn" />
                <livewire:event.live.activities :logged-in="$loggedIn" />
            </div>
            <div class="col-span-4">
                <livewire:event.live.chat :logged-in="$loggedIn" />
                <div class="mt-5">
                    <livewire:event.live.question :logged-in="$loggedIn" />
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
@endpush
