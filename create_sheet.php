<?php
session_start();

if (isset($_SESSION['stud']) && !empty($_SESSION['stud'])) {
    if (!isset($_SESSION['sheet'])) {
        $_SESSION['sheet'] = [];
    }

    if (isset($_POST['date'])) {
        if (isset($_POST['checkbox'])) {

            foreach ($_POST['checkbox'] as $key) {
                $_SESSION['sheet'][$_POST['date']][$key] = $_SESSION['stud'][$key];
            }
        }
    }
}

    
print_r($_SESSION['sheet']);
?>

<!doctype html>
<html>

<head>
    <title>create sheet</title>
</head>

<body>
    <form action="create_sheet.php" method="post">
        <table border=1>
            <th>Sheet Date</th>
            <th><input type="date" name="date" required></th>
            <tr>
                <td></td>
                <td>

                <?php
                    foreach ($_SESSION['stud'] as $key => $value) { 
                        // list of checkbox
                        echo "<input type='checkbox' name='checkbox[]' value='$key' >";
                        //the name of students
                        echo  $value['first'] . " " . $value['last'];
                        
                        echo "<br>";
                    }
                    ?>

                    <input type="submit" name="create" value="create">
                </td>
            </tr>
        </table>

        <?php 
        if(isset($_POST['create'])){
            header("location:attendance_sheet.php");
            }
        ?>

    </form>
    

</body>

</html>