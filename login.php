<?php
session_start();
    // configuration

    require_once "header.php";

    include_once "functions.php";

 
    
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $user = sanitizeString($_POST['username']);
        $pass = sanitizeString($_POST['password']);
        
        if ($user == "" || $pass == "" )
        {
            echo ("<div class= 'message'>");
            echo "<br>Please enter username and password.<br>";
            echo "<br><a href 'login.php'>Return</a>";
            echo ("/div>");
        }
        
        else
        {
            $result = mySQLquery("SELECT username, password from users where username = '$user' AND password = '$pass'");
            
            if ($result->num_rows == 0)
            {
                echo ("<div class= 'message'>");
                echo "<br>username or password incorrect, please try again.<br>";
                echo "<br><a href 'login.php'>Return</a>";
                echo ("</div>");
            }
            
            else
            {
                $_SESSION['user'] = $user;
                $_SESSION['pass'] = $pass;
                
                echo ("<div class= 'message'>");
                echo "You've been logged in! <br> <a href = 'index.php'>Click to continue</a>";
                echo ("</div>");
            }
        }
    }
    else
    {
        include "login_form.php";
    }
include_once "footer.php";
?>
