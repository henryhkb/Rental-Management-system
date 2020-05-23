<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payments View</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <style>
    .form-container{
    background: rgba(199, 187, 187, 0.808);
    padding: 30px;
    border-radius: 10px;
    box-shadow: 5px 5px 20px 5px #000;
}
    </style>
    <script>
    $function(){
        $('#names').change(function(){
            var displayProfile=$('#names option:selected').text();
            $('#housenumber').val(displayProfile);
        });
    }

    </script>
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
          <a class="dropdown-item" href="investview.php"><i class="fa fa-money"></i> INVESTMENTS</a>
      </li>
    </ul>
  </div>
</nav>

<?php require_once 'paymentsdml.php';?>
<div class="jumbotron-fluid">
    <div class="container">
    <section class="row justify-content-center container">  
        <!--Creating a form for the house view-->   
            <form class="form-container mt-4" method="POST">
            <input type="hidden" name="id" value="<?php echo $id;?>">
                <header class="text-center"><h3><i class="fa fa-home"></i>PAYMENTS</h3></header>

                <div class="form-group">
                    <label for="Fullname" class="sr-only">FULLNAME</label><br>
                   <select name="fullname" id="tenants" class="custom-select custom-select-lg dropdown-item"  value="<?php echo $fullname;?>">
                   <?php
                   while($rows = $retrieve->fetch_assoc()){
                       $fullname = $rows['fullname'];
                       echo "<option value='$fullname'>$fullname</option>";
                   }
                   ?>
                   </select>
                </div>

                <div class="form-group">
                    <label for="housenumber">housenumber</label>
                    <input type="text" class="form-control" name="housenumber" id="housenumber" value="<?php echo $housenumber;?>" required='required'>
                </div>
                
                <div class="form-group">
                    <label for="RentAmount">Expected Amount</label>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" id="cedi" name="cedi" value="<?php echo $cedi;?>"  placeholder="Cedis GH₵" required="required">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="dollar" name="dollar" value="<?php echo $dollar;?>" placeholder="Dollars $" required="required">
                        </div>
                </div>
                </div>
               
                <div class="form-group">
                    <label for="Paid Amount">Paid Amount</label>
                    <input type="text" class="form-control" name="paidamount" value="<?php echo $paidamount;?>">
                 </div>

                <div class="form-group">
                    <label for="Balance">Balance</label>
                    <input type="text" class="form-control" name="balance" value="<?php echo $balance;?>">
                 </div>

                <div class="form-group">
                    <label for="Payment Date">Date</label>
                    <input type="date" class="form-control" name="date" value="<?php echo $date;?>">
                 </div>

                 <div class="form-group text-center">
                        <a href="dashboard.php" name="submit" class="btn btn-primary">GO BACK</a>
                       
                       <?php
                       if($update == true):
                       ?>
                        <input type="submit" class="btn btn-info" name="update" value="UPDATE"/>
                       <?php
                       else:
                       ?>
                        <button type="submit" name="save" class="btn btn-primary">SUBMIT</button>
                       <?php endif; ?>    
                 </div>

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

