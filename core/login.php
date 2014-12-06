<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Razin
 * Date: 2/4/12
 * Time: 12:43 PM
 * To change this template use File | Settings | File Templates.
 */


    require_once("../includes/session.php");
    require_once("../includes/database.php");
    $message = "";

    if(is_logged_in()){
        header("Location: home.php");
    }

    if(!isset($_POST['submit'])){

    } else {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);


        $found_user = $dbase->find_user($username, $password);

        if(isset($found_user)){
            //login successful
            $_SESSION['user_id'] = $found_user['id'];
            $_SESSION['username'] = $found_user['username'];
            header("Location: home.php");
        } else {
            $message = "Username/Password combination is not correct.";
        }
    }
?>



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
            <input type="submit" name="submit" value="Submit" />
        </form>
    </div>

<?php //require_once("links.php"); ?>

<?php require_once("../view/footer.php"); ?>