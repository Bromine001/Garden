<?php
//used to edit plants. not used in current version. 

    require_once "log.php";
    require_once "header.php";
        if (isset($_POST['done']))
        {
        $sownid = sanitizeString($_POST['id']);
        $var = sanitizeString($_POST['variety']);
        $germ = sanitizeString($_POST['germf']);
        $trans = sanitizeString($_POST['transplantf']);
        $cat = sanitizeString($_POST['catf']);
        $num = sanitizeString($_POST['numf']);
        $note = sanitizeString($_POST['notesf']);
        
        
        mySQLquery("UPDATE sown
            SET variety='$var',  germination= '$germ',  transplant = '$trans', catnum = '$cat', numplanted = '$num', notes = '$note'
            WHERE id = '$sownid'");
        echo ("your plant has been edited.<br>");
        echo ("Links and stuff.");
        
        }
    
        if (isset($_POST['kill']))
        {
        $pid = sanitizeString($_POST['plantID']);
        $sownid = sanitizeString($_POST['id']);
        $var = sanitizeString($_POST['variety']);
        $germ = sanitizeString($_POST['germf']);
        $trans = sanitizeString($_POST['transplantf']);
        $cat = sanitizeString($_POST['catf']);
        $num = sanitizeString($_POST['numf']);
        $note = sanitizeString($_POST['notesf']);
        
        mySQLquery("INSERT INTO history (plantID, user, germination, transplant, catnum, seedyear, numplanted, variety, notes)
                 VALUES ('$pid', '$user', '$germ', '$trans', '$cat', 3, '$num', '$var', '$note')");

        mySQLquery("DELETE FROM sown
                WHERE id = '$sownid'");
    
        
        echo ("Your plant has been retired.<br>");
        echo ("<a href = 'index.php'>retire another</a> <a href = 'history.php'>view history</a>");
        
        }


