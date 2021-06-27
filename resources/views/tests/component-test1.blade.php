<x-tests.app>
    <x-slot name="header">
        header1
    </x-slot>
    <h2>test1</h2>
<x-tests.card title="タイトル" content="本文です。" :message="$message" />
<x-tests.card title="タイトル2" />
<x-tests.card title="CSSを変更したい" class="bg-red-300" />
</x-tests.card>
