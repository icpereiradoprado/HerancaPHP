<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Herança</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <form action="" method="POST">
            <div class="field-form">
                <label for="">Nome: </label> <br>
                <input type="text" name="nome" id="nome" required placeholder="Digite o nome do suco...">
            </div>
            <div class="field-form">
                <label for="">Preço: </label><br>
                <input type="number" name="preco" id="preco" required placeholder="Digite o preço do suco..." step="0.01">
            </div>
            <div class="field-form">
                <label for="">Sabor: </label><br>
                <input type="text" name="sabor" id="sabor" required placeholder="Digite o sabor do suco...">
            </div>
            <div class="field-form">
                <input type="submit" name="enviar" value="Enviar">
            </div>

        </form>
    </div>

    <?php
        require_once 'Bebida.php';
        require_once 'Suco.php';

        if(isset($_POST["enviar"]))
        {
            $suco = new Suco($_POST["nome"],$_POST["preco"],$_POST["sabor"]);
            echo $suco->mostrarBebida();
        }
        
    ?>
    
</body>
</html>


