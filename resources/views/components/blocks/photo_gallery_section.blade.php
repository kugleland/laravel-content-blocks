@php
    $data = $attributes['info']['data'];

    $style = 'default'; // $data['style'];
@endphp

@if ($style)
    <div class="-mx-8">
        <x-dynamic-component :component="'content-blocks::blocks.photo-gallery.' . $style" :data="$data" />
    </div>
@endif
