<?php
    session_start();
    if(empty($_SESSION['firstname']))
    {
        header('location:adminindex.php');
    }

?>