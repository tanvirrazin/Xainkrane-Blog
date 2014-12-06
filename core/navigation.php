<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Razin
 * Date: 2/4/12
 * Time: 12:47 PM
 * To change this template use File | Settings | File Templates.
 */
?>

    <div id="navigation">
    <div id="main_nav">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About</a></li>
            <?php 
                if(is_logged_in()){ 
                    echo '<li><a href="write_blog.php">Write a blog!</a></li>
                          <li><a href="logout.php">Logout</a></li>';
                } else {
                    echo '<li><a href="sign_up.php">sign up</a></li>';
                }   
            ?>
        </ul>
    </div>
    <div id="user_log">
        <?php 
            if(is_logged_in()){
                echo "Hi "."{$username}";
            } else {
                echo '<a href="login.php">login</a>';
            }
        ?>
    </div>
</div>

<div id="blog_body">
