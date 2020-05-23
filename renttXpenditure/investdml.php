<?php
//Starting session
session_start();
//Creating database connection
$mysqli = new mysqli('localhost','root','','rentexpenditure') or die(mysqli_error($mysqli));
//Running database query.
$result = $mysqli->query("SELECT * FROM investments") or die($mysqli->error);


//Declaring input variables.
$update= false;
$id = 0;
$investmenttype = '';
$date = '';
$cedi = '';
$dollar = '';

if(isset($_POST['submit'])){
//declaring variables and assigning POST to them.
$investmenttype = $_POST['investmenttype'];
$date = $_POST['date'];
$cedi = $_POST['cedi'];
$dollar = $_POST['dollar'];
//Query for Inserting records into the database.
$mysqli->query("INSERT INTO investments(investmenttype, date, cedi, dollar)VALUES('$investmenttype','$date','$cedi','$dollar')");
      $_SESSION['message'] = 'Record has been saved successfully';
      $_SESSION['msg_type'] = 'success';
      header('location:investTable.php');
}


//Code for when the delete button is clicked
if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  $mysqli->query("DELETE FROM investments WHERE id=$id")or die($mysqli->error());
  $_SESSION['message'] = "Record has been deleted!";
  $_SESSION['msg_type'] = 'danger';
  header('location: investTable.php');
}


//Code for when the edit button is clicked
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update= true;
    $result = $mysqli->query("SELECT * FROM investments WHERE id=$id")or die($mysqli->error());
    if ($result){
        $row = $result->fetch_array();
        $investmenttype = $row['investmenttype'];
        $date = $row['date'];
        $cedi = $row['cedi'];
        $dollar = $row['dollar'];
    }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $investmenttype = $_POST['investmenttype'];
    $date = $_POST['date'];
    $cedi = $_POST['cedi'];
    $dollar = $_POST['dollar'];
    $mysqli->query("UPDATE investments SET investmenttype='$investmenttype', date='$date', cedi='$cedi', dollar='$dollar' WHERE id = $id")or die($mysqli->error);
    $_SESSION['message'] = "Record successfully updated";
    $_SESSION['msg_type'] = 'success';
    header('location: investTable.php');
}

//Code for when the occupied button is clicked.


?>
