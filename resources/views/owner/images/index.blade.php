<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-flash-message status="session('status')" />
                    <div class="flex justify-end mb-4">
                        <button class="px-8 py-2 text-lg text-white bg-blue-500 border-0 rounded focus:outline-none hover:bg-blue-600" onclick="location.href = '{{ route('owner.images.create') }}'">新規登録する</button>
                    </div>
                    <div class="flex flex-wrap">
                        @foreach ($images as $image)
                            <div class="w-1/4 p-2 mb:p-4">
                                <a href="{{ route('owner.images.edit', ['image' => $image->id]) }}">
                                    <div class="p-2 border rounded-md md:p-4">
                                        <x-thumbnail :filename="$image->filename" type="products" />
                                        <div class="text-gray-700">
                                            {{ $image->title }}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    {{ $images->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
