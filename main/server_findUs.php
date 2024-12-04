<?php

//session_start();

//initializing variables
$name="";

$errors=array();

//connection to db
$db = mysqli_connect('localhost', 'root', '', 'rnv') or die("could not connect to database");


if( isset($_POST['name'])){
    $name = mysqli_real_escape_string($db, $_POST['name']); 
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $subject =  mysqli_real_escape_string($db, $_POST['subject']);
    $message = mysqli_real_escape_string($db, $_POST['message']);

    if(count($errors) == 0){
        $query = "INSERT INTO message_us (name, email, phone, subject, message) VALUES ('$name', '$email', '$phone', '$subject', '$message')";
        mysqli_query($db, $query);

        $_SESSION['success'] = "Message sent";
       // header('location: index.php');
    }
}
?>