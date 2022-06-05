<?php
session_start();

if (isset($_GET['delete']) && !empty($_GET['delete'])) {// if we press delete
    foreach ($_SESSION['sheet'] as $key => $value) {//foreach date
        if ($key == $_GET['delete']) {//  the date that we want to delete it
            unset($_SESSION['sheet'][$key]);// unset the the date from the sheet
        }
    }
}
?>
<!doctype html>
<html>
    <head>
        <title>MAIN PAGE</title>
    </head>
    <body>
       <br><br> <a href="student_input.php">Student Input</a><br><br>
        <a href="create_sheet.php">Create Sheet</a><br><br>
        <a href="delete_sheet.php">Delete Student Input</a><br><br>
        <a href="calculate_rate.php">Calculate Rate</a><br><br>

    </body>

</html>