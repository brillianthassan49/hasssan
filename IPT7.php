<?php
//send data to the database

$host = "localhost";
$dbuser = "root";
$dbname = "ipt1final";
$dbpassword = "";
$connection = mysqli_connect($host,$dbuser,$dbpassword,$dbname);

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $second_name = $_POST['second_name'];
    $sex = $_POST['sex'];
    $age = $_POST['age'];
    $position = $_POST['position'];

$query = "INSERT INTO final VALUES('','$first_name','$second_name','$sex','$age','$position')";
mysqli_query($connection,$query);
header('location: IPT7.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPT7</title>
    <link rel="stylesheet" href="IPT7.css">
</head>
<body>
    <center>
        <div class = "table" style = "margin-top :20px;" >

        <h1><big>FILL YOUR INFORMATION.</big></h1><br>
    <form action="IPT7.php" method = "post">
        <label for="first name">first name</label><br>
        <input type="text" name = "first name" ><br>

        <label for="second name">second name</label><br>
        <input type="text" name = "second name" ><br>

        <label for="sex">sex</label><br>
        <input type="text" name = "sex" ><br>

        <label for="age">age</label><br>
        <input type="text" name = "age" ><br>

        <label for="position">position</label><br>
        <input type="text" name = "position" ><br><br>

        <input type="submit" name = "submit" value = "SUBMIT">
    </form>
    </div>
    </center>
</body>
</html>