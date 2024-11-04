<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bebida:</title>
</head>
<body>
    <h1> Escolha uma bebida:</h1>
    <p> 1: Refrigerante🥤 <br>
        2: Água🫗 <br>
        3: Suco 🧃</p>
    <form method="POST">
        <input type="number" name="dia" placeholder="Digite um número">
        <button type="submit"> Enviar </button>
    </form>
    <?php

    if (isset($_POST['dia'])){
    $dia = $_POST['dia'];

    switch($dia) {
        case 1:
            $bebida = "Refrigerante🥤";
            $preco = 5.00;
            break;
        case 2:
            $bebida = "Água🫗";
            $preco = 2.00;
            break;
        case 3:
            $bebida = "Suco 🧃";
            $preco = 3.50;
            break;

        default:
            echo "Opção inválida, escolha uma das opções acima";
            exit;
                                                                                    
    }
    echo "<p>Você escolheu: $bebida</p>";
    echo "Preço: R$" . number_format($preco, 2,",");

    }
    ?>
</body>
</html>