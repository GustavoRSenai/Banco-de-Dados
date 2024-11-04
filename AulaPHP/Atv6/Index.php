    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 á 7:</title>
</head>
<body>
    <h1> Escolha 1 numero de 1 a 7:</h1>
    <form method="POST">
        <input type="number" name="dia" placeholder="Digite um número">
        <button type="submit"> Enviar </button>
    </form>
    <?php

    if (isset($_POST['dia'])){
    $dia = $_POST['dia'];

    switch($dia) {
        case 1:
            echo "domingo";
            break;
        case 2:
            echo "segunda";
            break;
        case 3:
            echo "terça";
            break;
        case 4:
            echo "quarta";
            break;
        case 5:
             echo "quinta";
             break;
        case 6:
            echo "sexta";
            break;
        case 7:
            echo "sabádo";
            break;
        default:
            echo "escolha um número de 1 á 7";
            break;
                                                                                    
    }

    }
    ?>
</body>
</html>