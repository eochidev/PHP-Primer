<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Index</title>
</head>
<body>
    <!-- Basic HTML -->
    <h1>Hello HTML World</h1>

    <?php

        echo 'Hello PHP';

    ?>

    <?php 

        $name = 'Jay';
        $age = 23;
        
        echo '<br>';
        echo $name;

        echo '<h1> My Name is: ' .$name. '</h1>';
        
        echo '<h1> My Age is: ' .$age. '</h1>';

        echo "<h1> My Name is: $name </h1>"

    ?>
</body>
</html>