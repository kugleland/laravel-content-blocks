<div class="relative bg-gray-900">
    <div class="relative h-80 overflow-hidden bg-indigo-600 md:absolute md:left-0 md:h-full md:w-1/3 lg:w-1/2">
        <img class="size-full object-cover" src="{{ Storage::url($data['image']) }}" alt="">
        {{-- <svg viewBox="0 0 926 676" aria-hidden="true"
            class="absolute -bottom-24 left-24 w-[57.875rem] transform-gpu blur-[118px]">
            <path fill="url(#60c3c621-93e0-4a09-a0e6-4c228a0116d8)" fill-opacity=".4"
                d="m254.325 516.708-90.89 158.331L0 436.427l254.325 80.281 163.691-285.15c1.048 131.759 36.144 345.144 168.149 144.613C751.171 125.508 707.17-93.823 826.603 41.15c95.546 107.978 104.766 294.048 97.432 373.585L685.481 297.694l16.974 360.474-448.13-141.46Z" />
            <defs>
                <linearGradient id="60c3c621-93e0-4a09-a0e6-4c228a0116d8" x1="926.392" x2="-109.635" y1=".176"
                    y2="321.024" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#776FFF" />
                    <stop offset="1" stop-color="#FF4694" />
                </linearGradient>
            </defs>
        </svg> --}}
    </div>
    <div class="relative mx-auto max-w-7xl py-24 sm:py-32 lg:px-8 lg:py-40">
        <div class="pl-6 pr-6 md:ml-auto md:w-2/3 md:pl-16 lg:w-1/2 lg:pl-24 lg:pr-0 xl:pl-32">
            <h2 class="text-base/7 font-semibold text-indigo-400">{{ $data['pre_title'] }}</h2>
            <div class="mt-2 text-4xl font-semibold tracking-tight text-white sm:text-5xl">
                {!! $data['title'] !!}
            </div>
            <div class="mt-6 text-base/7 text-gray-300">
                {!! $data['content'] !!}
            </div>
            <div class="mt-8">
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
