<?php
$insert = false;
if (
    $_SERVER['REQUEST_METHOD'] === 'POST' &&
    isset($_POST['name'], $_POST['email']) &&
    trim($_POST['name']) !== '' &&
    trim($_POST['email']) !== ''
) {

 $server = "localhost";
 $username = "root";
 $password = "";

 $con = mysqli_connect($server , $username,$password);

 if(!$con){
    die("connection to this database failed due to ". mysqli_connect_error());
 }
//  echo"success connecting to db";

$name  = $_POST["name"];
$gender = $_POST["gender"];
$age = $_POST["age"];
$email = $_POST["email"];
$phone =$_POST["phone"];
$desc = $_POST["desc"];


$sql = "INSERT INTO `trip`.`trip` ( `name`, `age`, `gender`, `email`,`phone`, `other`, `dt`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

// echo $sql;

if($con->query($sql)== true){
    // echo "sucessfully inserted";
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
    
}
$con->close();

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="Marwadi university">
    <div class="container">
        <h1>Welcome to Marwadi University Travel Form </h1>
        <p>Enter your details to confirm your participation in Trip</p>
        <?php
        if($insert == true ){
    echo  "<p>Thanks for submitting the form</p>";
        }
        ?>

       <form action="index.php" method="POST">
           <input type="text"  name="name"  id="name"  placeholder="Enter your name" required>
            <input type="text" name="age" id="age" placeholder="enter your age">
            <input type="text" name="gender" id="gender" placeholder="enter your gender">
            <input type="email" name="email" id="email" placeholder="enter your email" required>
            <input type="phone" name="phone" id="phone" placeholder="enter your phone no.">

            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="enter any other info. here"></textarea>
            <button class="btn">Submit</button>
           


        </form>
    </div>
 
</body>
</html>