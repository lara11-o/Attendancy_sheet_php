<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  //for the id of students and it is an increment id
    if(!isset($_SESSION['id_stud'])){
        $_SESSION['id_stud'] = 0;
    } else {
        $_SESSION['id_stud']++;
    }

    if (!isset($_SESSION['stud'])) {
        $_SESSION['stud'] = [];
    }

    if (!empty($_POST['first']) && !empty($_POST['last'])) {
        $form = "SId " .$_SESSION['id_stud'];
        $_SESSION['stud'][$form]['first'] = $_POST['first'];
        $_SESSION['stud'][$form]['last'] = $_POST['last'];
        
    }
    }

print_r($_SESSION['stud']);
?>

<!doctype html>
<html>

<head>
    <title>Student Input</title>
</head>

<body>
    <form action="student_input.php" method="post">
      <br>  <label>Last Name: </label>
        <input type="text" name="last"><br><br>
        <label>First Name: </label>
        <input type="text" name="first"><br><br>
        <input type="submit" name="add" value="Add Student">
        <input type="submit" name="main" value="Main Menu">

    </form>
    <?php
    if(isset($_POST['main'])){
        header("location:attendance_sheet.php");
    }
    ?>

</body>

</html>