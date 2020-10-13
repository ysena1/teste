<?php
    $_salario = 1095;
    $_gasolina = 4.01;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // Arredondar para media
            echo round($_gasolina)."</br>";

            // Arredondar para cima
            echo ceil($_gasolina)."</br>";
            // Arredondar para baixo
            echo floor($_gasolina)."</br>";
        ?>
        
        
    </body>
</html>