<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Crud</title>
</head>
<body>
    <form action="/cadastrar-link" method="POST">
        @csrf
        <label for="">titulo:</label>
        <input type="text" placeholder="digite titulo" name="titulo">
        <br><br>
        <label for="">url_original:</label>
        <input type="text" placeholder="digite url_original" name="url_original">
        <br><br>
        <label for="">total_max_click:</label>
        <input type="text" placeholder="digite total_max_click" name="total_max_click">
        <br><br>
        <button>Enviar</button>
    </form>

</body>
</html>