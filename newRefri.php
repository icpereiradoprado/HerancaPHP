<?php
    session_start();
?>
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
                <input type="text" name="nome" id="nome" required placeholder="Digite o nome do produto...">
            </div>
            <div class="field-form">
                <label for="">Preço: </label><br>
                <input type="number" name="preco" id="preco" required placeholder="Digite o preço do produto..." step="0.01">
            </div>
            <div class="field-form">
                <label>Refrigerante retornável?</label><br>
                <div class="d-flex">
                    <label>Sim</label>
                    <input type="radio" name="ret" id="ret" value="1" required>
                    <label>Não</label>
                    <input type="radio" name="ret" id="ret" value="0" required>
                </div>  
            </div>
            <div class="field-form">
                <input type="submit" name="enviar" value="Enviar">
            </div>

        </form>
    </div>

    <?php
        require_once 'Bebida.php';
        require_once 'Refrigerante.php';

        if(isset($_POST["enviar"]))
        {
            if($_POST["ret"] == 1)
            {
                $ret = "Retornável";
            }
            else
            {
                $ret = "Não Retornável";
            }
            $refri = new Refrigerante($_POST["nome"],$_POST["preco"],$ret);
            $preco = $_POST["preco"];
            echo $refri->mostrarBebida();
            echo "<br / >";
            echo $refri->verificarPreco($preco);
        }
        
    ?>
    
</body>
</html>
