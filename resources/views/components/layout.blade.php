<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
    </head>
    <body>
        <main class="flex gap-x-5 min-h-screen">
            <aside class=" flex flex-col items-center px-7 py-5 bg-emerald-500 min-w-[275px]">
                <div class="p-2 border-b">
                    <x-title :text="'Меню навигации'" />
                </div>
            </aside>
            <section>
                {{ $slot }}
            </section>
        </main>
        <footer class="p-5">
            <h1>footer</h1>
        </footer>
    </body>
</html>
