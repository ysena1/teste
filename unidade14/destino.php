<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body> 
            <?php
                $_nome = isset($_POST["nome"])? $_POST["nome"] : "sem definição";
                $_email = isset($_POST["email"])? $_POST["email"] : "sem definição";
                echo "Nome: ".$_nome . "<br>";
                echo "Email: ".$_email;  
            ?>
    </body>
</html>