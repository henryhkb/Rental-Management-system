<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Expenditure</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css">
    <style>
    .count{
        font-size: 38px;
        font-style: oblique;
        
    }
    </style>
</head>
<body>
    
    <?php require_once 'housedml.php'?>
    <nav>
        
    </nav>
    <div class="container-fluid">
        <div class="row">
         <!--bootstrap card for Houses-->   
        <div class="col-md-3">
                <div class="card">
                    <div class="card-heading">
                    <div class="card-body bg-primary">
                    <i class="fa fa-home"></i>
                    <h4>HOUSES</h4>
                    <?php 
                    require 'db_connect.php';
                    $query="SELECT id FROM houses ORDER BY id";
                    $query_run = mysqli_query($connection, $query);
                    $row = mysqli_num_rows($query_run);
                    echo '<h1>'.$row.'</h1>';
                    ?>
                    </div>
                    </div>
                    <div class="card-footer">
                        <a href="houseTable.php">View details  <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>    
            </div>
        <!--End card for houses--->

        <!--Start card for Tenants-->
        <div class="col-md-3">
                <div class="card">
                    <div class="card-heading">
                    <div class="card-body bg-danger">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <h4>TENANTS</h4>
                    <?php 
                    require 'db_connect.php';
                    $query="SELECT id FROM tenants ORDER BY id";
                    $query_run = mysqli_query($connection, $query);
                    $row = mysqli_num_rows($query_run);
                    echo '<h1>'.$row.'</h1>';
                    ?>
                    </div>
                    </div>
                    <div class="card-footer">
                        <a href="peopleTable.php">View details  <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>    
            </div>
        <!--End card for Tenants-->

         <!--Start card for Invoices-->
         <div class="col-md-3">
                <div class="card">
                    <div class="card-heading">
                    <div class="card-body bg-success">
                    <i class="fa fa-address-card" aria-hidden="true"></i>
                    <h4>INVOICES</h4>
                    <?php 
                    require 'db_connect.php';
                    $query="SELECT id FROM invoice ORDER BY id";
                    $query_run = mysqli_query($connection, $query);
                    $row = mysqli_num_rows($query_run);
                    echo '<h1>'.$row.'</h1>';
                    ?>
                    </div>
                    </div>
                    <div class="card-footer">
                        <a href="invoicesTable.php">View details  <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>    
            </div>
        <!--End card for Invoices-->

         <!--Start card for Payments-->
         <div class="col-md-3">
                <div class="card">
                    <div class="card-heading">
                    <div class="card-body bg-warning">
                    <i class="fa fa-money" aria-hidden="true"></i>
                    <h4>PAYMENTS</h4>
                    <?php 
                    require 'db_connect.php';
                    $query="SELECT id FROM payments ORDER BY id";
                    $query_run = mysqli_query($connection, $query);
                    $row = mysqli_num_rows($query_run);
                    echo '<h1>'.$row.'</h1>';
                    ?>
                    </div>
                    </div>
                    <div class="card-footer">
                        <a href="paymentsTable.php">View details  <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>    
            </div>
        <!--End card for Payments-->
        </div> 

        <div class="row">
         <!--Start card for building-Expenditure-->
         <div class="col-md-3">
                <div class="card">
                    <div class="card-heading">
                    <div class="card-body bg-warning">
                    <i class="fa fa-building-o" aria-hidden="true"></i>
                    <h4>BUILDING EXPENSE</h4>
                    <?php 
                    require 'db_connect.php';
                    $query="SELECT id FROM buildingexpenditure ORDER BY id";
                    $query_run = mysqli_query($connection, $query);
                    $row = mysqli_num_rows($query_run);
                    echo '<h1>'.$row.'</h1>';
                    ?>
                    </div>
                    </div>
                    <div class="card-footer">
                        <a href="buildingExpenditureTable.php">View details  <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>    
            </div>
        <!--End card for building-expenditure-->

         <!--Start card for RENT EXPENDITURE-->
         <div class="col-md-3">
                <div class="card">
                    <div class="card-heading">
                    <div class="card-body bg-success">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <h4>RENT EXPENDITURE</h4>
                    <?php 
                    require 'db_connect.php';
                    $query="SELECT id FROM rentexpenditure ORDER BY id";
                    $query_run = mysqli_query($connection, $query);
                    $row = mysqli_num_rows($query_run);
                    echo '<h1>'.$row.'</h1>';
                    ?>
                    </div>
                    </div>
                    <div class="card-footer">
                        <a href="rentExpenditureTable.php">View details  <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>    
            </div>
        <!--End card for RENT EXPENDITURE-->

         <!--Start card for INVESTMENTS-->
         <div class="col-md-3">
                <div class="card">
                    <div class="card-heading">
                    <div class="card-body bg-danger">
                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                    <h4>INVESTMENTS</h4>
                    <?php 
                    require 'db_connect.php';
                    $query="SELECT id FROM investments ORDER BY id";
                    $query_run = mysqli_query($connection, $query);
                    $row = mysqli_num_rows($query_run);
                    echo '<h1>'.$row.'</h1>';
                    ?>
                    </div>
                    </div>
                    <div class="card-footer">
                        <a href="investTable.php">View details  <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>    
            </div>

      
         <div class="col-md-3">
                <div class="card">
                    <div class="card-heading">
                    <div class="card-body bg-info">
                    <div class="count">
                    <?php 
                    vaccanthouses('houses');
                    ?>
                    </div>
                    <h4><strong>VACCANT HOUSES</strong></h4>
                    </div>
                    </div>
                </div>
                 
                <div class="card">
                    <div class="card-heading">
                    <div class="card-body bg-secondary">
                    <div class="count">
                    <?php 
                        occupiedhouses('houses');
                    ?>
                    </div>
                    <h4><strong>OCCUPIED HOUSES</strong></h4>
                    </div>
                    </div>
                </div>
        </div>    
       
        <!--End card for INVESTMENTS-->
       </div>

       </div>

        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>