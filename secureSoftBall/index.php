<?php
session_start();

if (isset($_SESSION['err'])) {
    $error = $_SESSION['err'];
    // clear the error in the session, so we don't see it again...
    unset($_SESSION['err']);
} else {
    $error = "";
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <?php if ($error) { ?>
            <p style="color: red;"><?= $error ?></p>
        <?php } ?>
        Login form:
        <form action="authenticate.php" method="POST">
            Username: <input type="text" name="uname"><br>
            Password: <input type="password" name="password"><br>
            <input type="submit">
        </form>
    </body>
</html>
