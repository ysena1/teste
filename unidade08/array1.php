<!doctype html>
<?php
    $salada = array("Maçã", "Abaicaxi", "Laranja");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            echo $salada [0]. "<br>";
            echo $salada [1]. "<br>";
            echo $salada [2]. "<br>";

            $salada[] = "abacate";
            $salada[] = "morango";

            echo $salada [3]. "<br>";
            echo $salada [4]. "<br>";

            echo count($salada);
        ?>
        <pre>
            <?php
                print_r($salada)
            ?>
        </pre>
    </body>
</html>