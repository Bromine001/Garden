<?php
    require_once "log.php";
    require_once "header.php";

    $data = mySQLquery("SELECT * FROM users WHERE username = '$user'");
        
        
    while ($row = mysqli_fetch_row($data))
    {
        echo "<table>";
        echo "<tr>";
            echo "<td class= 'title'>--</td>";
            echo "<td class= 'title'>User Name</td>";
            echo "<td class= 'title'>Email address</td>";
            echo "<td class= 'title'>--</td>";
        echo "</tr>";

        echo "<tr>";
            echo ("<td class= 'title'>  </td>");
            echo ("<td class= 'title'>" . $row[1] . "</td>");
            echo ("<td class= 'title'>" . $row[2] . "</td>");
            echo ("<td class= 'title'>  </td>");
        echo "</tr>";
        echo "<tr>";
            echo "<td>old password</td>";
            echo "<td>new password</td>";
            echo "<td>confrim password</td>";
            echo "<td>email address</td>";

        echo "</tr>";
        echo "<tr>";
            echo ("<form name= 'edituser' method= 'post' action= 'updateuser.php'>");
            echo ("<td><input type= 'password' name= 'oldpw' placeholder= 'old password'></td>");
            echo ("<td><input type= 'password' name= 'newpw' placeholder= 'new password'></td>");
            echo ("<td><input type= 'password' name= 'confirmpw' placeholder= 'confirm password'></td>");
            echo ("<td><input type= 'text' name= 'email' placeholder= 'email address'></td>");
        echo "</tr>";
    
        echo "</table>";
        
        echo ("<input type= 'submit' class= 'butt' name= 'Finished editing'>");
        
        echo "</form>";
    }
    
    include "footer.php";
?>