<?php

//Screen used to edit or delete plants. Accesed from kill.php
require_once "log.php";
require_once "header.php";
    //this changes plant entries. 
        if (isset($_POST['done']))
        {
    //cleaning input from user.
        $sownid = sanitizeString($_POST['id']);
        $var = sanitizeString($_POST['variety']);
        $germ = sanitizeString($_POST['germf']);
        $trans = sanitizeString($_POST['transplantf']);
        $cat = sanitizeString($_POST['catf']);
        $num = sanitizeString($_POST['num']);
        $note = sanitizeString($_POST['notesf']);
        
        
        mySQLquery("UPDATE sown
            SET variety='$var',  germination= '$germ',  transplant = '$trans', catnum = '$cat', numplanted = '$num', notes = '$note'
            WHERE id = '$sownid'");
        include_once "current.php";
        //echo ("your plant has been edited.<br>");
        
        }
    
    //this moves entries into the history file
        elseif (isset($_POST['kill']))
        {
    //cleaning input from the user.
        $pid = sanitizeString($_POST['plantID']);
        $sownid = sanitizeString($_POST['id']);
        $var = sanitizeString($_POST['variety']);
        $germ = sanitizeString($_POST['germf']);
        $trans = sanitizeString($_POST['transplantf']);
        $cat = sanitizeString($_POST['catf']);
        $num =  sanitizeString($_POST['num']);
        $note = sanitizeString($_POST['notesf']);
        
        mySQLquery("INSERT INTO history (plantID, user, germination, transplant, catnum, numplanted, variety, notes)
                 VALUES ('$pid', '$user', '$germ', '$trans', '$cat', '$num', '$var', '$note')");

        mySQLquery("DELETE FROM sown
                WHERE id = '$sownid'");
    
        include_once "current.php";
        //echo ("Your plant has been retired.<br>");
        }
        
        else
        {
            
            echo ("<body> <div>");
            // table heading for current plantings in an editable form 
            echo ("<table>");
            echo ("<tr id= head>");
            echo ("<td class= title>Plant </td>");
            echo ("<td class= title>Varietal</td>");
            echo ("<td class= title>number planted </td>");
            echo ("<td class= title>date started </td>");
            echo ("<td class= title>date transplanted</td>");
            echo ("<td class= title>cat. number</td>");
            echo ("</tr>");
        
            $id = $_POST['id'];
            $data = mySQLquery("SELECT * FROM sown WHERE user = '$user' and id = '$id'");
            $row = mysqli_fetch_row($data);
            $subquery =  mySQLquery("SELECT * FROM plants WHERE plantID='$row[1]'");
            $name = mysqli_fetch_row($subquery);
        
            echo ("<form action='editplant.php' method= 'post'>");
            echo ("<tr>");
            
            echo ("<td>" . $name[1] . "</td>");
            echo ("<td><input type= 'text' name= 'variety' value= '$row[8]'></td>");
            echo ("<td><input type= 'number' name= 'num' value= '$row[7]'></td>");
            echo ("<td><input type= 'date' name= 'germf' value= '$row[3]'></td>");
            echo ("<td><input type= 'date' name= 'transplantf' value= '$row[4]'></td>");
            echo ("<td><input type= 'text' name= 'catf' value= '$row[5]'></td>");
            
            echo ("<td><input class= 'hide' type= 'text' name= 'plantID' value= '$row[1]'></td>");
            echo ("<td><input class= 'hide' type= 'text' name= 'id' value= '$id'></td>");
            echo ("</tr><tr>");
            echo ("<td> Notes: </td>");
            echo ("</tr><tr>");
            echo ("<td colspan= \"6\"><textarea rows= 6 class= 'note' name= 'notesf' value= '$row[9]'>$row[9]</textarea></td>");
            echo ("</tr>");
            echo ("</table>");
            echo "<td><input type='submit' class= 'butt' name='done' value='Done'></td>";
            echo "<td><input type='submit' class= 'butt' name='kill' value='Retire plant'></td>";
            echo ("</form>");
           
            
        }
include_once "footer.php";

?>


