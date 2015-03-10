<?php


        echo ("<form action='newplant.php' method= 'post'>");
        echo "<td><input type='button' name='plantme' value='4'></td>";



if (isset($_POST['plantme']))
    {
        $plant = $_POST['plantme'];
        echo "button $plant has been pressed.";
        //    include "newplant.php";
        //header ("location: /newplant.php");
    }
?>

