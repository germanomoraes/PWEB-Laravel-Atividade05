<!DOCTYPE html>
<html lang="pt-br">
<head><meta charset="UTF-8"><title>Novo Produto</title></head>
<body>
    <h1>Cadastrar Produto</h1>
    <form method="POST" action="/produtos">
        @csrf
        <label>Nome: <input type="text" name="nome"></label>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
