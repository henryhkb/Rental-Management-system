<?php
//Beginning of php session.
session_start();

//Connecting the invoice_view to the database.
$mysqli = new mysqli('localhost', 'root', '','rentexpenditure') or die(mysqli_error($mysqli));

//Selecting all the records from the database table invoice;
$result = $mysqli->query("SELECT * FROM invoice")or die($mysqli->error);

//Retrieving table records from database as a dropdown list
$retrieve = $mysqli->query("SELECT fullname FROM tenants");


//Declaring or Initializing of varialbes
$id = 0;
$update = false;
$fullname = '';
$housenumber = '';
$phonenumber = '';
$cedi = '';
$dollar = '';
$comments= '';
$particulars = '';


//Inserting data into the database using the save button.
if(isset($_POST['save'])){
    $fullname = $_POST['fullname'];
    $housenumber = $_POST['housenumber'];
    $phonenumber = $_POST['phonenumber'];
    $cedi = $_POST['cedi'];
    $dollar = $_POST['dollar'];  
    $comments = $_POST['comments'];
    $particulars = $_POST['particulars'];
    
    $mysqli->query("INSERT INTO invoice(fullname,housenumber,phonenumber,cedi,dollar,comments,particulars)VALUES('$fullname','$housenumber','$phonenumber','$cedi','$dollar','$comments','$particulars')");
    $_SESSION['message'] = 'Record has been saved';
    $_SESSION['msg_type'] = 'success';
    header('location:invoiceTable.php');
}

//Deleting a record from the database table house
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM invoice WHERE id=$id");
    $_SESSION['message'] = "Record has been deleted";
    $_SESSION['msg_type'] = 'danger';
    header('location:invoiceTable.php');
}

//Checking up on the edit button 
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update= true;
    $result = $mysqli->query("SELECT * FROM invoice WHERE id='$id'") or die($mysqli->error());

//Fetching the particular record from the database.
if($result){
    $row = $result->fetch_array();
    $fullname = $row['fullname'];
    $housenumber = $row['housenumber'];
    $phonenumber = $row['phonenumber'];
    $cedi = $row['cedi'];
    $dollar = $row['dollar'];
    $comments = $row['comments'];
    $particulars = $row['particulars'];
   }

//Code for when the update button is clicked
   if(isset($_POST['update'])){
    $id = $_POST['id'];
    $fullname = $_POST['fullname'];
    $housenumber = $_POST['housenumber'];
    $phonenumber = $_POST['phonenumber'];
    $cedi = $_POST['cedi'];
    $dollar = $_POST['dollar'];
    $comments = $_POST['comments'];
    $particulars = $_POST['particulars'];

//MYSQL query for the UPDATE
    $mysqli->query("UPDATE invoice SET fullname = '$fullname',housenumber='$housenumber',phonenumber='$phonenumber', cedi='$cedi',dollar='$dollar',comments='$comments',particulars='$particulars' WHERE id = $id")or die($mysqli->error);
    $_SESSION['message'] = 'Record has been updated!';
    $_SESSION['msg_Type'] = 'success';
//Redirecting user the houseTable.php
    header('location:invoiceTable.php');
    }
}







?>