<?php
session_start();
if(isset($_SESSION['userlogin'])){
 header("Location:login.php");
}
if(isset($_GET['logout'])){
    session_destroy();
    session_unset();
    header('Location:login.php');
}

?>
<html>
<head>
    <title>My Website</title>
</head>
<body>
<h1>This is index page</h1> <br>
<a href="index.php?logout=true">Logout</a>
</body>
</html>
