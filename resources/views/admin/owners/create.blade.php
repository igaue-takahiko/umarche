<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            オーナー登録
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="relative text-gray-600 body-font">
                        <div class="container px-5 x-auto p">
                            <div class="flex flex-col w-full mb-12 text-center">
                                <h1 class="mb-4 text-2xl font-medium text-gray-900 sm:text-3xl title-font">オーナー登録</h1>
                            </div>
                            <div class="mx-auto lg:w-1/2 md:w-2/3">
                                <div class="m-2 f">
                                    <div class="w-1/2 p-2 mx-auto">
                                        <div class="relative">
                                            <label for="name" class="text-sm leading-7 text-gray-600">オーナー名</label>
                                            <input type="text" id="name" name="name" required class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200">
                                        </div>
                                    </div>
                                    <div class="w-1/2 p-2 mx-auto">
                                        <div class="relative">
                                            <label for="email" class="text-sm leading-7 text-gray-600">メールアドレス</label>
                                            <input type="email" id="email" name="email" required class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200">
                                        </div>
                                    </div>
                                    <div class="w-1/2 p-2 mx-auto">
                                        <div class="relative">
                                            <label for="password" class="text-sm leading-7 text-gray-600">パスワード</label>
                                            <input type="password" id="password" name="password" required class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200">
                                        </div>
                                    </div>
                                    <div class="w-1/2 p-2 mx-auto">
                                        <div class="relative">
                                            <label for="password_confirmation" class="text-sm leading-7 text-gray-600">パスワード確認</label>
                                            <input type="password" id="password_confirmation" name="password_confirmation" required class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200">
                                        </div>
                                    </div>
                                    <div class="flex justify-around w-full p-2 mt-4">
                                        <button class="px-8 py-2 text-lg text-white bg-gray-400 border-0 rounded focus:outline-none hover:bg-gray-500" onclick="location.href= '{{ route('admin.owners.index') }}'">戻る</button>
                                        <button class="px-8 py-2 text-lg text-white bg-blue-500 border-0 rounded focus:outline-none hover:bg-blue-600">登録する</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
