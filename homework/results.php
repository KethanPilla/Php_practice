<?php
session_start();
$years = $_POST['years'];
$savings = $_SESSION['savings'];
$rate = $_SESSION['rate']
?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        // put your code here
        echo "Savings table for $" . $savings . " at " . $rate."% intrest";
        ?>
        <?php
        // put your code here
        $i = 0;
        while ($i < $years) {
            $savings = $savings + ($savings * $rate/100);
            echo "<p>"."Year: " . $i+1 . " $" . $savings;
            $i++;
        }
        ?>

    </body>
</html>
