<?php
$host = "localhost";
$user = "root";
$pass = "";
$link = mysqli_connect($host,$user,$pass);
mysqli_select_db($link,"home_2");
mysqli_query($link,"SET NAMES utf8");
?>