<div class="bg-gray-900">

    <div class="relative isolate overflow-hidden">
        <img src="{{ $data['background_image'] }}" alt="" class="absolute inset-0 -z-10 size-full object-cover">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
            aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="bg-white/50 backdrop-blur-sm ">


            <div class="mx-auto max-w-7xl px-6 lg:px-8   py-12">
                <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                    <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                        @if (1 === 2)
                            <div
                                class="relative rounded-full px-3 py-1 text-sm/6 text-gray-400 ring-1 ring-white/10 hover:ring-white/20">
                                Announcing our next round of funding. <a href="#"
                                    class="font-semibold text-white"><span class="absolute inset-0"
                                        aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
                            </div>
                        @endif
                    </div>
                    <div class="text-center">
                        <h1 class="text-balance text-5xl font-semibold tracking-tight text-neutral-800 sm:text-7xl">
                            {!! $data['hero_title'] !!}
                        </h1>
                        <p class="mt-8 text-pretty text-lg font-medium text-gray-400 sm:text-xl/8">
                            {!! $data['hero_content'] !!}
                        </p>
                        <div class="mt-10 flex items-center justify-center gap-x-6">
                            @foreach ($data['buttons'] as $button)
                                <flux:button :variant="($button['variant'] == 'default') ? null: $button['variant']"
                                    :href="$button['url']" :icon-trailing="$button['icon']">
                                    {{ $button['label'] }}
                                </flux:button>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
            aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </div>
</div>
