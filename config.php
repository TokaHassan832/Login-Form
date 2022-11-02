<?php
$host='localhost';
$user='root';
$password='';
$database='useraccounts';
$db=new PDO('mysql:host=localhost;dbname='.$database,$user,$password);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);