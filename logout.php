<?php
/**
 * Created by PhpStorm.
 * User: Rajiv
 * Date: 19/5/16
 * Time: 1:06 PM
 */
session_start();
unset($_SESSION['username']);
unset($_SESSION['name']);
session_destroy();
header("location:index.php");
?>
