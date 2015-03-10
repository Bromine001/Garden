<?php
require_once "log.php";
require_once "header.php";

    if (isset($_POST['done']))
    {
        $todoid = $_POST['done'];
        mySQLquery("DELETE FROM todo
            WHERE id = '$todoid'");
   }
       
    if (isset($_POST['new']))
    {
        //$item = sanitizeString($note);
        $item = sanitizeString($_POST['thing']);
        $duedate = sanitizeString($_POST['date']);
        
        mySQLquery("INSERT INTO todo (user, dueDate, item)
            VALUES ('$user', '$duedate', '$item')");
    }

?>
<body>
<div>
     <h2>My To Do list</h2>
     
    <table>
                    <tr id= head>
                    <td class= title>Done</td>
                    <td class= title>date added </td>
                    <td class= title>Due date</td>
                    <td class= title>Item</td>
                    </tr>

<?php
    $data = mySQLquery("SELECT * FROM todo WHERE user = '$user'");
    
    while ($row = mysqli_fetch_row($data))
    {
        echo ("<tr>");
        echo ("<form action='todo.php' method= 'post'>");
        echo ("<td><input type='submit' name='done' value=$row[0]></td>");
        echo ("</form>");
        echo ("<td>" . $row[3] . "</td>");
        echo ("<td>" . $row[4] . "</td>");
        echo ("<td>" . $row[2] . "</td>");
        echo ("</tr>");
    }
    echo ("</table>");
            
    echo ("<form action='todo.php' method= 'post'>");
    echo ("<input type= 'date' name= 'date' placeholder= 'due date'> <br>");
    echo ("<textarea rows= 5 class= 'note' name = 'thing' > List item goes here </textarea><br>");
    echo ("<input type= 'submit' class= 'butt' name='new' value = 'submit'>");
    echo ("</form>");
    
    include_once "footer.php";
?>