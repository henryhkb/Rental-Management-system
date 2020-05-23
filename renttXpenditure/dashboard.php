<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <title>Dashboard</title>
</head>
<body>
<?php require_once 'housedml.php'?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="navbar-header">
            <a class="navbar-brand" href="dashboard.php">Rental Expenditure</a>
            </div>    

       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidemenu" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="sidemenu">
        
       </div>
     </nav>

<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="list-group list-group-flush navbar-collapse" id="sidemenu">
        <a href="dashboard.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="houses_view.php" class="list-group-item list-group-item-action bg-light">Houses</a>
        <a href="people.php" class="list-group-item list-group-item-action bg-light">Tenants</a>
        <a href="investview.php" class="list-group-item list-group-item-action bg-light">Investments</a>
        <a href="invoices_view.php" class="list-group-item list-group-item-action bg-light">Invoices</a>
        <a href="payments_view.php" class="list-group-item list-group-item-action bg-light">Payments</a>
        <a href="rentExpenditure_view.php" class="list-group-item list-group-item-action bg-light">Rent Expenditure</a>
        <a href="buildingExpenditure_view.php" class="list-group-item list-group-item-action bg-light">Building Expenditure</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <?php include("interface.php");?>
                </div>
            </div>
      </div>

    <!-- /#page-content-wrapper -->
  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>