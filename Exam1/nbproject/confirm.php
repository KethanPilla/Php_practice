<?php session_start() ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php
        $first = $_POST['first'];
        $last = $_POST['last'];
        $_SESSION['jobs'] = $_POST['job_history'];
        ?>
        <h2><?= $first ?> <?= $last ?> </h2>
        <?php
        $num_skills = $_COOKIE['NUM_SKILLS'];
        echo "You have $num_skills skills from the list.<p>";
        echo "Job History:<br>";
        ?>
        <?= $_POST['job_history'] ?>
        <p/>
        If this is correct...
        <form action="results.php" method="POST">
            <input type="hidden" id="first" name="first" value=<?=$first?>>
            <input type="hidden" id="last" name="last" value=<?=$last?>>
            <input type="submit">
        </form>
    </body>
</html>
