<?php require_once("../includes/session.php"); ?>

<?php
    if(is_logged_in()){
        $username = $_SESSION['username'];
        $user_id = $_SESSION['user_id'];
    }
?>

<?php require_once("../includes/database.php"); ?>

<?php require_once("../view/header.php"); ?>

<?php require_once("navigation.php"); ?>

<?php
    require_once("blog.php");
?>

<?php //require_once("links.php"); ?>

<?php require_once("../view/footer.php"); ?>
