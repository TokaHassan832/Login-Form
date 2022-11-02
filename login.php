<?php
session_start();
if(isset($_SESSION['userlogin'])) {
    header("Location:index.php");
}

    include('HTML Template/login.html');
    require('config.php');

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['pwd'];
        $sql = "SELECT * FROM users WHERE email=? AND password=? LIMIT 1";
        $stmselect = $db->prepare($sql);
        $result = $stmselect->execute([$email, $password]);
        if ($result) {
            $user = $stmselect->fetch(PDO::FETCH_ASSOC);
            if ($stmselect->rowCount() > 0) {
                $_SESSION['userlogin'] = $user;
                echo "Success";
            } else {
                echo "There is no user matches";
            }
        } else {
            echo "There were errors while connecting database";
        }

    }