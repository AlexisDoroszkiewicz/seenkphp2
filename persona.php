<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "persona";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);


if (isset($_POST['name'])){
    include_once 'dbh.php';
}
else {
    $userid = $_POST['personachoice'];
}
    $sql2 = "SELECT * FROM personaprofile WHERE userid = $userid";
    $row = mysqli_query($conn, $sql2) -> fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Current Student</title>
</head>
<body>
    <header>
        <figure>
            <div id="photoDecoration1"></div>
            <div id="photoDecoration2"></div>
            <div id="photoDecoration3"></div>
            <img src="<?php echo $row['image']; ?>">
            <figcaption class="spec specStatus"><?php echo $row['status']; ?></figcaption>
        </figure>
        <div id="profile">
            <h1><?php echo $row['name']; ?></h1>
        <ul id="profileSpecs" class="flexrow">
            <li><?php echo $row['age']; ?></li>
            <li class="spec specFemale"><?php echo $row['gender']; ?></li>
            <li class="spec specCity"><?php echo $row['city']; ?><br></li>
        </ul>
        <p class="regularText"><?php echo $row['description']; ?></p>
        </div>
    </header>
    <main>
        <section id="personality" class="card">

<?php
   $personalitytype = $row['personalitytype'];
    $sql3 = "SELECT * FROM personality WHERE personalitytype = '$personalitytype'";
    $personalitrow = mysqli_query($conn, $sql3) -> fetch_assoc();
?>

            <h2>🎭 personality</h2>
            <figure>
                <img src="<?php echo $personalitrow['img']; ?>">
                <abbr title="<?php echo $personalitrow['abbr']; ?>"><?php echo $personalitrow['personalitytype']; ?><?php echo $row['trait']; ?></abbr>
                <figcaption class="largeText"><?php echo $personalitrow['name']; ?></figcaption>
            </figure>
        </section>

        <section id="education" class="card">
            <h2>🎓 education</h2>
            <ul>
                <li>
                    
                    <input type="checkbox" id="graduate" <?php
if($row['graduatebox'] == '1')
{
    echo "checked";
}?>>
                    <label for="graduate">Graduate</label>
                    <?php if($row['graduate'] != ""){ echo "<p>".$row['graduate']."</p>"; } ?>
                 </li>
                <li>
                    <input type="checkbox" id="undergraduate" <?php
if($row['undergraduatebox'] == '1')
{
    echo "checked";
}?>>
                    <label for="undergraduate">Undergraduate</label>
                    <?php if($row['undergraduate'] != ""){ echo "<p>".$row['undergraduate']."</p>"; } ?>
                 </li>
                <li>
                    <input type="checkbox" id="highschool" <?php
if($row['highschoolbox'] == '1')
{
    echo "checked";
}?>>
                    <label for="highschool">High School</label>
                    <?php if($row['highschool'] != ""){ echo "<p>".$row['highschool']."</p>"; } ?>
                 </li>
            </ul>
        </section>

        <section id="workLife" class="card">
            <h2>💼 work life</h2>
            <ul class="flexrow">
                <li class="spec specWork"><?php echo $row['worklife1']; ?></li>
                <li class="spec specWork"><?php echo $row['worklife2']; ?></li>
            </ul>
            <p class="regularText"><?php echo $row['worklife3']; ?></p>
        </section>

        <section id="hobbies" class="card">
            <h2>💃🏻 hobbies</h2>
            <ul class="flexrow largeText ">
<?php

// for ($x = 1; $x <= 5; $x++) {
//     if(('$hobbie'.$x) != ''){
//         echo "<li>".$row['hobbie'.$x]."</li>";
//     }
// } créer une <li> même si le contenu est vide ???????

if($row['hobbie1'] != '')
{
    echo "<li>".$row['hobbie1']."</li>";
}?>

<?php
if($row['hobbie2'] != '')
{
    echo "<li>".$row['hobbie2']."</li>";
}?>
<?php

if($row['hobbie3'] != '')
{
    echo "<li>".$row['hobbie3']."</li>";
}?>
<?php

if($row['hobbie4'] != '')
{
    echo "<li>".$row['hobbie4']."</li>";
}?>
<?php

if($row['hobbie5'] != '')
{
    echo "<li>".$row['hobbie5']."</li>";
}?>
            </ul>
        </section>

        <section id="digitalCommunities" class="card">
            <h2>📱 digital communities</h2>
            <ul class="flexrow">
                <li><a href="#"><img src="<?php echo $row['digcom1']; ?>" ></a></li>
                <li><a href="#"><img src="<?php echo $row['digcom2']; ?>" ></a></li>
                <li><a href="#"><img src="<?php echo $row['digcom3']; ?>" ></a></li>
                <li><a href="#"><img src="<?php echo $row['digcom4']; ?>" ></a></li>
            </ul>
        </section>

        <section id="digitalMedia" class="card">
            <h2>💻 digital media</h2>
            <p class="regularText"><?php echo $row['digmedia']; ?></p>
        </section>

        <section id="goals" class="card">
            <h2>🎯 goals</h2>
            <ul class="regularText">
            <?php
if($row['goal1'] != '')
{
    echo "<li>".$row['goal1']."</li>";
}?>

<?php
if($row['goal2'] != '')
{
    echo "<li>".$row['goal2']."</li>";
}?>
<?php

if($row['goal3'] != '')
{
    echo "<li>".$row['goal3']."</li>";
}?>
            </ul>
        </section>

        <section id="frustrations" class="card">
            <h2>😈 frustrations</h2>
            <ul class="regularText">
            <?php
if($row['frustration1'] != '')
{
    echo "<li>".$row['frustration1']."</li>";
}?>

<?php
if($row['frustration2'] != '')
{
    echo "<li>".$row['frustration2']."</li>";
}?>
            </ul>
        </section>
    </main>
</body>
</html>