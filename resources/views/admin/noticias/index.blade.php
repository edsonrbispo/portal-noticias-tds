<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Notícias
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-between items-center">
                    <h1 class="text-xl font-bold">Lista de Notícias</h1>
                    <a href="{{ route('admin.noticias.cadastrar') }}" class="bg-black text-white px-3 py-2 rounded">+ Nova
                        Notícia</a>
                </div>

                <div class="p-6">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="bg-cabecalho-tabela">
                                <th class="px-5 py-3.5 font-semibold text-left">ID</th>
                                <th class="px-5 py-3.5 font-semibold text-left">Título</th>
                                <th class="px-5 py-3.5 font-semibold text-left hidden md:table-cell">Resumo</th>
                                <th class="px-5 py-3.5 font-semibold text-left hidden md:table-cell">Categoria</th>
                                <th class="px-5 py-3.5 font-semibold text-left hidden md:table-cell">Publicação</th>
                                <th class="px-5 py-3.5 font-semibold">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-slate-50 transition">
                                <td class="px-5 py-3.5">1</td>
                                <td class="px-5 py-3.5">Título da Notícia</td>
                                <td class="px-5 py-3.5 hidden md:table-cell">Resumo da Notícia</td>
                                <td class="px-5 py-3.5 hidden md:table-cell">Tecnologia</td>
                                <td class="px-5 py-3.5 hidden md:table-cell">17/06/2026 19:40</td>
                                <td class="px-5 py-3.5 text-center">
                                    <a href="#" class="bg-gray-300 px-3 py-2 rounded">Editar</a>
                                    <a href="#" class="bg-red-300 px-3 py-2 rounded ml-2">Excluir</a>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition">
                                <td class="px-5 py-3.5">1</td>
                                <td class="px-5 py-3.5">Título da Notícia</td>
                                <td class="px-5 py-3.5 hidden md:table-cell">Resumo da Notícia</td>
                                <td class="px-5 py-3.5 hidden md:table-cell">Tecnologia</td>
                                <td class="px-5 py-3.5 hidden md:table-cell">17/06/2026 19:40</td>
                                <td class="px-5 py-3.5 text-center">
                                    <a href="#" class="bg-gray-300 px-3 py-2 rounded">Editar</a>
                                    <a href="#" class="bg-red-300 px-3 py-2 rounded ml-2">Excluir</a>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="6" class="text-center text-slate-400 px-5 py-3.5">
                                    <p>Nenhuma notícia cadastrada</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="flex justify-center m-6">
                    Paginação
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
