@if ($errors->any)
    <div class="mb-6 text-red-600">
        <p>Verifique os erros</p>
        <ul>
            @foreach ($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div>
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome">
</div>

<div>
    <label for="descricao">Descrição</label>
    <input type="text" name="descricao" id="descricao">
</div>

<div>
    <label for="cor">Cor</label>
    <input type="color" name="cor" id="cor">
</div>

<div class="mb-4">
    <button type="submit" class="bg-slate-900 text-white px-4 py-2 rounded-lg">Salvar</button>
    <a href="#" class="bg-slate200 text-stone-800 px-4 py-2 rounded-lg inline-block">Cancelar</a>
</div>
