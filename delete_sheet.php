<?php
session_start();

echo "<table border=1>";
foreach ($_SESSION['sheet'] as $key => $value) {

    echo "<tr>";
    echo "<td>Sheet $key</td>";// the date(date is the key of the session['sheet'])
    echo "<td><a href='attendance_sheet.php?delete=". $key ."'>delete</a></td>"; //back to the main with the deleted date 
    echo "</td>";
}

echo "</table>";
?>

