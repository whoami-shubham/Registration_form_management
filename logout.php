<?php
session_start();

if(isset($_SESSION['sucess'])){

	session_destroy();
}

session_destroy();

header('location:index.php');


?>