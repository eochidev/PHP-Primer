<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Array</title>
</head>

<body>
    <h1>Simple Arrays</h1>
    <?php 
    
        //variable
        $num = 3;

        //an array
        //one type only of data
        $numbers = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);

        echo $numbers[0];

        echo "<p>$numbers[9]</p>";

        $size = count($numbers);

        echo "<p>Array Number is size: $size </p>";

        for($count = 0; $count < $size; $count++)
        {
            echo "<p>$numbers[$count]</p>";
        }

    
    ?>


</body>

</html>