<x-layout>
    <div class="flex flex-col gap-y-5 p-5">
        <div class="flex justify-between items-center">
            <x-title :text="'Статьи'" :tw="'text-black'"/>
            <x-link :href="'/articles/create'">
                <span class="text-indigo-500">Написать статью</span>
            </x-link>
        </div>
        <div class="grid grid-cols-3 gap-3">
            @foreach ($articles as $article)
                <x-articles.article :article="$article" :isSingle="false" />
            @endforeach
        </div>
    </div>
</x-layout>
