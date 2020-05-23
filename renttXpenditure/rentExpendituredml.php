<?php
//Starting session
session_start();
//Creating database connection
$mysqli = new mysqli('localhost','root','','rentexpenditure') or die(mysqli_error($mysqli));
//Running database query.
$result = $mysqli->query("SELECT * FROM rentexpenditure") or die($mysqli->error);


//Declaring input variables.
$update= false;
$id = 0;
$expenseReason = '';
$expenseAmount = '';
$date = '';

if(isset($_POST['submit'])){
//declaring variables and assigning POST to them.
$expenseReason = $_POST['expenseReason'];
$expenseAmount = $_POST['expenseAmount'];
$date = $_POST['date'];
//Query for Inserting records into the database.
$mysqli->query("INSERT INTO rentexpenditure(expenseReason, expenseAmount, date)VALUES('$expenseReason','$expenseAmount','$date')");
      $_SESSION['message'] = 'Record has been saved successfully';
      $_SESSION['msg_type'] = 'success';
      header('location:rentExpenditureTable.php');
}


//Code for when the delete button is clicked
if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  $mysqli->query("DELETE FROM rentexpenditure WHERE id=$id")or die($mysqli->error());
  $_SESSION['message'] = "Record has been deleted!";
  $_SESSION['msg_type'] = 'danger';
  header('location: rentExpenditureTable.php');
}


//Code for when the edit button is clicked
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update= true;
    $result = $mysqli->query("SELECT * FROM rentexpenditure WHERE id=$id")or die($mysqli->error());
    if (count($result)==1){
        $row = $result->fetch_array();
        $expenseReason = $row['expenseReason'];
        $expenseAmount = $row['expenseAmount'];
        $date = $row['date'];
    }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $expenseReason = $_POST['expenseReason'];
    $expenseAmount = $_POST['expenseAmount'];
    $date = $_POST['date'];
    $mysqli->query("UPDATE rentexpenditure SET expenseReason='$expenseReason', expenseAmount='$expenseAmount', date='$date' WHERE id = $id")or die($mysqli->error);
    $_SESSION['message'] = "Record successfully updated";
    $_SESSION['msg_type'] = 'success';
    header('location: rentexpenditureTable.php');
}

?>
