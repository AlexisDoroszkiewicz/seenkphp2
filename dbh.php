<?php

$status = $conn->real_escape_string($_POST['status']);
$name = $conn->real_escape_string($_POST['name']);
$age = $conn->real_escape_string($_POST['age']);
$gender = $conn->real_escape_string($_POST['gender']);
$city = $conn->real_escape_string($_POST['city']);
$image = $conn->real_escape_string($_POST['image']);
$description = $conn->real_escape_string($_POST['description']);
$personalitytype = $conn->real_escape_string($_POST['personalitytype']);
$trait = $conn->real_escape_string($_POST['trait']);
if (isset($_POST['graduatebox'])) {
    $graduatebox = '1';
} else {
    $graduatebox = '0';
}
if (isset($_POST['undergraduatebox'])) {
    $undergraduatebox = '1';
} else {
    $undergraduatebox = '0';
}
if (isset($_POST['highschoolbox'])) {
    $highschoolbox = '1';
} else {
    $highschoolbox = '0';
}
$graduate = $conn->real_escape_string($_POST['graduate']);
$undergraduate = $conn->real_escape_string($_POST['undergraduate']);
$highschool = $conn->real_escape_string($_POST['highschool']);
$worklife1 = $conn->real_escape_string($_POST['worklife1']);
$worklife2 = $conn->real_escape_string($_POST['worklife2']);
$worklife3 = $conn->real_escape_string($_POST['worklife3']);
$hobbie1 = $conn->real_escape_string($_POST['hobbie1']);
$hobbie2 = $conn->real_escape_string($_POST['hobbie2']);
$hobbie3 = $conn->real_escape_string($_POST['hobbie3']);
$hobbie4 = $conn->real_escape_string($_POST['hobbie4']);
$hobbie5 = $conn->real_escape_string($_POST['hobbie5']);
$digcom1 = $conn->real_escape_string($_POST['digcom1']);
$digcom2 = $conn->real_escape_string($_POST['digcom2']);
$digcom3 = $conn->real_escape_string($_POST['digcom3']);
$digcom4 = $conn->real_escape_string($_POST['digcom4']);
$digmedia = $conn->real_escape_string($_POST['digmedia']);
$goal1 = $conn->real_escape_string($_POST['goal1']);
$goal2 = $conn->real_escape_string($_POST['goal2']);
$goal3 = $conn->real_escape_string($_POST['goal3']);
$frustration1 = $conn->real_escape_string($_POST['frustration1']);
$frustration2 = $conn->real_escape_string($_POST['frustration2']);


$sql = "INSERT INTO personaprofile (
    status, 
    name, 
    age, 
    gender, 
    city, 
    image, 
    description,
    personalitytype,
    trait,
    graduatebox,
    undergraduatebox,
    highschoolbox,
    graduate,
    undergraduate,
    highschool,
    worklife1,
    worklife2,
    worklife3,
    hobbie1,
    hobbie2,
    hobbie3,
    hobbie4,
    hobbie5,
    digcom1,
    digcom2,
    digcom3,
    digcom4,
    digmedia,
    goal1,
    goal2,
    goal3,
    frustration1,
    frustration2
    ) 
    VALUES ( 
        '$status', 
        '$name', 
        '$age', 
        '$gender', 
        '$city', 
        '$image',
        '$description',
        '$personalitytype',
        '$trait',
        '$graduatebox',
        '$undergraduatebox',
        '$highschoolbox',
        '$graduate',
        '$undergraduate',
        '$highschool',
        '$worklife1',
        '$worklife2',
        '$worklife3',
        '$hobbie1',
        '$hobbie2',
        '$hobbie3',
        '$hobbie4',
        '$hobbie5',
        '$digcom1',
        '$digcom2',
        '$digcom3',
        '$digcom4',
        '$digmedia',
        '$goal1',
        '$goal2',
        '$goal3',
        '$frustration1',
        '$frustration2'
        );";
mysqli_query($conn, $sql);

$userid = mysqli_insert_id($conn);
