<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House View</title>
    <link rel="stylesheet" href="house.css" type="text/css">

<style>

#header{
    text-align:center;
}

.form-container{
    background: rgba(199, 187, 187, 0.808);
    padding: 30px;
    border-radius: 10px;
    box-shadow: 5px 5px 20px 5px #000;
}

#header h3{
    text-align: center;
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

<?php require_once 'housedml.php';?>
    <div class="container">
    <section class="row justify-content-center">
        <section>  
        <!--Creating a form for the house view--> 
            <div class="jumbotron-fluid"><br>
            <form class="form-container" method="POST">
            <input type="hidden" name="id" value="<?php echo $id;?>">
                <header id="header"><h3><i class="fa fa-home"></i>HOUSES</h3></header>

                <div class="form-group">
                    <label for="housenumber">House Number</label>
                    <input type="textarea" class="form-control"  name="housenumber" value="<?php echo $housenumber;?>"  placeholder="Enter Housenumber" required='required'>
                </div>

                <div class="form-group">
                    <label for="housenumber">Features</label>
                    <textarea cols="10" rows="5" class="form-control" name="features" placeholder="Enter Features" required='required'><?php echo $features;?></textarea>
                </div>
                
                <div class="form-group">
                    <label for="RentAmount">Amount</label>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" name="cedi" value="<?php echo $cedi;?>"  placeholder="Cedis GH₵" required="required">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="dollar" value="<?php echo $dollar;?>" placeholder="Dollars $" required="required">
                        </div>
                </div>
                </div>
               
                <div class="form-group">
                    <label for="House Status">House Status</label>
                     <select name="status" value="<?php echo $status; ?>" class="form-control" id="houseStatus">
                         <option>vaccant</option>
                         <option>occupied</option>
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
                        <button type="submit" name="save" class="btn btn-primary">SUBMIT</button>
                       <?php endif;?>    
                 </div>
            </form>
            </div>
        <!--Ending form for the house view-->
        </section>
    </section>
    </div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

