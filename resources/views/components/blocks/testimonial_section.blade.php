@php
    $data = $attributes['info']['data'];

    $style = $data['style'];

@endphp

@if ($style)
    <div>
        <x-dynamic-component :component="'content-blocks::blocks.testimonial.' . $style" :data="$data" />
    </div>
@endif
