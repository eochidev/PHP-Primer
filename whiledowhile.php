<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Do While Loop</title>
</head>

<body>
    <!-- Pre-Condition -->
    <h1>While Loop</h1>
    <?php 
        $grade = 0;
        while($grade < 10)
        {
            $grade++;
            echo '<p> I am less than 10!</p>';
        }

        echo 'EXIT LOOP';

    ?>
    <!-- Post Condition -->
    <h1>Do-Wwhile Loop</h1>
    <?php 

        $grade = 0;
        do{
            echo '<p>Im do while loop!</p>';
            $grade++;
        }while($grade < 10);
        echo 'EXIT LOOP';

    ?>
    
</body>
</html>