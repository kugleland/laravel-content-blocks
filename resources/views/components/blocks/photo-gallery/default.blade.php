<div class="max-w-3xl mx-auto py-12">
    @php
        $images = $data['gallery_images'];

    @endphp
    @if ($images)
        <flux:card>
            <div class="pswp-gallery grid grid-cols-2 gap-4" id="gallery">

                @foreach ($images as $key => $image)
                    @php
                        $data = getimagesize(storage_path('app/public/' . $image['image']));
                        $width = $data[0];
                        $height = $data[1];

                    @endphp

                    <a href="{{ Storage::url($image['image']) }}" data-pswp-width="{{ $width }}"
                        data-pswp-height="{{ $height }}" target="_blank"
                        class="shadow hover:opacity-80 transition-opacity duration-300 relative">
                        <img src="{{ Storage::url($image['image']) }}" alt="{{ $image['alt'] }}"
                            class="w-full h-full object-cover rounded" />
                        @if ($image['caption'])
                            <div class="absolute bottom-0 right-0 px-3 py-1 rounded mb-2 mr-2 bg-black/50">
                                <flux:text class="text-sm text-neutral-50">{{ $image['caption'] }}</flux:text>
                            </div>
                        @endif
                    </a>
                @endforeach
            </div>
        </flux:card>
    @endif
</div>
