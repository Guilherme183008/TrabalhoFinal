<body>
    <div class="contairner">
    <h1>Novo Autor</h1>
    <form action="{{route('autores.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome">
    </div>
    <div class="form-group">
        <label for="data_nascimento">Data de Nascimento:</label>]
        <input type="date" name="data_nascimento">
    </div>
    <div class="form_group">
        <label for="nacionalidade">Nacionalidade:</label>
        <input type="text" name="nacionalidade">
    </div>
    <button type="submit" class="btn btn-sucess">Salvar</button>
    <a href="{{ route('autores.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
</body>