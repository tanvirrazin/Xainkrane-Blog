<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Razin
 * Date: 2/4/12
 * Time: 4:51 PM
 * To change this template use File | Settings | File Templates.
 */

    require_once("../includes/session.php");

    $_SESSION = array();

    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(),'', time()-60000,'/');
    }

    session_destroy();

    header("Location: home.php");