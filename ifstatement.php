<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - If Statements</title>
</head>
<body>
    <?php
    
        $grade = 86;

        if($grade >= 85)
        {
            echo '<h3 style="color:green">You passed!</h3>';
            $grade = 'A';
        }

        elseif($grade >= 75)
        {
            echo '<h3 style="color:green">You passed!</h3>';
            $grade = 'B';
        }

        else
        {
            echo '<h3 style="color:red">You failed!</h3>';
            $grade = 'C';
        }

        if ($grade == 'A')
        {
            echo '<h2 style="color:green">YOU ARE TOPNOTCHER!</h2>';
        }

        elseif ($grade == 'B')
        {
            echo '<h2 style="color:blue">AVERAGE!</h2>';
        }

        else
        {
            echo '<h2 style="color:red">FAILED!</h2>';
        }
    
    ?>
</body>
</html>