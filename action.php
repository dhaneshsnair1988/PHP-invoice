<?php
session_start();
include 'Invoice.php';
$invoice = new Invoice();

if($_GET['action'] == 'logout') {
session_unset();
session_destroy();
header("Location:index.php");
}

