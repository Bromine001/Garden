<?php
//Header where a bunch of important stuff goes. Both the HTML header and most of the important
//session info. Also see log.php.

    $id =  $_SESSION['userID'];
    $user = $_SESSION['user'];

    echo " <!DOCTYPE html>  <html> <head> ";
        
 //       <!--favicon and jquery or bootstrap or whatever goes here -->
    echo "<link rel='shortcut icon' href='favicon.ico' type='image/x-icon' />";
    
 //       <!-- So does your CSS sheet --!>
    echo ("<link rel='stylesheet' type='text/css' href='style.css'/>");
        
    echo "<title>Your Garden</title> ";
   
    if (isset($_SESSION['user']))
    {
        echo ("<div class= 'topper'>");
        //echo ("<img id= 'icon' src = 'icon1.jpg'>");
        print "<h1> $user's garden website </h1>";
        echo ("</div>");
    }
    else
    {
        echo ("<div class= 'topper'>");
        print "<h1>Your garden website </h1>";
        echo ("</div>");
    }
  ?>      
        <!--menu goes here--> 
        <div class= "menu">
    
            <a href= index.php>Current plantings</a> 
            <a href= plants.php>New Vegetable</a>
            <a href= herbs.php>New Herb</a>
            <a href= userdb.php>New Custom Plant</a>
            <a href= history.php>History</a> 
            <a href= todo.php>To Do list</a> 
 
        </div>
           
    </head> 

