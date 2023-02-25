<?php 
$title = "For Loop";
include 'includes/header.php' 
?>
    
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

    <br>
    <br>
    <a href="index.php">Back</a>

    <?php require 'includes/footer.php'?>