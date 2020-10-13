<?php
    $fumante = false;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo "é fumante? ". $fumante. "</br>";
            echo "É BOOLEAN? ". is_bool($fumante);
        ?>
    </body>
</html>