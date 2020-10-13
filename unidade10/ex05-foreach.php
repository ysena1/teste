<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        $_salada = array("laranja","uva","abacate");
        $_salada []= "mamao";

        foreach($_salada as $frutas){
            echo $frutas."<br>";
        }
    ?>
</body>
</html>