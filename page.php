<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
</head>
<body>

    <h1>calculator</h1>
    
    <?php
        $a = 10;
        $b = 20;

        $calc = $a + $b;
        echo "calc = " .$calc;

        // echo "calc = {$calc}"; 
    ?>

    <p>
        my paragraph for 
        <?php 
            echo 123
        ?> 
    </p>

    <h1> sum: </h1>

    <p>
        10 + 10 = <?php echo 10 + 10 ?>
    </p>

    <h3> lines: </h3>

    <?php 

        echo "line 1 <br>";
        echo "line 2 <br>";
        echo "line 3 <br>";

    ?>
    
    <!-- Short tag -->

    <h1> short tag example: </h1>

    <?= 
        // don't need use ;
        10 + 10
    ?>

</body>
</html>