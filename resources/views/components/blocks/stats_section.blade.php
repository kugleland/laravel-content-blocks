@php
    $data = $attributes['info']['data'];

    $style = $data['style'];

@endphp

@if ($style)
    <div class="-mx-8">
        <x-dynamic-component :component="'content-blocks::blocks.stats.' . $style" :data="$data" />
    </div>
@endif
