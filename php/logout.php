<?php
session_start();
unset($_SESSION["ID"]);
unset($_SESSION["password"]);



header("Location:index.php");
?>