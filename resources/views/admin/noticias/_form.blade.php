<div class="mb-4">
    <label for="categoria_id" class="form-label">Categoria *</label>
    <select name="categoria_id" id="categoria_id" class="form-control">
        <option></option>
        <option value="1">Tecnologia</option>
    </select>
</div>

<div class="mb-4">
    <label for="titulo" class="form-label">Título *</label>
    <input type="text" name="titulo" id="titulo" class="form-control">
</div>

<div class="mb-4">
    <label for="resumo" class="form-label">Resumo *</label>
    <textarea name="resumo" id="resumo" rows="3" class="form-control"></textarea>
</div>

<div class="mb-4">
    <label for="conteudo" class="form-label">Conteúdo *</label>
    <textarea name="conteudo" id="conteudo" rows="10" class="form-control"></textarea>
</div>

<div class="mb-4">
    <label for="imagem" class="form-label">Imagem *</label>
    <input type="file" name="imagem" id="imagem" class="form-control">
</div>

<div class="mb-4">
    <label>Situação</label>
    <div>
        <label>
            <input type="radio" name="ativo" value="1">
            Publicado
        </label>
        <label>
            <input type="radio" name="ativo" value="0" checked>
            Rascunho
        </label>
    </div>
</div>

<div class="mb-4">
    <button type="submit" class="bg-slate-900 text-white px-4 py-2 rounded-lg">Salvar</button>
    <a href="#" class="bg-slate-200 text-stone-800 px-4 py-2 rounded-lg inline-block">Cancelar</a>
</div>
