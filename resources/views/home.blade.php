<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'Portal Notícias')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-50 text-slate-800 min-h-screen flex flex-col">
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto flex justify-between py-3 items-center">
            <div>
                <img src="img/logo-portal-br-light.svg" alt="Portal Notícias">
            </div>
            <nav>
                <ul class="flex gap-5 text-slate-800 items-center">
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="#" class="inline-block bg-blue-500 text-white px-5 py-1 rounded-md">Login</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="flex-1 max-w-7xl mx-auto my-10">
        <div>
            <h2 class="text-2xl font-bold">Últimas Notícias</h2>
            <p class="text-sm text-slate-600">Fique por dentro das novidades, tendências e acontecimentos mais recentes
                em um só lugar.</p>
        </div>
        <div class="flex gap-3 mt-6 mb-6">
            <a href="#" class="bg-[#4040fd] text-white px-3 py-0.5 rounded-full">Todas</a>
            <a href="#" class="bg-[#ae40fd] text-white px-3 py-0.5 rounded-full">Tecnologia</a>
            <a href="#" class="bg-[#fd9e40] text-white px-3 py-0.5 rounded-full">Educação</a>
            <a href="#" class="bg-[#4088fd] text-white px-3 py-0.5 rounded-full">Negócio</a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">



            @for ($i = 0; $i < 3; $i++)
                <article class="bg-white rounded-lg overflow-hidden shadow-sm">
                    <div class="overflow-hidden h-50">
                        <img src="https://placehold.co/600x300" class="w-full h-full object-cover" alt="Foto Capa">
                    </div>

                    <div class="p-3">
                        <span class="bg-[#ae40fd] text-white px-3 py-0.5 rounded-full text-sm">Tecnologia</span>

                        <h3 class="font-bold text-lg mt-3">PHP continua dominando o desenvolvimento Web</h3>

                        <p class="text-sm">Descubra por que PHP segue sendo a linguagem mais utilizada para
                            desenvolvimento
                            de
                            aplicações web em
                            2026</p>
                        <div class="text-xs border-t border-slate-100 mt-3 pt-3">
                            29/05/2026
                        </div>
                    </div>

                </article>
            @endfor
        </div>

        <div class="mt-8 flex justify-center gap-2">
            <a href="#" class="bg-slate-200 rounded-md px-3 py-1.5">Anterior</a>
            <a href="#" class="bg-slate-200 rounded-md px-3 py-1.5">1</a>
            <a href="#" class="bg-slate-200 rounded-md px-3 py-1.5">2</a>
            <a href="#" class="bg-slate-200 rounded-md px-3 py-1.5">Próximo</a>
        </div>

    </main>
    <footer class="bg-slate-900 text-slate-400">
        <div class="max-w-7xl mx-auto py-4">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div>
                    <h2 class="font-semibold text-white mb-2">PortalBR</h2>
                    <p>Plataforma criada em aula para aprender laravel</p>
                </div>
                <div>
                    <h2 class="font-semibold text-white mb-2">Navegar</h2>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </div>
                <div>
                    <h2 class="font-semibold text-white mb-2">Tags</h2>
                    <div class="flex gap-4">
                        <span class="bg-slate-800 text-slate-200 rounded-md px-3 py-1.5">PHP 8</span>
                        <span class="bg-slate-800 text-slate-200 rounded-md px-3 py-1.5">SQL</span>
                        <span class="bg-slate-800 text-slate-200 rounded-md px-3 py-1.5">Laravel</span>
                        <span class="bg-slate-800 text-slate-200 rounded-md px-3 py-1.5">C#</span>
                    </div>
                </div>
            </div>
            <div class="border-t border-slate-500 text-center p-2 mt-5">
                Todos os direitos são reservados.
            </div>
        </div>
    </footer>
</body>

</html>
