<?php
//Beginning of php session.
session_start();

//Connecting the houses_view to the database.
$mysqli = new mysqli('localhost', 'root', '','rentexpenditure') or die(mysqli_error($mysqli));

//Selecting all the records from the database table houses;
$result = $mysqli->query("SELECT * FROM houses")or die($mysqli->error);

//Counting the number of vaccant records in database.
function vaccanthouses($houses){
    include("db_connect.php");
    $sql="SELECT * FROM $houses WHERE status='vaccant' ORDER BY id";
    if ($result=mysqli_query($connection,$sql)) {
        $rowcount=mysqli_num_rows($result);
        echo $rowcount;
    }
    mysqli_close($connection);
}

//Counting the number of occupied houses in database.
function occupiedhouses($houses){
    include("db_connect.php");
    $sql="SELECT * FROM $houses WHERE status='occupied' ORDER BY id";
    if ($result=mysqli_query($connection,$sql)) {
        $rowcount=mysqli_num_rows($result);
        echo $rowcount;
    }
    mysqli_close($connection);
}

//Declaring or Initializing of varialbes
$id = 0;
$update = false;
$housenumber = '';
$features = '';
$cedi = '';
$dollar = '';
$status = '';


//Inserting data into the database using the save button.
if(isset($_POST['save'])){
    $housenumber = $_POST['housenumber'];
    $features = $_POST['features'];
    $cedi = $_POST['cedi'];
    $dollar = $_POST['dollar'];  
    $status = $_POST['status']; 
    
    $mysqli->query("INSERT INTO houses(housenumber,features,cedi,dollar,status)VALUES('$housenumber','$features','$cedi','$dollar','$status')");
    $_SESSION['message'] = 'Record has been saved';
    $_SESSION['msg_type'] = 'success';
    header('location:houseTable.php');
}

//Deleting a record from the database table house
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM houses WHERE id=$id");
    $_SESSION['message'] = "Record has been deleted";
    $_SESSION['msg_type'] = 'danger';
    header('location:houseTable.php');
}

//Checking up on the edit button 
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update= true;
    $result = $mysqli->query("SELECT * FROM houses WHERE id='$id'") or die($mysqli->error());

//Fetching the particular record from the database.
if($result){
    $row = $result->fetch_array();
    $housenumber = $row['housenumber'];
    $features = $row['features'];
    $cedi = $row['cedi'];
    $dollar = $row['dollar'];
    $status = $row['status'];
   }

//Code for when the update button is clicked
   if(isset($_POST['update'])){
    $id = $_POST['id'];
    $housenumber = $_POST['housenumber'];
    $features = $_POST['features'];
    $cedi = $_POST['cedi'];
    $dollar = $_POST['dollar'];
    $status = $_POST['status'];

//MYSQL query for the UPDATE
    $mysqli->query("UPDATE houses SET housenumber='$housenumber',features='$features',cedi='$cedi',dollar='$dollar',status='$status'WHERE id = $id")or die($mysqli->error);
    $_SESSION['message'] = 'Record has been updated!';
    $_SESSION['msg_Type'] = 'success';
//Redirecting user the houseTable.php
    header('location:houseTable.php');
    }
}




?>