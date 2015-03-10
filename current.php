<!-- displays through index.php. I want index to be easily configured to not have
user's default view be their current portfolio. -->

<body>
    <h2>Current plantings</h2>
    <div class= current>
        <!--current garden table-->
        <table>
            <tr>
            <td class= title>Edit</td>
            <td class= title>Plant </td>
            <td class= title>Varietal</td>
            <td class= title>number planted </td>
            <td class= title>date started </td>
            <td class= title>date in garden</td>
            <td class= title>cat. number</td>
            <td class= title>notes</td>
            </tr>
<?php      
    $data = mySQLquery("SELECT * FROM sown WHERE user = '$user'");
        
    while ($row = mysqli_fetch_row($data))
    {
        $subquery =  mySQLquery("SELECT * FROM plants WHERE plantID='$row[1]'");
        $name = mysqli_fetch_row($subquery);
        $id = $row[0];   
        {
            echo ("<tr>");
            echo ("<form action='editplant.php' method= 'post'>");
            echo ("<td class = button><input type='submit' name='id' value='$id'></td>");
            echo ("</form>");
            echo ("<td>" . $name[1] . "</td>");
            echo ("<td>" . $row[8] . "</td>");
            echo ("<td>" . $row[7] . "</td>");
            echo ("<td>" . $row[3] . "</td>");
            echo ("<td>" . $row[4] . "</td>");
            echo ("<td>" . $row[5] . "</td>");
            echo ("<td class= note>" . $row[9] . "</td>");
            echo ("</tr>");
        }
    }
    echo ("</table>");
    
    
    
?>
    </table>
</div>
<div>
    
</div>
</body>
