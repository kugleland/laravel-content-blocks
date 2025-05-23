<div class="bg-white">
    <div class="relative">
        <div class="mx-auto max-w-7xl">
            <div class="relative z-10 pt-14 lg:w-full lg:max-w-2xl">
                <svg class="absolute inset-y-0 right-8 hidden h-full w-80 translate-x-1/2 transform fill-white lg:block"
                    viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="0,0 90,0 50,100 0,100" />
                </svg>

                <div class="relative px-6 py-32 sm:py-40 lg:px-8 lg:py-56 lg:pr-0">
                    <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl">
                        <div class="hidden sm:mb-10 sm:flex">
                            @if (1 == 2)
                                <div
                                    class="relative rounded-full px-3 py-1 text-sm/6 text-gray-500 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                                    Anim aute id magna aliqua ad ad non deserunt sunt. <a href="#"
                                        class="whitespace-nowrap font-semibold text-indigo-600"><span
                                            class="absolute inset-0" aria-hidden="true"></span>Read more <span
                                            aria-hidden="true">&rarr;</span></a>
                                </div>
                            @endif
                        </div>
                        <h1 class="text-pretty text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">
                            {!! $data['hero_title'] !!}
                        </h1>
                        <div class="mt-8 prose">
                            {!! $data['hero_content'] !!}
                        </div>
                        <div class="mt-10 flex items-center gap-x-6">
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
        <div class="bg-gray-50 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="aspect-[3/2] object-cover lg:aspect-auto lg:size-full" src="{{ $data['mockup_image'] }}"
                alt="">
        </div>
    </div>
</div>
