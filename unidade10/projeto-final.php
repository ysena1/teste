<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>

    <body>
    <pre>
        <?php                    
            $megasena = array();
            $i = 1;
            
            while($i < 7){
                $sorteio = rand(1,60);
                if (!in_array($sorteio, $megasena)){
                    $megasena[] = $sorteio;
                    $i++;
                }
            }

            sort($megasena);

            print_r ($megasena)
        ?>

    </pre>
    
    </body>
</html>