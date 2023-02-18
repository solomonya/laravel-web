<x-layout>
    <div class="flex flex-col gap-y-6 p-5 max-w-xl">
        <x-title :text="'Новая статья'" :tw="'text-black'"/>
        <form method="POST" action="{{ route('articles.store') }}">
            @csrf
            <div class="flex flex-col gap-y-5">
                <input
                    name="title"
                    type="text"
                    class="mt-2 border-gray-300 border rounded-md p-2"
                    placeholder="Заголовок статьи"
                />
                <input
                    name="author" type="text"
                    class="border-gray-300 border rounded-md p-2"
                    placeholder="Автор"
                />
                <textarea
                name="content"
                placeholder="О чём хотите написать?"
                class="resize-none h-60 p-3 block w-full border rounded-md border-gray-300"
                ></textarea>
                <button
                    type="submit"
                    class="mt-4 px-5 py-3 bg-orange-500 text-white rounded-md"
                >
                    Отправить
                </button>
            </div>
        </form>
    </div>
</x-layout>
