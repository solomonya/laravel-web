<x-layout>
    <div class="flex flex-col gap-y-5 p-5">
        <div class="flex justify-between items-center">
            <x-title :text="'Статьи'" :tw="'text-black'"/>
            <x-link :title="'Написать статью'" :href="'/articles/create'"/>
        </div>
        <div class="grid grid-cols-3 gap-3">
            @foreach ($articles as $article)
                <article class="flex flex-col gap-y-5 p-3 border border-slate-300 rounded-md">
                    <h3 class="text-orange-500">{{ $article->title }}</h3>
                    <span>{{$article -> created_at}}</span>
                    <p>Автор: {{$article -> author}}</p>
                    <p>{{ $article->content }}</p>
                </article>
            @endforeach
        </div>
    </div>
</x-layout>
