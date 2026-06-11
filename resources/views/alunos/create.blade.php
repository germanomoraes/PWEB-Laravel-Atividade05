<!DOCTYPE html>
<html lang="pt-br">
<head><meta charset="UTF-8"><title>Cadastro de Aluno</title></head>
<body>
    <h1>Cadastrar Aluno</h1>
    <form method="POST" action="/alunos">
        @csrf
        <label>Nome: <input type="text" name="nome"></label>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
