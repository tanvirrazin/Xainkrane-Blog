<?php require_once("../includes/session.php");

if(is_logged_in()){
    $username = $_SESSION['username'];
    $user_id = $_SESSION['user_id'];
}


require_once("../includes/database.php");
    /* form validation and blog insertion into database*/
    $message = "";

    if(!isset($_POST['submit'])){

    } else {
        $body = $_POST['body'];
        $headline = $_POST['headline'];

        if($dbase->insert_blog($user_id, $headline, $body)){
            header("Location: home.php");

        } else {
            $message = "Got something problem with your blog.";
        }
    }
?>

<?php require_once("../view/header.php"); ?>

<?php require_once("navigation.php"); ?>

<div id="login_form">
    <p id="login">Write a blog!</p><br />
    <p><?php echo $message; ?></p><br />
    <form action="write_blog.php" method="post" >
        <label>Subject: </label>
        <input type="text" name="headline" /> <br /><br />
        <label>blogs: </label><br />
        <textarea rows="10" cols="70" name="body" /></textarea> <br /><br />
        <input type="submit" name="submit" value="Submit"/>
    </form>
</div>

<?php //require_once("links.php"); ?>

<?php require_once("../view/footer.php"); ?>

