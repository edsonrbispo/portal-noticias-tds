{{-- @dd($noticias) --}}

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

                            @forelse ($noticias as $n)
                                <tr class="hover:bg-slate-50 transition">
                                    <td class="px-5 py-3.5">{{ $n->id }}</td>
                                    <td class="px-5 py-3.5">{{ $n->titulo }}</td>
                                    <td class="px-5 py-3.5 hidden md:table-cell">{{ $n->resumo }}</td>
                                    <td class="px-5 py-3.5 hidden md:table-cell">{{ $n->categoria_id }}</td>
                                    <td class="px-5 py-3.5 hidden md:table-cell">
                                        {{ $n->created_at->diffForHumans() }}
                                        <br>
                                        {{ $n->created_at->format('d/m/Y H:i') }}
                                    </td>
                                    <td class="px-5 py-3.5 text-center flex">
                                        <a href="#" class="bg-gray-300 px-3 py-2 rounded">Editar</a>

                                        <form action="{{ route('admin.noticias.excluir', $n->id) }}" method="post">
                                            @method('delete')
                                            @csrf

                                            <button type="submit" class="bg-red-300 px-3 py-2 rounded ml-2"
                                                onclick="return confirm('Deseja realmente excluir o registro?')">Excluir</button>
                                        </form>


                                    </td>
                                </tr>
                            @empty

                                <tr>
                                    <td colspan="6" class="text-center text-slate-400 px-5 py-3.5">
                                        <p>Nenhuma notícia cadastrada</p>
                                    </td>
                                </tr>
                            @endforelse

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
