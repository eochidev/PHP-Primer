<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - For Loop</title>
</head>
<body>
    
        <h1>For Loops</h1>

        <?php 
        //for loops
            for($count = 0; $count < 10; $count++)
            {
                echo '<h2>Hello World!</h2>';
            }

            for($count = 0; $count < 10; $count++)
            {
                echo "<p>the count is: $count</p> ";
            }
        
        ?>


</body>
</html>