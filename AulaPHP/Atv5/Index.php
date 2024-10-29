<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua Idade:</title>
</head>
<body>
    <h1> Digite sua idade:</h1>
    <form method="POST">
        <input type="number" name="idade" placeholder="Digite sua idade">
        <button type="submit"> Enviar </button>
    </form>
    <?php

if (isset($_POST['idade'])){
    $idade = $_POST['idade'];

    if ($idade >= 18) {

        Echo "<p>Pode Dirigir</p>";
    } else {

        Echo "<p>Não Pode Dirigir</p>";
    }


} else {

    Echo "<p>Esperando idade</p>";
}


    ?>
</body>
</html>