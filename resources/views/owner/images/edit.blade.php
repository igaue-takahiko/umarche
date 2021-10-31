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
                    <form action="{{ route('owner.images.update', [ 'image' => $image->id ]) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="-m-2">
                            <div class="w-1/2 p-2 mx-auto">
                                <div class="relative">
                                    <label for="title" class="text-sm leading-7 text-gray-600">画像</label>
                                    <input type="text" id="title" name="title" value="{{ $image->title }}" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200">
                                </div>
                            </div>
                            <div class="w-1/2 p-2 mx-auto">
                                <div class="relative">
                                    <div class="w-32">
                                        <x-thumbnail :filename="$image->filename" type="products" />
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-around w-full p-2 mt-4">
                                <button type="button" class="px-8 py-2 text-lg text-white bg-gray-400 border-0 rounded focus:outline-none hover:bg-gray-500" onclick="location.href= '{{ route('owner.images.index') }}'">戻る</button>
                                <button type="submit" class="px-8 py-2 text-lg text-white bg-blue-500 border-0 rounded focus:outline-none hover:bg-blue-600">更新する</button>
                            </div>
                        </div>
                    </form>
                    <form id="delete_{{ $image->id }}" action="{{ route('owner.images.destroy', ['image' => $image->id]) }}" method="POST">
                        @csrf
                        @method('delete')
                        <div class="flex justify-around w-full p-2 mt-32">
                            <a href="#" data-id="{{ $image->id }}" onclick="deletePost(this)" class="px-4 py-2 text-white bg-red-600 border-0 rounded focus:outline-none hover:bg-red-700">削除</a>
                        </td>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <script>
        function deletePost(e) {
            'use strict'
            if (confirm('本当に削除してもいいですか？')) {
                document.getElementById(`delete_${e.dataset.id}`).submit()
            }
        }
    </script>
</x-app-layout>
