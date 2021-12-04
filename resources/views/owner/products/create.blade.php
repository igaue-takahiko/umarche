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
                    <form method="post" action="{{ route('owner.products.store') }}">
                        @csrf
                        <div class="-m-2">
                            <div class="w-1/2 p-2 mx-auto">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">商品名 ※必須</label>
                                    <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="w-1/2 p-2 mx-auto">
                                <div class="relative">
                                    <label for="information" class="text-sm leading-7 text-gray-600">商品情報 ※必須</label>
                                    <textarea id="information" name="information" rows="10" required
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">{{ old('information') }}</textarea>
                                </div>
                            </div>
                            <div class="w-1/2 p-2 mx-auto">
                                <div class="relative">
                                    <label for="price" class="text-sm leading-7 text-gray-600">価格 ※必須</label>
                                    <input type="number" id="price" name="price" value="{{ old('price') }}" required
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="w-1/2 p-2 mx-auto">
                                <div class="relative">
                                    <label for="sort_order" class="text-sm leading-7 text-gray-600">表示順</label>
                                    <input type="number" id="sort_order" name="sort_order"
                                        value="{{ old('sort_order') }}"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="w-1/2 p-2 mx-auto">
                                <div class="relative">
                                    <label for="quantity" class="text-sm leading-7 text-gray-600">初期在庫 ※必須</label>
                                    <input type="number" id="quantity" name="quantity" value="{{ old('quantity') }}"
                                        required
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                    <span class="text-sm">0〜99の範囲で入力してください</span>
                                </div>
                            </div>
                            <div class="w-1/2 p-2 mx-auto">
                                <div class="relative">
                                    <label for="shop_id" class="text-sm leading-7 text-gray-600">販売する店舗</label>
                                    <select name="shop_id" id="shop_id"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                        @foreach ($shops as $shop)
                                            <option value="{{ $shop->id }}">
                                                {{ $shop->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="w-1/2 p-2 mx-auto">
                                <div class="relative">
                                    <label for="category" class="text-sm leading-7 text-gray-600">カテゴリー</label>
                                    <select name="category" id="category"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                        @foreach ($categories as $category)
                                            <optgroup label="{{ $category->name }}">
                                                @foreach ($category->secondary as $secondary)
                                                    <option value="{{ $secondary->id }}">
                                                        {{ $secondary->name }}
                                                    </option>
                                                @endforeach
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <x-select-image :images="$images" name="image1" />
                            <x-select-image :images="$images" name="image2" />
                            <x-select-image :images="$images" name="image3" />
                            <x-select-image :images="$images" name="image4" />
                            <x-select-image :images="$images" name="image5" />
                            <div class="w-1/2 p-2 mx-auto">
                                <div class="relative flex justify-around">
                                    <div><input type="radio" name="is_selling" value="1" class="mr-2" checked>
                                        販売中
                                    </div>
                                    <div>
                                        <input type="radio" name="is_selling" value="0" class="mr-2">停止中
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-around w-full p-2 mt-4">
                                <button type="button" onclick="location.href='{{ route('owner.products.index') }}'"
                                    class="px-8 py-2 text-lg bg-gray-200 border-0 rounded focus:outline-none hover:bg-gray-400">戻る</button>
                                <button type="submit"
                                    class="px-8 py-2 text-lg text-white bg-indigo-500 border-0 rounded focus:outline-none hover:bg-indigo-600">
                                    登録する
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        'use strict'
        const images = document.querySelectorAll('.image')

        images.forEach(image => {
            image.addEventListener('click', function(e) {
                const imageName = e.target.dataset.id.substr(0, 6)
                const imageId = e.target.dataset.id.replace(imageName + '_', '')
                const imageFile = e.target.dataset.file
                const imagePath = e.target.dataset.path
                const modal = e.target.dataset.modal
                document.getElementById(imageName + '_thumbnail').src = imagePath + '/' + imageFile
                document.getElementById(imageName + '_hidden').value = imageId
                MicroModal.close(modal);
            }, )
        })
    </script>

</x-app-layout>
