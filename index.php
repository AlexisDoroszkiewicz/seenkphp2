<?php 

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "persona";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    $sql = "SELECT * FROM personaprofile";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="display: grid; place-items:center; height: 20vh">

<span>Select an existing persona</span>
<form action="persona.php" method="post">
    <select name="personachoice">
        <option></option>
        <?php

            if ($resultcheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option>".$row['userid']."</option>";
                    }
            }

        ?>
    </select>

    <button type="submit" name="submit" >Submit</button>
</form>
<span>or</span>

<a href="personabuilder.php">Build Persona from scratch</a>
    
</body>
</html>