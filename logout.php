<?php
session_start();
session_destroy();
header('location:gb-login.php');
?>