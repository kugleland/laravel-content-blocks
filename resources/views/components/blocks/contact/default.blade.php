<div class="bg-white py-8 sm:py-16">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl divide-y divide-gray-100 lg:mx-0 lg:max-w-none">
            <div class="grid grid-cols-1 gap-10 py-16 lg:grid-cols-3">
                <div>
                    <div class="py-1">
                        <flux:text>{{ $data['pre_title'] }}</flux:text>
                    </div>
                    <h2 class="text-pretty text-4xl font-semibold tracking-tight text-neutral-900">
                        {{ $data['title'] }}
                    </h2>
                    <div class="mt-4 text-base/7 text-neutral-600">
                        {!! $data['content'] !!}
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:col-span-2 lg:gap-8">
                    <div class="rounded-2xl bg-neutral-50 border border-neutral-200 p-10">
                        <h3 class="text-base/7 font-semibold text-neutral-900">Email</h3>

                        <dl class="mt-3 space-y-1 text-sm/6 text-neutral-600">
                            <div>
                                <dt class="sr-only">Email</dt>
                                <dd><a class="font-semibold text-accent"
                                        href="mailto:hello@janushelkjaer.com">hello@janushelkjaer.com</a></dd>
                            </div>
                        </dl>
                    </div>
                    <div class="rounded-2xl bg-neutral-50 border border-neutral-200 p-10">
                        <h3 class="text-base/7 font-semibold text-neutral-900">LinkedIn</h3>
                        <dl class="mt-3 space-y-1 text-sm/6 text-neutral-600">
                            <div>
                                <dt class="sr-only">LinkedIn</dt>
                                <dd><a class="font-semibold text-accent" href="https://linkedin.com/in/janushelkjaer"
                                        target="_blank">linkedin.com/in/janushelkjaer</a>
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
