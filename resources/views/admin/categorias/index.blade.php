<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Categorias
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-between items-center">
                    <h1 class="text-xl font-bold">Lista de notícias</h1>
                    <a href="{{ route('admin.noticias.cadastrar') }}" class="bg-black text-white px-3 py-2 rounded">+ Nova
                        Notícia</a>
                </div>

                <div class="p-6">

                    <table class="w-full text-sm">
                        <thead>
                            <tr class="bg-cabecalho-tabela">
                                <th class="px-5 py-3.5 font-semibold text-left">ID</th>
                                <th class="px-5 py-3.5 font-semibold text-left">Nome</th>
                                <th class="px-5 py-3.5 font-semibold hidden text-left md:table-cell">Descrição</th>
                                <th class="px-5 py-3.5 font-semibold hidden text-left md:table-cell">Cor</th>
                                <th class="px-5 py-3.5 font-semibold hidden text-left md:table-cell">Criação</th>
                                <th class="px-5 py-3.5 font-semibold">Ação</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($categorias as $c)
                                <tr class="hover:bg-slate-50 transition">
                                    <td class="px-5 py-3.5">{{ $c->id }}</td>
                                    <td class="px-5 py-3.5">{{ $c->nome }}</td>
                                    <td class="px-5 py-3.5 hidden md:table-cell">{{ $c->descricao }}</td>
                                    <td class="px-5 py-3.5 hidden md:table-cell">{{ $c->cor }}</td>
                                    <td class="px-5 py-3.5 hidden md:table-cell">
                                        {{ $c->created_at}}</td>
                                    <td class="px-5 py-3.5 text-center flex">
                                        <a href="#" class="bg-gray-300 px-3 py-2 rounded">Editar</a>

                                        <form action="{{ route('admin.noticias.excluir', $c->id) }}" method="post">

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
