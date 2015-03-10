<?php


    require_once "log.php";
    require_once "header.php";
    
        
        
    if (isset($_POST['userplant']))
    {
        $new= $_POST['userplant'];
    }
    else
    {
      
        echo "<h2>New custom plant</h2><table>";
        echo "<tr>";
        echo ("<td class = 'title'>Name</td>");
        echo ("<td class = 'title'>Genus</td>");
        echo ("<td class = 'title'>Sun</td>");
        echo ("<td class = 'title'>Soil</td>");
        echo ("<td class = 'title'>Spacing</td>");
        echo ("<td class = 'title'>Life cycle</td>");
        echo ("</tr>");
    
        echo ("<tr>");
        echo ("<form name= 'planting' method= 'post' action= 'dbplant.php'>");
        //echo ("<input type= 'text' name= 'plant' value= '$row[1]'>");
        echo ("<td><input type= 'text' name= 'name' placeholder= 'Name'></td>");
        echo ("<td><input type= 'text' name= 'genus' placeholder= 'Genus'></td>");
        echo ("<td><input type= 'text' name= 'sun' placeholder= 'Sun'></td>");
        echo ("<td><input type= 'text' name= 'soil' placeholder= 'soil'></td>");
        echo ("<td><input type= 'text' name= 'spacing' placeholder= 'spacing'></td>");
        echo ("<td><input type= 'text' name= 'life' placeholder= 'life cycle'></td>");
        echo ("</tr><tr>");
            echo ("<td class = 'title' colspan= \"3\"> Planting directions: </td> <td class = 'title'> Notes: </td>");
            echo ("</tr><tr>");
            echo ("<td colspan= \"3\"><textarea rows= 6 class= 'note' name= 'time'>planting directions</textarea></td>");
            echo ("<td colspan= \"5\"><textarea rows= 6 class= 'note' name= 'notes'>Notes</textarea></td>");
            echo ("</tr> <tr>");
        
        echo ("<td><input type= 'submit' class= 'butt' name= 'userplant' value= 'Add to database.'></td>");
        echo ("</tr>");
        echo ("</form>");
        echo ("</table>");
        
        
    }
    
    echo "<h2> Plants already added by $user.</h2>";
  
        include "userdb.php";
?>