<?php
    $con = mysqli_connect('localhost','root');

    if($con){
        echo "Connection Successful";
    } 
    else{
        echo "Connection Failed";
    }

    mysqli_select_db($con, 'mojsajt');

    $ime = $_POST['ime'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];

    $query = "INSERT INTO users (ime, email, telefon) VALUES ('$ime', '$email', '$telefon')";

    mysqli_query($con, $query);
    header('location:index.php');

?>
