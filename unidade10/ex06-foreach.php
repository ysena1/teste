<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        $agenda = array ("nome" => "Yuri",
                        "telefone" => "777-666",
                        "salario" => 1500.50,
                        "fumante" => true);

        foreach($agenda as $contatos => $infos){
            echo $contatos.": ".$infos."<br>";
        }

    ?>
</body>
</html>