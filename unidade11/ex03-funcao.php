<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php 
        function conventerCF($_temp){
            return ($_temp* 1.8)+32;
        }
        function conventerFC($_temp2){
            return (($_temp2 - 32 ) * (5/9));
        }

        echo conventerCF(0) ."<br>" ;
        echo conventerFC(32);
    ?>
</body>
</html>