<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1>Escolha um tipo de produto para cadastrá-lo</h1>
        <form action="" method="POST">

            <div class="field-form">
                <select name="tipoProd" id="tipoProd">
                    <option value="0" disabled> --- Escolha o tipo da bebida ---</option>
                    <option value="1">Vinho</option>
                    <option value="2">Suco</option>
                    <option value="3">Refrigerante</option>
                </select>
            </div>

            <div class="field-form">
                <input type="submit" name="enviar" value="Enviar">
            </div>

        </form>
    </div>

    <?php

        if(isset($_POST["enviar"]))
        {
            switch($_POST["tipoProd"])
            {
                case 1:
                    header('Location: newVinho.php');
                    break;
                case 2:
                    header('Location: newSuco.php');
                    break;
                case 3:
                    header('Location: newRefri.php');
                    break;
                default:
                    echo "Nenhum tipo foi selecionado";
                    break;
            }   
        }
        
    ?>
    
</body>
</html>