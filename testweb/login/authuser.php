<?php
ini_set('display_errors', 1);
session_start(); // There we basically Ssession Cookie for store our cookie in Browser and we have to
// not enter Password in website agian and again
// ini_set('display_errors', 1);
include $_SERVER['DOCUMENT_ROOT'] . "/test/testweb/db.php"; //  There is Actually called my db configaretion Php
// File for use DB class inside the db.php

if (isset($_POST["submit"])) { // that is for conformation if i click Submit button
    $db = new DB(); //  that is my DB Class i Assin in $db Variable
    $sql = "SELECT * FROM auth WHERE username = '" . $_POST["username"] . "'"; // That is my Sql Query if my
    // User given id password is Correct in Database
    $result = $db->query($sql); // Sending my sql commad in to DB query function

    $row = mysqli_fetch_array($result); // Fetch all data in my auth tabel

    if ($_POST["password"] == $row["password"]) { // if password match with user given password
        $_SESSION["username"] = $row["username"];

        header("location:/test/testweb/dashboard.php"); // Dashboard

    } else {

        header("location:/test/testweb/index.php?message=Invalide Username Password"); // if password not match  then redirect to login page

    }

}
