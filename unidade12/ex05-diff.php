<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <pre>
        <?php
            $_data1 = new DateTime('2021-01-01');
            $_data2 = new DateTime('2020-10-11');
            $_intervalo = $_data1->diff($_data2);

            print_r($_intervalo);

            print($_intervalo->format('%r%a'));
        ?>
        </pre>
    </body>
</html>