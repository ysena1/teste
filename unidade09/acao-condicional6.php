<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
            $dia = "sabado";

            if ($dia == "sabado" || $dia == "domingo"){
                echo "descanse". "<br>";
            }else{
                echo "trabalhe!" . "<br>" ;
            }

            $idade = 18;
            $sexo =  "feme";

            if ($idade >= 18 && $sexo == "feme"){
                echo "entra na festa";
            }else{
                echo "xispa";
            }
        ?>
    </body>
</html>