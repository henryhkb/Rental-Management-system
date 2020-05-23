<?php
session_start();

//Creating the database connection.
 $mysqli = new mysqli("localhost", 'root	', '', 'rentexpenditure') or die(mysqli_error($mysqli));

 //Running Database query.
 $result = $mysqli->query("SELECT * FROM tenants") or die($mysqli->error);
 
 //Retrieving table records from database as a dropdown list
 $retrieve = $mysqli->query("SELECT housenumber FROM houses");

 $update= false;
 $id = 0;
 $fullname = '';
 $house = '';
 $gender = '';
 $national_ID = '';
 $phonenumber = '';
 $registrationDate = '';
 $fileUpdate = '';
 $status = '';
 $exitDate = '';

//Function for the submit button.
if(isset($_POST['submit'])){
      $fullname = $_POST['fullname'];
      $house = $_POST['house'];
      $gender = $_POST['gender'];
      $national_ID = $_POST['national_ID'];
      $phonenumber = $_POST['phonenumber'];
      $registrationDate = $_POST['registrationDate'];
      $fileUpload = $_POST['fileUpload'];
      $status = $_POST['status'];
      $mysqli->query("INSERT INTO tenants(fullname,house,gender,national_ID,phonenumber,registrationDate,fileUpload,status)VALUES('$fullname','$house','$gender','$national_ID','$phonenumber','$registrationDate','$fileUpload','$status')");

      header('location:peopleTable.php');
      $_SESSION['message'] = 'Record has been saved successfully';
      $_SESSION['msg_type'] = 'success';
}

//Function for the delete button
if(isset($_GET['delete'])){
      $id = $_GET['delete'];
      $mysqli->query("DELETE FROM tenants WHERE id = $id")or die(mysqli_error($mysqli));
      $_SESSION['message'] = "Record has been deleted!!";
      $_SESSION['msg_type'] = "danger";

      
}

//Checking up on the edit button 
if(isset($_GET['edit'])){
      $id = $_GET['edit'];
      $update= true;
      $result = $mysqli->query("SELECT * FROM tenants WHERE id=$id") or die($mysqli->error());
  
  //Fetching the particular record from the database.
  if($result){
      $row = $result->fetch_array();
      $fullname = $row['fullname'];
      $house = $row['house'];
      $gender = $row['gender'];
      $national_ID = $row['national_ID'];
      $phonenumber = $row['phonenumber'];
      $registrationDate = $row['registrationDate'];
      $fileUpload = $row['fileUpload'];
      $status = $row['status'];
     }
  
  //Code for when the update button is clicked
     if(isset($_POST['update'])){
      $id = $_POST['id'];
      $fullname = $_POST['fullname'];
      $house = $_POST['house'];
      $gender = $_POST['gender'];
      $national_ID = $_POST['national_ID'];
      $phonenumber = $_POST['phonenumber'];
      $registrationDate = $_POST['registrationDate'];
      $fileUpload = $_POST['fileUpload'];
      $status = $_POST['status'];
  
  //MYSQL query for the UPDATE
  $mysqli->query("UPDATE tenants SET fullname='$fullname', house='$house', gender='$gender', national_ID='$national_ID', phonenumber='$phonenumber', registrationDate='$registrationDate', fileUpload='$fileUpload', status='$status' WHERE id=$id")or die(mysqli_error($mysqli));    
  //Redirecting user the houseTable.php
      header('location:peopleTable.php');
      $_SESSION['message'] = 'Record has been updated!';
      $_SESSION['msg_Type'] = 'success';
      }
  }
  
  


?>