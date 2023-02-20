<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Index</title>
</head>
<body>
    
    <h2 style = "color:skyblue">Choices</h2>

        <ul>

            <li><a href="ifstatement.php">If Statement Page</a></li>
            <li><a href="switchstatement.php">Switch Statement Page</a></li>
            <li><a href="forloop.php">For Loop Page</a></li>
            <li><a href="whiledowhile.php">While Do While</a></li>
            <li><a href="simplearray.php">Simple Arrays</a></li>
            <li><a href="stringmanipulation.php">String Manipulation</a></li>
            <li><a href="dateandtime.php">Date and Time Manipulation</a></li>

        </ul>

    

    <!-- Basic HTML -->
    <h1>Hello HTML World</h1>
    
    
    <?php

        echo 'Hello PHP';

    ?>

    <?php 
        //PHP variables
        $name = 'Jay';
        $age = 23;
        $sex = 'male';
        $course = 'BSIT';
        
        echo '<br>';
        echo $name;
        //PHP concatination
        echo '<h1> My Name is: ' .$name. '</h1>';
        
        echo '<h1> My Age is: ' .$age. '</h1>';

        echo "<h1> My Name is: $name </h1>";

        echo "<h1> My Sex is: $sex </h1>";
    ?>
</body>
</html>