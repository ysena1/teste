<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        $count = 1;
        while($count <= 4){
            $sort = rand (1,60);
            echo $sort. " ";
            $count += 1;
        }
    ?>
</body>
</html>