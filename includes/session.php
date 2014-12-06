<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Razin
 * Date: 2/4/12
 * Time: 4:28 PM
 * To change this template use File | Settings | File Templates.
 */

    session_start();

    function is_logged_in(){
        if(isset($_SESSION['user_id'])){
            return true;
        } else {
            return false;
        }
    }
