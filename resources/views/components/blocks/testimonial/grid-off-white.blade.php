<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-base/7 font-semibold text-indigo-600">{{ $data['pre_heading'] }}</h2>
            <p class="mt-2 text-balance text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                {{ $data['heading'] }}</p>
        </div>
        <div class="mx-auto mt-16 flow-root max-w-2xl sm:mt-20 lg:mx-0 lg:max-w-none">
            <div class="-mt-8 sm:-mx-4 sm:columns-2 sm:text-[0] lg:columns-3">

                @foreach ($data['testimonials'] as $testimonial)
                    <div class="pt-8 sm:inline-block sm:w-full sm:px-4">
                        <figure class="rounded-2xl bg-gray-50 p-8 text-sm/6">
                            <blockquote class="text-gray-900">
                                <p>“{{ $testimonial['quote'] }}”</p>
                            </blockquote>
                            <figcaption class="mt-6 flex items-center gap-x-4">
                                <img class="size-10 rounded-full bg-gray-50"
                                    src="{{ $testimonial['image'] ? Storage::url($testimonial['image']) : 'https://placehold.co/200x200?text=' . $testimonial['name'] }}"
                                    alt="">
                                <div>
                                    <div class="font-semibold text-gray-900">{{ $testimonial['name'] }}</div>
                                    <div class="text-gray-600">{{ $testimonial['description'] }}</div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                @endforeach

                <!-- More testimonials... -->
            </div>
        </div>
    </div>
</div>
