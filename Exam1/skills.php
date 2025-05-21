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
        ?>
        <h2><?= $first ?> <?= $last ?> </h2>
        <form action="history.php" method="POST">
            <input type="hidden" id="first" name="first" value=<?=$first?>>
            <input type="hidden" id="last" name="last" value=<?=$last?>>
            <input type="checkbox" id="skill1" name="skill1" value="PHP">
            <label for="skill1"> PHP</label><br>
            <input type="checkbox" id="skill2" name="skill2" value="MariaDB">
            <label for="skill2"> MariaDB</label><br>
            <input type="checkbox" id="skill3" name="skill3" value="Python">
            <label for="skill3"> Python</label>
            <input type="checkbox" id="skill4" name="skill4" value="Java">
            <label for="skill4"> Java</label><br>
            <input type="checkbox" id="skill5" name="skill5" value="HTML">
            <label for="skill5"> HTML</label><br>
            <input type="checkbox" id="skill6" name="skill6" value="CSS">
            <label for="skill6"> CSS</label>
            <input type="checkbox" id="skill7" name="skill7" value="C#">
            <label for="skill7"> C#</label><br>
            <input type="checkbox" id="skill8" name="skill8" value="git">
            <label for="skill8"> git</label>
            <input type="submit">
        </form>
    </body>
</html>
