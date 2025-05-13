<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                {!! $data['title'] !!}
            </h2>
            <p class="mt-6 text-base/7 text-gray-600">
                {!! $data['content'] !!}
            </p>
        </div>
        <div class="mx-auto mt-16 flex max-w-2xl flex-col gap-8 lg:mx-0 lg:mt-20 lg:max-w-none lg:flex-row lg:items-end">
            <div
                class="flex flex-col-reverse justify-between gap-x-16 gap-y-8 rounded-2xl bg-gray-50 p-8 sm:w-3/4 sm:max-w-md sm:flex-row-reverse sm:items-end lg:w-72 lg:max-w-none lg:flex-none lg:flex-col lg:items-start">
                <p class="flex-none text-3xl font-bold tracking-tight text-gray-900">{{ $data['stats'][0]['value'] }}</p>
                <div class="sm:w-80 sm:shrink lg:w-auto lg:flex-none">
                    <p class="text-lg font-semibold tracking-tight text-gray-900">{{ $data['stats'][0]['title'] }}</p>
                    <p class="mt-2 text-base/7 text-gray-600">{{ $data['stats'][0]['description'] }}</p>
                </div>
            </div>
            <div
                class="flex flex-col-reverse justify-between gap-x-16 gap-y-8 rounded-2xl bg-gray-900 p-8 sm:flex-row-reverse sm:items-end lg:w-full lg:max-w-sm lg:flex-auto lg:flex-col lg:items-start lg:gap-y-44">
                <p class="flex-none text-3xl font-bold tracking-tight text-white">{{ $data['stats'][1]['value'] }}</p>
                <div class="sm:w-80 sm:shrink lg:w-auto lg:flex-none">
                    <p class="text-lg font-semibold tracking-tight text-white">{{ $data['stats'][1]['title'] }}</p>
                    <p class="mt-2 text-base/7 text-gray-400">{{ $data['stats'][1]['description'] }}</p>
                </div>
            </div>
            <div
                class="flex flex-col-reverse justify-between gap-x-16 gap-y-8 rounded-2xl bg-indigo-600 p-8 sm:w-11/12 sm:max-w-xl sm:flex-row-reverse sm:items-end lg:w-full lg:max-w-none lg:flex-auto lg:flex-col lg:items-start lg:gap-y-28">
                <p class="flex-none text-3xl font-bold tracking-tight text-white">{{ $data['stats'][2]['value'] }}</p>
                <div class="sm:w-80 sm:shrink lg:w-auto lg:flex-none">
                    <p class="text-lg font-semibold tracking-tight text-white">{{ $data['stats'][2]['title'] }}</p>
                    <p class="mt-2 text-base/7 text-indigo-200">{{ $data['stats'][2]['description'] }}</p>
                </div>
            </div>



        </div>
    </div>
</div>
