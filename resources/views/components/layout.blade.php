<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
    </head>
    <body>
        <header class="p-5 shadow-md flex justify-between items-center">
            <x-title :text="'Серверное веб-программирование'" :tw="'text-black'"/>
            <div class="flex gap-x-3">
                <button class="bg-green-600 p-3 text-white rounded-xl">Войти</button>
                <button>Зарегистрироваться</button>
            </div>
        </header>
        <main class="flex min-h-screen">
            <aside class="flex flex-col gap-y-5 px-7 py-5 min-w-[265px] shadow-md">
                <div>
                    <x-title :text="'Меню навигации'" :tw="'p-2 border-b text-center'"/>
                </div>
                <nav class="flex flex-col gap-y-3">
                    @foreach ([
                            array('href' => '/', 'title' => 'Главная'),
                            array('href' => '/about', 'title' => 'О себе'),
                            array('href' => '/articles', 'title' => 'Статьи'),
                            array('href' => '/comments', 'title' => 'Гостевая книга')
                          ] as $link)
                            <x-link :href="$link['href']">
                                <span class="text-indigo-500">{{$link['title']}}</span>
                            </x-link>
                    @endforeach 
                </nav>
            </aside>
            <section class="flex-1">
                {{ $slot }}
            </section>
        </main>
        <footer class="p-5 flex items-center justify-center">
            <h1>&copy; AUPET 2023</h1>
        </footer>
    </body>
</html>
