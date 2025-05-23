<div class="bg-gray-900 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h2 class="text-center text-lg/8 font-semibold text-white">{{ $data['heading'] }}</h2>
        <div
            class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
            @foreach ($data['logos'] as $logo)
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1 invert"
                    src="{{ Storage::url($logo['image']) }}" alt="{{ $logo['name'] }}" width="158" height="48">
            @endforeach
        </div>
    </div>
</div>
