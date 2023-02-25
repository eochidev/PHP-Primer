<?php 
$title = "Functions";
include 'includes/header.php' 
?>
    
    <h1>Functions</h1>

    <?php
    
    //Defining a function
        function writeMessage()
        {
            echo "You are really nice! <br>";
        }

    //Calling a function
        writeMessage();
        writeMessage();
        writeMessage();
        writeMessage();
        writeMessage();

    //Functions with parameters

        function addFunction($num1,$num2)
        {
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is: $sum <br>";
        }

        function changeNum(&$num)
        {
            $num = $num + 10;
        }

        function returnProduct($num1,$num2)
        {
            $prod = $num1 * $num2;
            return $prod;
        }

        $num = 500;
        $num3 = 50;
        addFunction(20,20);
        addFunction(20,$num3);

        changeNum($num);
        echo $num . "<br>";

        $return_value = returnProduct(10,200);
        echo $return_value . "<br>";
    
    ?>


<?php require 'includes/footer.php'?>