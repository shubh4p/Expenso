<?php
session_start();
if(isset($_SESSION['user']))
{
    unset($_SESSION['user']);
    //session_destroy();
    if(!isset($_SESSION['user']));
    {
        header("location:index.html");
    }
}

?>
