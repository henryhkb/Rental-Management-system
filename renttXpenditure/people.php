<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenant View</title>
   <style>
.form-container{
    background: rgba(199, 187, 187, 0.808);
    padding: 50px;
    border-radius: 15px;
    margin: 5px;
    box-shadow: 5px 5px 20px 5px #000;    
}

#header{
    text-align:center;
}

.dropdown-menu a i{
  font-size: 20px;
  color: blue;
}
   </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand" href="dashboard.php"><i class="fa fa-cog" aria-hidden="true"></i>
 GO TO DASHBOARD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          NAVIGATE TO PANES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="houses_view.php"><i class="fa fa-home"></i> HOUSES</a>
          <a class="dropdown-item" href="people.php"><i class="fa fa-users"></i> TENANTS</a>
          <a class="dropdown-item" href="invoices_view.php"><i class="fa fa-address-card"></i> INVOICES</a>
          <a class="dropdown-item" href="payments_view.php"><i class="fa fa-money"></i> PAYMENTS</a>
          <a class="dropdown-item" href="buildingExpenditure_view.php"><i class="fa fa-building-o"></i> BUILDING EXPENDITURE</a>
          <a class="dropdown-item" href="rentExpenditure_view.php"><i class="fa fa-home"></i> RENT EXPENDITURE</a>
          <a class="dropdown-item" href="investview.php"><i class="fa fa-home"></i> INVESTMENT</a>
      </li>
    </ul>
  </div>
</nav>
    <?php require_once 'peopledml.php';?>
    <div class="container-fluid">
    <section class="row justify-content-center">
        <!--Creating a form for the house view-->    
            <form class="form-container mt-3" method="POST">
                <header id="header"><h3><i class="fa fa-users" aria-hidden="true"></i> TENANTS</h3></header>
                <div class="form-group">
                    <label for="Fullname">Fullname</label>
                    <input type="text" class="form-control" value="<?php echo $fullname;?>"  name="fullname" placeholder="Enter Fullname" required="required">
                </div>

                <div class="form-group">
                    <label for="Fullname">Choose Your Housenumber</label><br>
                   <select name="house" class="form-control custom-select custom-select-lg" value="<?php echo $house;?>">
                   <?php
                   while($rows = $retrieve->fetch_assoc()){
                       $housenumber = $rows['housenumber'];
                       echo "<option value='$housenumber'>$housenumber</option>";
                   }
                   ?>
                   </select>
                </div>

                <div class="form-group">
                    <label for="Gender">Enter Gender</label>
                    <select class="form-control" name="gender" value="<?php echo $gender;?>">
                         <option>MALE</option>
                         <option>FEMALE</option>
                     </select>
                </div>
                
                <div class="row">
                <div class="col">
                <div class="form-group">
                    <input type="text" class="form-control" value="<?php echo $national_ID;?>"  name="national_ID" placeholder="Enter National ID" required="required">
                </div>
                </div>

                <div class="col">
                <div class="form-group">
                    <input type="text" class="form-control" value="<?php echo $phonenumber;?>"  name="phonenumber" placeholder="Enter phoneNumber" required="required">
                </div>
                </div>


                </div>

                <div class="form-group">
                    <label for="Registration Date">Registration Date</label>
                    <input type="Date" class="form-control" value="<?php echo $registrationDate;?>"  name="registrationDate" placeholder="Enter Registration Date" required="required">
                </div>

                <div class="form-group">
                    <label for="fileUpload">Agreement File</label>
                    <input type="file" class="form-control-file" name="fileUpload" value="<?php echo $fileUpload;?>" required="required">
                </div>

                <div class="form-group">
                    <label for="Gender">Enter Tenant Status</label>
                    <select name="status" value="<?php echo $status;?>" class="form-control custom-select custom-select-lg">
                         <option>Tenant in</option>
                         <option>Tenant out</option>
                     </select>
                </div>

                <div class="form-group text-center">
                        <a href="dashboard.php" name="submit" class="btn btn-primary">GO BACK</a>
                       
                       <?php
                       if($update == true):
                       ?>
                        <button type="submit" class="btn btn-info" name="update">UPDATE</button>
                       <?php
                       else:
                       ?>
                        <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
                       <?php endif;?>    
                 </div>
            </form>
        <!--Ending form for the house view-->
    </section>
    </div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>