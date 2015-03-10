<?php
session_start();
//used to demonstrate login info for current session.

include 'functions.php';

    if (isset($_SESSION['user']))
    {
        $loggedin = TRUE;      
    }

    elseif ($loggedin == FALSE)
    {
                    //THIS IS A HARDCODED URL IF THE WEBSITE MOVES THIS MUST CHANGE!!!!!!!
        header('Location:http://www.yourgarden.bromine001.com/login.php');
    }
?>