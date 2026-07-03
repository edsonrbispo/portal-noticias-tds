@if ($errors->any())
    <div class="mb-6 text-red-500">
        <p class="font-semibold">Verifique os erros abaixo:</p>
        <ul>
            @foreach ($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="mb-4">
    <label for="categoria_id" class="form-label">Categoria *</label>
    <select name="categoria_id" id="categoria_id" class="form-control">
        <option></option>
        @foreach ($categorias as $id => $nome)
            <option value="{{ $id }}"
                {{ old('categoria_id', $noticia->categoria_id) == $id ? 'selected' : '' }}>{{ $nome }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-4">
    <label for="titulo" class="form-label">Título *</label>
    <input type="text" value="{{ old('titulo', $noticia->titulo) }}" name="titulo" id="titulo"
        class="form-control">
</div>

<div class="mb-4">
    <label for="resumo" class="form-label">Resumo *</label>
    <textarea name="resumo" id="resumo" rows="3" class="form-control">{{ old('resumo', $noticia->resumo) }}</textarea>
</div>

<div class="mb-4">
    <label for="conteudo" class="form-label">Conteúdo *</label>
    <textarea name="conteudo" id="conteudo" rows="10" class="form-control">{{ old('conteudo', $noticia->conteudo) }}</textarea>
</div>

<div class="mb-4">

    @if ($noticia->imagem)
        <div class="mb-2">
            <img src="{{ asset('storage/' . $noticia->imagem) }}" class="w-40 rounded object-cover">
        </div>
    @endif

    <label for="imagem" class="form-label">Imagem *</label>
    <input type="file" name="imagem" id="imagem">

    @if ($noticia->imagem)
        <p>
            <small class="text-xs text-slate-500">Deixe em branco para manter a foto atual</small>
        </p>
    @endif

</div>

<div class="mb-4">
    <label>Situação</label>
    <div>
        <label>
            <input type="radio" name="status" value="1"
                {{ old('status', $noticia->status) == 1 ? 'checked' : '' }}>
            Publicado
        </label>
        <label>
            <input type="radio" name="status" value="0"
                {{ old('status', $noticia->status) == 0 ? 'checked' : '' }}>
            Rascunho
        </label>
    </div>
</div>

<div class="mb-4">
    <button type="submit" class="bg-slate-900 text-white px-4 py-2 rounded-lg">Salvar</button>
    <a href="#" class="bg-slate-200 text-stone-800 px-4 py-2 rounded-lg inline-block">Cancelar</a>
</div>
