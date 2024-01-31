<?php
session_start();

unset($_SESSION['name'],$_SESSION['admin']);
header('location:../index.php');