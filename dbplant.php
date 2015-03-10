<?php

require_once "log.php";
require_once "header.php";
    
if (isset($_POST['userplant']))
    {
        $name = sanitizeString($_POST['name']);
        $genus = sanitizeString($_POST['genus']);
        $sun = sanitizeString($_POST['sun']);
        $soil = sanitizeString($_POST['soil']);
        $spacing = sanitizeString($_POST['spacing']);
        $life = sanitizeString($_POST['life']);
        $time = sanitizeString($_POST['time']);
        $note = sanitizeString($_POST['notes']);
      
      mySQLquery("INSERT INTO plants (name, genus, sun, soil, spacing, lifespan, time, notes, type)
                 VALUES ('$name', '$genus', '$sun', '$soil', '$spacing', '$life', '$time', '$note', '$user')");

        include_once "userplant.php";
    }
    
else
    {
        echo ("Sorry, there was a problem adding your new plant. Please try agian.<br>");
        echo ("<a href = 'mailto:webmaster@bromine001.com'>Send us an email</a><br>");
        echo ("<a href = 'index.php'>Return</a>");
    }
    
include_once "footer.php";
?>