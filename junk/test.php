<?php
    include "header.php";
    require_once "functions.php";
    
    echo "<br>what?<br>";
    $data = mySQLquery("SELECT * FROM sown");
    

    echo ("here<br>");
    echo ("<table><tr><td> id number  </td><td>Name  </td><td>Date Planted  </td><td>Type  </td> </tr>");
    while ($row = mysqli_fetch_row($data))
    {
        $subquery =  mySQLquery("SELECT * FROM plants WHERE plantID='$row[0]'");
        $name = mysqli_fetch_row($subquery);
        echo ("<tr>");
        printf ("<td>");
        printf ("%s  ", $row[0]);
        echo ("</td>");
        echo ("<td>");
        printf ("%s  ", $name[1]);
        echo ("</td>");
        echo ("<td>");
        printf ("%s  ", $row[2]);
        echo ("</td>");
        echo ("<td>");
        printf ("%s  ", $row[7]);
        echo ("</td>");
        echo ("<td>");
        printf ("%s  ", $row[8]);
        echo ("</td></tr>");

        echo ("<br>");
    }
    echo ("</table>");
    

    
?>