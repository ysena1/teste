<?php
    $mega_da_virada =  array(16,33,46,38,55,53);

    sort ($mega_da_virada);
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo max($mega_da_virada)."<br>";
            echo min($mega_da_virada)."<br>";
        ?>

        <pre>
        <?php 
            print_r($mega_da_virada)
        ?>
        </pre>
    </body>
</html>