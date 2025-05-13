@php
    $data = $attributes['info']['data'];

    $style = $data['style'];

@endphp

@if ($style)
    <div class="">
        <x-dynamic-component :component="'content-blocks::blocks.bento-grid.' . $style" :data="$data" />
    </div>
@endif
