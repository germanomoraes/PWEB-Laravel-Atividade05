<!DOCTYPE html>
<html lang="pt-br">
<head><meta charset="UTF-8"><title>Cadastrar Curso</title></head>
<body>
    <h1>Cadastrar Curso</h1>
    <form method="POST" action="/cursos">
        @csrf
        <label>Nome: <input type="text" name="nome"></label>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
