<?php

//contains the eponymous functions. Make sure this is hidden from the user in the published form.

    $dbhost = 'mysql.bromine001.com';
    $dbname = 'yourgarden_plants';
    $dbuser = 'gardenwebsite';  
    $dbpass = 'Horsespark21';
    //$appname = 'garden';
    
    //$link = mysqli_init();
    //mysqli_options($link, MYSQLI_OPT_LOCAL_INFILE, true);
    //$connection = (mysqli_real_connect($link, $dbhost, $dbuser, $dbpass, $dbname));
    
    $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        if ($connection->connect_error) die($connection->connect_error);
    
    
    
    //this is the query function
    function mySQLquery ($query)
    {
        global $connection;
        $result = $connection->query($query);
        if (!$result) die($connection->error);
        return $result;
    }
     
   

        //INCLUDE A SANITIZE STRING FUNCTION TO REMOVE POTENTIALLY MALICIOUS CODE
    function sanitizeString($var)
    {
        global $connection;
        $var = strip_tags($var);
        $var = stripslashes($var);
        $var = htmlentities($var);
        return $connection->real_escape_string($var);
        
    }

?>