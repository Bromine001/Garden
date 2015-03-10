<?php
    //History file. 
    require_once "log.php";
    require_once "header.php";
?>
<body>
    <h2>Garden History</h2>
    <table id= history>
        <tr>      
        <td class= title>Retired at</td>
        <td class= title>Plant </td>
        <td class= title>Varietal</td>
        <td class= title>number planted </td>
        <td class= title>date started </td>
        <td class= title>date in garden</td>
        <td class= title>cat. number</td>
        <td class= title>notes</td>
        </tr>
        <!-- this needs reorganizing -->
<?php
   $data = mySQLquery("SELECT * FROM history WHERE user = '$user'");
        
        
       while ($row = mysqli_fetch_row($data))
    {
        $subquery =  mySQLquery("SELECT * FROM plants WHERE plantID='$row[0]'");
        $name = mysqli_fetch_row($subquery);
        $id = $row[0];   
        
        {
            echo ("<tr>");
            echo ("<td>" . $row[9] . "</td>");
            echo ("<td>" . $name[1] . "</td>");
            echo ("<td>" . $row[7] . "</td>");
            echo ("<td>" . $row[6] . "</td>");
            echo ("<td>" . $row[2] . "</td>");
            echo ("<td>" . $row[3] . "</td>");
            echo ("<td>" . $row[4] . "</td>");
            echo ("<td>" . $row[8] . "</td>");
            
            echo ("</tr>");
            
        }
    }
    echo ("</table>");
    
 include_once "footer.php";   
    
?>
  
