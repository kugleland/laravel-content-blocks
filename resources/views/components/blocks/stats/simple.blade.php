<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
            @foreach ($data['stats'] as $stat)
                <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                    <dt class="text-base/7 text-gray-600">{{ $stat['title'] }}</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                        {{ $stat['value'] }}
                    </dd>
                </div>
            @endforeach
        </dl>
    </div>
</div>
