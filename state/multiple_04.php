<?php
session_start();
$_SESSION['address'] = $_POST['address'];
$_SESSION['city'] = $_POST['city'];
$_SESSION['country'] = $_POST['country'];
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Multiple form 4</title>
</head>

<body>
<p>The details submitted were as follows: </p>
<?php var_dump($_POST);?>
<ul>
    <li><?= $_SESSION['fn'] ?></li>
    <li><?= $_SESSION['ln'] ?></li>
    <li><?= $_SESSION['age'] ?></li>
    <li><?= $_POST['address'] ?></li>
    <li><?= $_POST['city'] ?></li>
    <li><?= $_POST['country'] ?></li>
</ul>
</body>
</html>
