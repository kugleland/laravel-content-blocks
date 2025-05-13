@php
    $data = $attributes['info']['data'];
@endphp

<div class="max-w-7xl mx-auto">
    <div class="">
        <div class="py-12 prose dark:prose-invert max-w-3xl mx-auto">
            <x-markdown theme="material-theme">
                {!! $data['content'] !!}
            </x-markdown>
        </div>
    </div>
</div>
