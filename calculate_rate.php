<?php
session_start();
if (isset($_SESSION['sheet'])) {

    echo "<table border='1'>";
    echo "<th>Attendance</th>";
    foreach ($_SESSION['sheet'] as $key => $value ) {
        echo "<th>Sheet $key </th>";// print the date
    }
    echo "<th>Attendance Rates</th>";

    foreach ($_SESSION['stud'] as $key => $val) {
        echo "<tr>";
        echo "<td>" . $val['first'] . " " . $val['last'] . "</td>";
        $sheetNum = count($_SESSION['sheet']);// the number of sheets
        $count = 0;
        foreach ($_SESSION['sheet'] as $ke => $value) { 
                if (isset($value[$key])) {// if the checked student at that date
                echo "<td>&#x2713;</td>";// print true
                $count++;
            } else {
               echo "<td>&#x2717;</td>";  // if not the case of the attendent students at this date, print false sign 
            }
            
        }
        $rate = round($count / $sheetNum * 100, 2);// the rate
        echo "<td> $rate % </td>";// print the calculated rate of eah student
        echo "</tr>";
    }
    
    echo "</table>";
} 

?>
