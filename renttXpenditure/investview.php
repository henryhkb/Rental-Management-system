<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>BUILDING EXPENDITURE VIEW</title>
   <style>
    .form-container{
    background: rgba(199, 187, 187, 0.808);
    padding: 50px;
    margin: 10px;
    border-radius: 10px;
    box-shadow: 5px 5px 20px 5px #000;
}
.dropdown-menu a i{
  font-size: 20px;
  color: blue;
}
   </style>
</head>
<body>
    <?php require_once 'investdml.php';?>
    <nav class="navbar navbar-expand navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="dashboard.php"><i class="fa fa-cog" aria-hidden="true"></i>
 GO TO DASHBOARD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          NAVIGATION
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="houses_view.php"><i class="fa fa-home"></i> HOUSES</a>
          <a class="dropdown-item" href="people.php"><i class="fa fa-users"></i> TENANTS</a>
          <a class="dropdown-item" href="invoices_view.php"><i class="fa fa-address-card"></i> INVOICES</a>
          <a class="dropdown-item" href="payments_view.php"><i class="fa fa-money"></i> PAYMENTS</a>
          <a class="dropdown-item" href="buildingExpenditure_view.php"><i class="fa fa-building-o"></i> BUILDING EXPENDITURE</a>
          <a class="dropdown-item" href="rentExpenditure_view.php"><i class="fa fa-home"></i> RENT EXPENDITURE</a>
      </li>
    </ul>
  </div>
</nav>

    <div class="container-fluid">
    <section class="row justify-content-center">
        <section>  
        <!--Creating a form for the house view-->    
            <form class="form-container mt-4" method="POST">
            <input type="hidden" name='id' value='<?php echo $id;?>'>
                <header class="text-center"><h4> <i class="fa fa-building-o" aria-hidden="true"></i>  INVESTMENTS</header></header>
                <br>
                <div class="form-group">
                    <label for="House Status">Type of Investment</label>
                     <select name="investmenttype" class="form-control custom-select custom-select-lg" id="houseStatus">
                         <option>Treasury Bill</option>
                         <option>Stocks</option>
                         <option>Retirement</option>
                         <option>Property</option>
                     </select>
                 </div>
                <div class="form-group">
                    <label for="ExpenseAmount">Enter Date</label>
                    <input type="date" class="form-control" name="date" placeholder="Enter expense Amount" value="<?php echo $date;?>" required="required">
                </div>
                
                <div class="form-group">
                    <label for="RentAmount">Investment Amount</label>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control"  name="cedi" value="<?php echo $cedi;?>" placeholder="Cedis GH₵">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control"  name="dollar" value="<?php echo $dollar;?>" placeholder="Dollars $">
                        </div>
                </div>
               

                <br>
                <div class="form-group text-center">
                        <a href="dashboard.php" type="button"  class="btn btn-primary">GO BACK</a>
                        <?php
                       if($update == true):
                       ?>
                        <button type="submit" class="btn btn-info" name="update">UPDATE</button>
                       <?php
                       else:
                       ?>
                        <input name="submit" type="submit" value="SUBMIT"  class="btn btn-primary">
                       <?php endif; ?>       
                 </div>
                   
            </form>
        <!--Ending form for the house view-->
        </section>
    </section>
    </div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>