<?php
//display of plant database.
//allows buttons to add new plants.

require_once "log.php";
require_once "header.php";
?>
<body>
<div>
    <table>
        <tr>
        <td class= title>Plant this</td>
        <td class= title>name </td>
        <td class= title>genus</td>
    <!--<td class= title>sun </td> -->
    <!--<td class= title>soil </td> -->
        <td class= title>spacing</td>
    <!--<td class= title>lifespan</td> -->
        <td class= title>development</td>
        <td class= title>notes</td>
        </tr>
            
<?php

$data = mySQLquery("SELECT * FROM plants WHERE type = '$user'");
      
    while ($row = mysqli_fetch_row($data))
    {
        echo ("<tr>");
        echo ("<form action='newplant.php' method= 'post'>");
        echo "<td><input type='submit' name='plant' value='$row[0]'></td>";
        echo ("</form>");
        echo ("<td>" . $row[1] . "</td>");
        echo ("<td>" . $row[2] . "</td>");
        //echo ("<td>" . $row[3] . "</td>");
        //echo ("<td>" . $row[4] . "</td>");
        echo ("<td class= space>" . $row[5] . "</td>");
        //echo ("<td>" . $row[6] . "</td>");
        echo ("<td class= dir>" . $row[7] . "</td>");
        echo ("<td class= note>" . $row[8] . "</td>");
        echo ("</tr>");
          
    }
    echo "</table>";
    echo "Have a plant that you think we need? <a href='mailto:webmaster@bromine001.com'>let us know!</a>";
    include_once "footer.php";
?>