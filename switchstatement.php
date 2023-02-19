<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Switch Statements</title>
</head>
<body>
    <h1>SWITCH STATEMENTS</h1>
    <?php 

        $grade = 'C';

        switch($grade)
        {
            case 'A' :
                echo '<h2 style="color:blue">You are Handsome!</h2>';
                break;

            case 'B':
                echo '<h2 style="color:pink">You are Pretty!</h2>';
                break;
                
            default;
                echo '<h2 style="color:green">Not in choices</h2>';
        }
    
    ?>


</body>
</html>