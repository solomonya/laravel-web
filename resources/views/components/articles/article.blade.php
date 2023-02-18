
<article class="flex flex-col gap-y-5 p-3 border border-slate-300 rounded-md">
    <x-link :href="route('articles.show', ['article' => $article])">
        <h3 class="text-orange-500 font-bold">{{ $article->title }}</h3>
    </x-link>
    <span>Дата создания: <b>{{$article -> created_at}}</b></span>
    <span>Автор: <b>{{$article -> author}}</b></span>
    @if ($isSingle)
        <p>{{ $article->content }}</p>
    @else
        <span class="truncate">{{ $article->content }}</span>
    @endif
</article>
