<?php
//Beginning of php session.
session_start();

//Connecting the payments_view to the database.
$mysqli = new mysqli('localhost', 'root', '','rentexpenditure') or die(mysqli_error($mysqli));

//Selecting all the records from the database table payments;
$result = $mysqli->query("SELECT * FROM payments")or die($mysqli->error);

//Retrieving table records from database as a dropdown list
$retrieve = $mysqli->query("SELECT fullname FROM tenants");


//Declaring or Initializing of varialbes
$id = 0;
$update = false;
$fullname = '';
$housenumber = '';
$cedi = '';
$dollar = '';
$paidamount= '';
$balance = '';
$date = '';

//Selecting dropdown and displaying their values in the textbox


//Inserting data into the database using the save button.
if(isset($_POST['save'])){
    $fullname = $_POST['fullname'];
    $housenumber = $_POST['housenumber'];
    $cedi = $_POST['cedi'];
    $dollar = $_POST['dollar'];  
    $paidamount = $_POST['paidamount'];
    $balance = $_POST['balance'];
    $date = $_POST['date'];
    
    $mysqli->query("INSERT INTO payments(fullname,housenumber,cedi,dollar,paidamount,balance,date)VALUES('$fullname','$housenumber','$cedi','$dollar','$paidamount','$balance','$date')");
    $_SESSION['message'] = 'Record has been saved';
    $_SESSION['msg_type'] = 'success';
    header('location:paymentsTable.php');
}

//Deleting a record from the database table house
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM payments WHERE id=$id");
    $_SESSION['message'] = "Record has been deleted";
    $_SESSION['msg_type'] = 'danger';
    header('location:paymentsTable.php');
}

//Checking up on the edit button 
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update= true;
    $result = $mysqli->query("SELECT * FROM payments WHERE id='$id'") or die($mysqli->error());

//Fetching the particular record from the database.
if($result){
    $row = $result->fetch_array();
    $row = $result->fetch_array();
    $fullname = $row['fullname'];
    $housenumber = $row['housenumber'];
    $cedi = $row['cedi'];
    $dollar = $row['dollar'];
    $paidamount = $row['paidamount'];
    $balance = $row['balance'];
    $date  = $row['date'];
   }

//Code for when the update button is clicked
   if(isset($_POST['update'])){
    $id = $_POST['id'];
    $fullname = $_POST['fullname'];
    $housenumber = $_POST['housenumber'];
    $cedi = $_POST['cedi'];
    $dollar = $_POST['dollar'];
    $paidamount = $_POST['paidamount'];
    $balance = $_POST['balance'];
    $date = $_POST['date'];

//MYSQL query for the UPDATE
    $mysqli->query("UPDATE payments SET fullname = '$fullname',housenumber='$housenumber',cedi='$cedi',dollar='$dollar',paidamount='$paidamount',balance='$balance',date='$date' WHERE id = $id")or die($mysqli->error);
    $_SESSION['message'] = 'Record has been updated!';
    $_SESSION['msg_Type'] = 'success';
//Redirecting user the houseTable.php
    header('location:paymentsTable.php');
    }
}







?>