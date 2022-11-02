<?php
session_start();

require ('config.php');
include ('HTML Template/sign-up.html');
if (isset($_POST['signup'])) {
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $dateOfBirth = $_POST['DOB'];
    $gender = $_POST['gender'];
    $country = $_POST['countries'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['pwd'];
    $sql = "INSERT INTO users (firstname,lastname,dateOfBirth,gender,country,email,phone,password) VALUES (?,?,?,?,?,?,?,?)";
    $stminsert = $db->prepare($sql);
    if ($_POST['confirm'] == $_POST['pwd']) {
        $result = $stminsert->execute([$firstname, $lastname, $dateOfBirth, $gender, $country, $email, $phone, $password]);
        echo "Successfully Saved";
    }else {
        echo "There were errors while saving the data";
    }

}
?>
