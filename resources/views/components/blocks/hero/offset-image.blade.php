<div class="bg-white">

    <div class="relative isolate overflow-hidden bg-gradient-to-b from-indigo-100/20 pt-14">
        <div class="absolute inset-y-0 right-1/2 -z-10 -mr-96 w-[200%] origin-top-right skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:-mr-80 lg:-mr-96"
            aria-hidden="true"></div>
        <div class="mx-auto max-w-7xl px-6 py-32 sm:py-40 lg:px-8">
            <div
                class="mx-auto max-w-2xl lg:mx-0 lg:grid lg:max-w-none lg:grid-cols-2 lg:gap-x-16 lg:gap-y-8 xl:grid-cols-1 xl:grid-rows-1 xl:gap-x-8">
                <h1
                    class="max-w-2xl text-balance text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl lg:col-span-2 xl:col-auto">
                    {!! $data['hero_title'] !!}
                </h1>
                <div class="mt-6 max-w-xl lg:mt-0 xl:col-end-1 xl:row-start-1">
                    <div class="prose">
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
                <img src="{{ $data['mockup_image'] }}" alt=""
                    class="mt-10 aspect-[6/5] w-full max-w-lg rounded-2xl object-cover sm:mt-16 lg:mt-0 lg:max-w-none xl:row-span-2 xl:row-end-2 xl:mt-36">
            </div>
        </div>
        <div class="absolute inset-x-0 bottom-0 -z-10 h-24 bg-gradient-to-t from-white sm:h-32"></div>
    </div>
</div>
