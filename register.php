<?php
    //configuration
    include_once "header.php";
    include_once "functions.php";
                                                            

    //if form was resubmitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if ($_POST['secret'] !== secret)
        {
            echo ("<div class = 'message'>");
            echo("Sorry, registration is limited. You need to ask for a secret registration code.");
            echo ("<br><a href= 'mailto:webmaster@bromine001.com'>Send a request</a>");
            echo ("<br><a href= 'register.php'>return to register</a>");
            echo ("</div>");
            include_once "footer.php";
            break;
        }
        else if (empty($_POST["username"]))
        {
            echo ("<div class = 'message'>");
            echo("You must submit a username.<br>");
            echo ("<a href= 'register.php'>return</a>");
            echo ("</div>");
            
        }
        else if (empty($_POST["password"]))
        {
            echo ("<div class = 'message'>");
            echo("You must submit a password.<br>");
            echo ("<a href= 'register.php'>return</a>");
            echo ("</div>");
        }
        else if (($_POST["password"]) !== ($_POST["confirmation"]))
        {
            echo ("<div class= 'message'>");
            echo("password and confirmation do not match.<br>");
            echo ("<a href= 'register.php'>return</a>");
            echo ("</div>");
        }
        
        else
        {
            $user = sanitizeString($_POST["username"]);
            $pass = sanitizeString($_POST["password"]);
            $email = sanitizeString($_POST["email"]);
            $zone = sanitizeString($POST_["zone"]);
            
            $getuser = mySQLquery("SELECT * FROM users WHERE username = '$user'");
            $rcount = $getuser->num_rows;
            
            if ($rcount == 1)
            {
                echo ("<div class = 'message'>");
                echo ("I'm sorry, but that username is taken. <br>Please try again.<br>");
                echo ("<a href= 'register.php'>return to register</a>");
                echo ("</div>");
                
            }
            else
            {
                // post new user here. 
                mySQLquery("INSERT INTO users (username, password, email)
                    VALUES ('$user', '$pass', '$email')");
                
                if (mySQLquery === false)
                {
                    echo ("<div class = 'message'>");
                    echo ("could not register user");
                    echo ("</div>");
                }
           
                else 
                {
                mySQLquery ("INSERT INTO sown (user, variety, notes)
                    VALUES ('$user', 'example', 'This is your frst sample plant. use the button to the side to edit or delete. Use the menu along the top to add more.')");
                 
                mySQLquery ("INSERT INTO todo (user, item)
                    VALUES ('$user', 'Sample to do list item')");

                    echo ("<div class = 'message'>");
                    echo ("New user successfully added");
                    echo ("</div>");
                    include "login.php";
                }
            }
        }
        
    }
    else
    {
       include "register_form.php";
    }
    
    include_once "footer.php";
?>
