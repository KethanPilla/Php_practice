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
        #var_dump($_POST);
        //echo "size is " . (sizeof($_POST) - 2);
        $num_skills = (sizeof($_POST) - 2);
        setcookie("NUM_SKILLS", $num_skills);
        $first = $_POST['first'];
        $last = $_POST['last'];
        ?>
        Job History:
        <form action="confirm.php" method="post">
            <input type="hidden" id="first" name="first" value=<?=$first?>>
            <input type="hidden" id="last" name="last" value=<?=$last?>>
            <textarea id="jh" name="job_history" rows="4" cols="50"></textarea>
            <input type="submit" />
        </form>
        
    </body>
</html>
