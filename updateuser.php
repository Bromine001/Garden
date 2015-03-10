<?php
require_once "log.php";
require_once "header.php";



        $old = sanitizeString($_POST['oldpw']);
        $new = sanitizeString($_POST['newpw']);
        $confirm = sanitizeString($_POST['confirmpw']);
        $email = sanitizeString($_POST['email']);
        $data = mySQLquery("SELECT * FROM users WHERE username = '$user'");
        $pass = mysqli_fetch_row($data);
        
        if ($new == "" || $old == "" || $confirm == "" || $email == "")
        {
            echo "<div class= 'message'>";
            echo "<br> Please fill out all the forms.";
            echo "</div>";
        }
        
        if ($new !== $confirm)
        {
            echo "<div class= 'message'>";
            echo "<br> New password does not match confirmation.";
            echo "<br> Please try again.";
            echo "</div>";
            include "useredit.php";
            
        }
        
        if ($old !== $pass[3])
        {
            echo "<div class= 'message'>";
            echo "<br> Incorrect password";
            echo "<br> Please try again.";
            include "useredit.php";
            echo "</div>";
        }
        
        else
        {
            
            mySQLquery("UPDATE users
                SET password='$new',  email= '$email'
                WHERE username = '$user'");
            include "useredit.php";   
        }
        
    
?>