<?php
session_start();
session_destroy();
header('location:../frame.php?p=home');
?>