<?php
session_start();
include("inc_koneksi.php");
if(!isset($_SESSION['admin_username'])) {
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="app">
        <nav>
            <ul>
                <li><a herf="admin_depan.php">Halaman Depan</li>
            </ul>
        </nav>