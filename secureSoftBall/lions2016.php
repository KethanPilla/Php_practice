<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>National Champions</title>
    </head>
    <body>
        <?php
        session_start();

        if (!isset($_SESSION['user'])) {
            header("Location: index.php");
            exit;
        }

        $servername = "localhost";
        $username = "root";
        $password = ""; 
        $dbname = "softball";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT id, opponent, site, result FROM games";
        $result = $conn->query($sql);

        echo "UNA Softball 2016 National Champions<br>";
        if ($result->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr><th>ID</th><th>Opponent</th><th>Site</th><th>Result</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["opponent"] . "</td>";
                echo "<td>" . $row["site"] . "</td>";
                echo "<td>" . $row["result"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </body>
</html>