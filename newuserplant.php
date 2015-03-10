<?php
//used to add a new plant to current plantings.
//works on addplant.php

    require_once "log.php";
    require_once "header.php";
    
    if (isset($_POST['plant']))
    {
        $new= $_POST['plant']; 
    }    
?>
        
<body>
<div>
    <table>
        <tr>
        <td class= title>name </td>
        <td class= title>genus</td>
        <td class= title>sun </td>
        <td class= title>soil </td>
        <td class= title>spacing</td>
        <td class= title>lifespan</td>
        <td class= title>development</td>
        <td class= title>notes</td>
        </tr>
<?php

$data = mySQLquery("SELECT * FROM plants WHERE plantID ='$new'");
    
    while ($row = mysqli_fetch_row($data))
    { 
        echo ("<tr>");
        echo ("<td>" . $row[1] . "</td>");
        echo ("<td>" . $row[2] . "</td>");
        echo ("<td>" . $row[3] . "</td>");
        echo ("<td>" . $row[4] . "</td>");
        echo ("<td>" . $row[5] . "</td>");
        echo ("<td>" . $row[6] . "</td>");
        echo ("<td>" . $row[7] . "</td>");
        echo ("<td>" . $row[8] . "</td>");
        echo ("</tr>"); 
    }  
    
        echo "</table>";
        echo "<table>";
        echo "<tr>";
        echo ("<td>Varietal</td>");
        echo ("<td>Number planted</td>");
        echo ("<td>Date started</td>");
        echo ("<td>Date transplanted</td>");
        echo ("<td>Seed source</td>");
        
        echo ("</tr>");
         
        echo ("<tr>");
        echo ("<form name= 'planting' method= 'post' action= 'addplant.php'>");
        //echo ("<input type= 'text' name= 'plant' value= '$row[1]'>");
        echo ("<td><input type= 'text' name= 'variety' placeholder= 'varietal'></td>");
        echo ("<td><input type= 'number' name= 'numf' placeholder= '1'></td>");
        echo ("<td><input type= 'date' name= 'germf' value= 'date germinated'></td>");
        echo ("<td><input type= 'date' name= 'transplantf' value= 'date in the garden'></td>");
        echo ("<td><input type= 'text' name= 'catf' placeholder= 'Catalogue number'></td>");
        
        echo ("<td><input class= 'hide' type= 'text' name= 'pid' value= '$new'></td>");
        echo ("</tr><br></table>");
        echo ("Notes: <br>");
        echo ("<textarea rows = 6 class= 'note' name= 'notesf'>notes</textarea><br>");
        echo ("<input type= 'submit' class= 'butt' name= 'newplant' value= 'Plant this!'>");
        echo ("</form>");
        echo ("</table>");
        
    include_once "footer.php";    
?>
    
    


