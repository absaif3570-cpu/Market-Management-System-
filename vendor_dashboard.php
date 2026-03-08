<?php
session_start();

if($_SESSION['role'] != 'vendor'){
header("Location: login.html");
}
?>