<?php

//action taken from editplant.php. When a plant is added.

require_once "log.php";
require_once "header.php";
    
if (isset($_POST['newplant']))    
    {
        $pid = sanitizeString($_POST['pid']);
        $variety = sanitizeString($_POST['variety']);
        $germ = sanitizeString($_POST['germf']);
        $trans = sanitizeString($_POST['transplantf']);
        $cat = sanitizeString($_POST['catf']);
        $num = sanitizeString($_POST['numf']);
        $note = sanitizeString($_POST['notesf']);
      
        if ($pid == "" || $variety == "" || $cat == "" || $num == "" || $note == "")
        {
            echo "<div class= 'message'>";
            echo "Sorry, you need to fill out all the fields.<br>";
            echo "<a href= 'index.php'>Return to main screen.</a>";
            echo "</div>";
        }
        else
        {
            mySQLquery("INSERT INTO sown (plantID, user, germination, transplant, catnum, numplanted, variety, notes)
                VALUES ('$pid', '$user', '$germ', '$trans', '$cat', $num, '$variety', '$note')");  
            include_once "current.php";
        }

        
    }
    
else
    {
        echo ("Sorry, there was a problem adding your new plant. Please try agian.<br>");
        echo ("<a href = mailto: 'webmaster@garden.com'>Send us an email</a><br>");
        echo ("<a href = 'index.php'>Return</a>");
    }
    
include_once "footer.php";
?>