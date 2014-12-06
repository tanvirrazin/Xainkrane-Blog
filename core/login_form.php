<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Razin
 * Date: 2/4/12
 * Time: 1:13 PM
 * To change this template use File | Settings | File Templates.
 */
    
    $message = "this is for debuging purpose.";
    if(isset($_POST["message"])){
        $message = $_POST["message"];
    }
?>

<?php require_once("../includes/database.php"); ?>

<?php require_once("../view/header.php"); ?>

<?php require_once("navigation.php"); ?>

    <div id="login_form">
        <p id="login">Log In</p><br />
        <p><?php echo $message; ?></p>
        <form action="login.php" method="post" >
            <label>username: </label>
            <input type="text" name="username" /> <br /><br />
            <label>password: </label>
            <input type="password" name="password" /> <br /><br />
            <input type="submit" name="submit" />
        </form>
    </div>

<?php //require_once("links.php"); ?>

<?php require_once("../view/footer.php"); ?>