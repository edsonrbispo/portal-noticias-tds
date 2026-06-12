<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'Portal Notícias')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&display=swap"
        rel="stylesheet">

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
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('contato') }}">Contato</a></li>
                    <li><a href="{{ route('login') }}"
                            class="inline-block bg-blue-500 text-white px-5 py-1 rounded-md">Login</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="flex-1 max-w-7xl mx-auto my-10">

        @yield('conteudo')

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
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('contato') }}">Contato</a></li>
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
