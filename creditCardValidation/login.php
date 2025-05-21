<?php
session_start();
include 'functions.php';  // defines test_input()

$name = $password = "";
$nameErr = $passwordErr = $loginErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }
    
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
    }
    
    if (!empty($name) && !empty($password)) {
        if ($name === $password && $password === $name) {
            $_SESSION['authenticated'] = true;
            header("Location: checkout.php");
            exit();
        } else {
            $loginErr = "Invalid username or password.";
        }
    }
}
?>
<!DOCTYPE HTML>  
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <style>
      .error { color: red; }
    </style>
</head>
<body>  
  <h2>Login Page</h2>
  <p>Please input your details</p>
  <p><span class="error">* required field</span></p>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    Password: <input type="password" name="password">
    <span class="error">* <?php echo $passwordErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">  
  </form>
  <span class="error"><?php echo $loginErr; ?></span>
</body>
</html>
