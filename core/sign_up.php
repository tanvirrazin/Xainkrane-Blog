<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Razin
 * Date: 2/4/12
 * Time: 5:49 PM
 * To change this template use File | Settings | File Templates.
 */

    require_once("../includes/session.php");
    require_once("../includes/database.php");

    if(is_logged_in()){
        header("Location: home.php");
    }

    $message = "";

    if(!isset($_POST['submit'])){

    } else {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        //Here will be form validation function call between if statement
        $found_user = $dbase->find_user($username, $password);
        if(!isset($found_user)){
            if($dbase->insert_user($username, $password, $email)){
                $found_user = $dbase->find_user($username, $password);
                $_SESSION['user_id'] = $found_user['id'];
                $_SESSION['username'] = $found_user['username'];
                header("Location: home.php");
            } else {
                $message = "Signing up was not successful.";
            }
        } else {
            $message = "Username/Password combination is not available.";
        }
    }

?>

<?php require_once("../includes/database.php"); ?>

<?php require_once("../view/header.php"); ?>

<?php require_once("navigation.php"); ?>

<div id="login_form">
    <p id="login">Sign Up</p><br />
    <p><?php echo $message; ?></p><br />
    <form action="sign_up.php" method="post" >
        <label>username: </label>
        <input type="text" name="username" /> <br /><br />
        <label>password: </label>
        <input type="password" name="password" /> <br /><br />
        <label>confirm password: </label>
        <input type="password" name="password_conf" /> <br /><br />
        <label>email: </label>
        <input type="text" name="email" /> <br /><br />
        <input type="submit" name="submit" value="Submit"/>
    </form>
</div>

<?php //require_once("links.php"); ?>

<?php require_once("../view/footer.php"); ?>