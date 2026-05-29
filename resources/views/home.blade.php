<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'Portal Notícias')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-50 text-slate-800">
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
    <main class="max-w-7xl mx-auto my-10">
        <div>
            <h2 class="text-2xl font-bold">Últimas Notícias</h2>
            <p class="text-sm text-slate-600">Fique por dentro das novidades, tendências e acontecimentos mais recentes
                em um só lugar.</p>
        </div>
    </main>
    <footer class="bg-slate-900">
        Todos os direitos são reservados.
    </footer>
</body>

</html>
