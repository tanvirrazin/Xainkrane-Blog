<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Razin
 * Date: 2/10/12
 * Time: 5:06 PM
 * To change this template use File | Settings | File Templates.
 */

    require_once("../includes/session.php");


    if(is_logged_in()){
        $username = $_SESSION['username'];
        $user_id = $_SESSION['user_id'];
    }

    require_once("../includes/database.php");
    $blog = array();
    if(isset($_GET['bid'])){
        $blog['bid'] = $_GET['bid'];
    } else {
        header("Location: home.php");
    }

    if(isset($blog['bid'])){
        $blog = $dbase->find_blog_by_id($blog['bid']);
    }

?>

<?php require_once("../view/header.php"); ?>

<?php require_once("navigation.php"); ?>

<?php
    $display = '
        <div id="blogs">
            <div class="blog_detail" >
                    <div class="blog_head" >
                        <img class="blog_bullet" src="../resource/images/default_prof_pic.png" width="40px" height="40px" />
                        <div class="blog_sub" >
                            <h2>';
    $display.= htmlentities($blog["headline"]);

    $display.= '</h2>
                            <p>';
    $display.= htmlentities($blog["username"]);
    $display.= '</p>
                        </div>

                    </div>
                    <div id="blog_detail_text" >';
    $display.= '<p>'.htmlentities($blog["body"]).'</p>';
        $display.= '</div>
                </div></div>';
    echo $display;
?>

<?php //require_once("links.php"); ?>

<?php require_once("../view/footer.php"); ?>