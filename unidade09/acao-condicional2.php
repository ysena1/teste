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
            switch($dia){
                case "segunda":
                    echo "Hoje é segunda";
                break;
                case "terça":
                    echo "Hoje é terça";
                break;
                case "quarta":
                    echo "Hoje é quarta";
                break;
                case "quinta":
                    echo "Hoje é quinta";
                break;
                case "segunda":
                    echo "Hoje é sexta";
                break;
                default:
                    echo "Hoje é final de semana!!!";
                break;
            }
        ?>
    </body>
</html>