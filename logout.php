<?php
    require_once "log.php";
    
    // unset any session variables
    $_SESSION = array();

    // expire cookie
    if (!empty($_COOKIE[session_name()]))
    {
        setcookie(session_name(), "", time() - 42000);
    }
    
    session_unset();
    // destroy session
    session_destroy();
    
    require_once "header.php";
    
    echo "<div class= 'message'>";
    echo "<br>You have been logged out. <br> Thanks for visiting!<br>";
    echo "<a href= login.php>Log in again.</a>";
    echo "</div>";
    

    include_once "footer.php";
?>