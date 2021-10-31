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
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form action="{{ route('owner.shops.update', ['shop' => $shop->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="-m-2">
                            <div class="w-1/2 p-2 mx-auto">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">店名 ※必須</label>
                                    <input type="text" id="name" name="name" value="{{ $shop->name }}" required class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200">
                                </div>
                            </div>
                            <div class="w-1/2 p-2 mx-auto">
                                <div class="relative">
                                    <label for="information" class="text-sm leading-7 text-gray-600">店舗情報 ※必須</label>
                                    <textarea id="information" name="information" required rows="10" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200">{{ $shop->information }}</textarea>
                                </div>
                            </div>
                            <div class="w-1/2 p-2 mx-auto">
                                <div class="relative">
                                    <div class="w-32">
                                        <x-thumbnail :filename="$shop->filename" type="shops" />
                                    </div>
                                </div>
                            </div>
                            <div class="w-1/2 p-2 mx-auto">
                                <div class="relative">
                                    <label for="image" class="text-sm leading-7 text-gray-600">画像</label>
                                    <input type="file" id="image" name="image" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200" accept=".jpeg, .png, .jpg">
                                </div>
                            </div>
                            <div class="w-1/2 p-2 mx-auto">
                                <div class="relative flex justify-around">
                                    <div>
                                        <input type="radio" name="is_selling" id="is_selling"  class="mr-2" value="1" {{ $shop->is_selling === true ? 'checked' : '' }} >販売中
                                    </div>
                                    <div>
                                        <input type="radio" name="is_selling" id="is_selling" class="mr-2" value="0" {{ $shop->is_selling === false ? 'checked' : '' }} >販売停止中
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-around w-full p-2 mt-4">
                                <button type="button" class="px-8 py-2 text-lg text-white bg-gray-400 border-0 rounded focus:outline-none hover:bg-gray-500" onclick="location.href= '{{ route('owner.shops.index') }}'">戻る</button>
                                <button type="submit" class="px-8 py-2 text-lg text-white bg-blue-500 border-0 rounded focus:outline-none hover:bg-blue-600">更新する</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
