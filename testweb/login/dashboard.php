<?php

session_start(); // we have to start our Current Session

include $_SERVER['DOCUMENT_ROOT'] . "/test/testweb/db.php"; //  just called our database confile if need

if (!isset($_SESSION["username"])) {
    header("location:/test/testweb/index.php");

}
// Chekking if username cookies is not set in our Browser then redirect to our login page

?>

Login Succesfully your username is ===> <?php echo $_SESSION["username"]; ?>

<?php ?>
