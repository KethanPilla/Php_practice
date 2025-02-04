<?php
session_start();
$_SESSION['savings'] = $_POST['savings'];
$_SESSION['rate'] = $_POST['rate'];
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
        <form action="results.php" method="POST">
            Number of years: <input type="text" name="years"><br>

            <input type="submit">
        </form>
    </body>
</html>
