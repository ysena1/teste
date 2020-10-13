<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
            $idade = 60;
            $maioridade = ($idade >= 18)? "de maior" : "de menor";
            echo $maioridade;
        ?>
    </body>
</html>