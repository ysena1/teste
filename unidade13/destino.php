<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body> 
        <?php
            $fruta = array("imagens/laranja.jpg","imagens/maca.jpg","imagens/abacate.jpg");
            $cod = $_GET["codigo"];
        ?>

        <img src="<?php echo $fruta[$cod]; ?>">
    </body>
</html>