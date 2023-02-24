<div class="p-5 border border-slate-300">
  <h1 class="text-xl font-bold">От: {{$comment -> user_name}}</h1>
  <h3>Почта: {{ $comment -> user_email }}</h3>
  <span>Отправлено: {{ $comment -> created_at }}</span>
  <p class="py-3 text-lg">{{ $comment -> comment_text }}</p>
</div>
