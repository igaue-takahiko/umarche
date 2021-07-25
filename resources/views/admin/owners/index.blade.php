<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            オーナー一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 mx-auto">
                            <x-flash-message status="info" />
                            <div class="flex justify-end mb-4">
                                <button class="px-8 py-2 text-lg text-white bg-blue-500 border-0 rounded focus:outline-none hover:bg-blue-600" onclick="location.href = '{{ route('admin.owners.create') }}'">新規登録する</button>
                            </div>
                            <div class="w-full mx-auto overflow-auto lg:w-2/3">
                                <table class="w-full text-left whitespace-no-wrap table-auto">
                                    <thead>
                                        <tr>
                                            <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 rounded-tl rounded-bl title-font">名前</th>
                                            <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">メールアドレス</th>
                                            <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">作成日</th>
                                            <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 rounded-tr rounded-br title-font"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($owners as $owner)
                                            <tr>
                                                <td class="px-4 py-3">{{ $owner->name }}</td>
                                                <td class="px-4 py-3">{{ $owner->email }}</td>
                                                <td class="px-4 py-3 text-lg text-gray-900">{{ $owner->created_at->diffForHumans() }}</td>
                                                <td class="px-4 py-3">
                                                    <button onclick="location.href = '{{ route('admin.owners.edit', [ 'owner' => $owner->id ]) }}'" class="px-4 py-2 text-white bg-blue-600 border-0 rounded focus:outline-none hover:bg-blue-700">編集</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="flex w-full pl-4 mx-auto mt-4 lg:w-2/3">
                                <a class="inline-flex items-center text-blue-500 md:mb-2 lg:mb-0">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                                </a>
                                <button class="flex px-6 py-2 ml-auto text-white bg-blue-500 border-0 rounded focus:outline-none hover:bg-blue-600">Button</button>
                            </div>
                        </div>
                    </section>
                    {{-- エロクアント
                    @foreach ($e_all as $e_owner)
                        {{ $e_owner->name }}
                        {{ $e_owner->created_at->diffForHumans() }}
                    @endforeach
                    <br/>
                    クエリビルダ
                    @foreach ($q_get as $q_owner)
                        {{ $q_owner->name }}
                        {{ Carbon\Carbon::parse($q_owner->created_at)->diffForHumans() }}
                    @endforeach --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
