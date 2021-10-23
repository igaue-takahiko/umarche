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
                    @foreach ($shops as $shop)
                    <div class="w-1/2 p-4">
                        <a href="{{ route('owner.shops.edit', ['shop' => $shop->id]) }}">
                            <div class="p-4 border rounded-md">
                                <div class="mb-4">
                                    @if ($shop->is_selling)
                                        <span class="p-2 text-white bg-blue-400 border rounded-md">販売中</span>
                                    @else
                                        <span class="p-2 text-white bg-red-400 border rounded-md">販売停止中</span>
                                    @endif
                                </div>
                                <div class="text-xl">
                                    {{ $shop->name }}
                                </div>
                                <div>
                                    @if (empty($shop->filename))
                                        <img src="{{ asset('images/no_image.jpg') }}" alt="no_image">
                                    @else
                                        <img src="{{ asset('storage/shops/' . $shop->fielname) }}" alt="product_image">
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
