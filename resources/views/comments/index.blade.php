<x-layout>
    <section class="p-5 flex flex-col gap-y-5">
        <x-title :text="'Гостевая книга'" :tw="'text-black'"/>
        <form method="POST" action="{{ route('comments.store') }}">
            @csrf
            <div class="flex flex-col gap-y-5 max-w-[500px]">
                <input
                    name="user_email"
                    type="text"
                    class="mt-2 border-gray-300 border rounded-md p-2"
                    placeholder="kimigai@woldemaro.com"
                />
                <input
                    name="user_name" 
                    type="text"
                    class="border-gray-300 border rounded-md p-2"
                    placeholder="Woldemaro"
                />
                <textarea
                name="comment_text"
                placeholder="..."
                class="resize-none h-20 p-3 block w-full border rounded-md border-gray-300"
                ></textarea> 
                <button
                    type="submit"
                    class="mt-4 px-5 py-3 bg-orange-500 text-white rounded-md"
                >
                    Отправить
                </button>
            </div>
        </form>
        <div class="flex flex-col gap-y-5">
           @foreach ($comments as $comment)
             <x-comments.comment :comment="$comment" /> 
           @endforeach 
        </div>
    </section>
</x-layout>
