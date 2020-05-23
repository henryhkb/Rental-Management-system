<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAYMENTS TABLE</title>
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"  rel="stylesheet" type="text/css"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<script src="js/bootstrap.min.js"></script>
<body>
<?php require_once 'invoicedml.php'; ?>
<?php
if (isset($_SESSION['message'])):
?>
<div class="alert alert-<?=$_SESSION['msg_type']?>">

<?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
?>
</div>
<?php endif; ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-info">
<a class="navbar-brand" href="payments_view.php"><h5><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> PAYMENTS TABLE</h5></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link btn btn-success btn-sm" href="invoices_view.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> ADD NEW <i class="fa fa-home" aria-hidden="true"></i></a>
            </li>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          JUMP TO
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="investTable.php"><i class="fa fa-table" aria-hidden="true"></i> INVESTMENT TABLE <i class="fa fa-briefcase" aria-hidden="true"></i></a>
          <a class="dropdown-item" href="investTable.php"><i class="fa fa-table" aria-hidden="true"></i> PAYMENT TABLE <i class="fa fa-money" aria-hidden="true"></i></a>
          <a class="dropdown-item" href="invoicesTable.php"><i class="fa fa-table" aria-hidden="true"></i> INVOICES TABLE <i class="fa fa-address-card" aria-hidden="true"></i></a>
          <a class="dropdown-item" href="peopleTable.php"><i class="fa fa-table" aria-hidden="true"></i> TENANTS TABLE <i class="fa fa-users" aria-hidden="true"></i></a>
          <a class="dropdown-item" href="rentExpenditureTable.php"><i class="fa fa-table" aria-hidden="true"></i> RENT EXPENSE TABLE  <i class="fa fa-home" aria-hidden="true"></i></a>
          <a class="dropdown-item" href="buildingExpenditureTable.php"><i class="fa fa-table" aria-hidden="true"></i> BUILDING EXPENSE TABLE <i class="fa fa-building-o" aria-hidden="true"></i></a>
        </div>
      </li>
        </ul>
        </div>
        
</nav>
<div class="container-fluid justify-content-center table-responsive">
        <table id="myTable" class="table table-striped" cellspacing="2">
            <thead class="thead-dark">
                <tr class="rowspan=2">
                    <th scope="col">FULL NAME</th>
                    <th scope="col">HOUSE NUMBER</th>
                    <th scope="col">PHONE NUMBER</th>
                    <th scope="col">CEDI (GH₵)</th>
                    <th scope="col">DOLLAR ($)</th>
                    <th scope="col">COMMENTS</th>
                    <th scope="col">PARTICULARS</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
   <?php
   while($row = $result->fetch_assoc()):
   ?>
        <tr> 
                <td><?php echo $row ['fullname'];?></td>
                <td><?php echo $row ['housenumber'];?></td>
                <td><?php echo $row ['phonenumber'];?></td>
                <td><?php echo $row ['cedi'];?></td>
                <td><?php echo $row ['dollar'];?></td>
                <td><?php echo $row ['comments'];?></td>
                <td><?php echo $row ['particulars'];?></td>
                <td>
                    <a href="invoices_view.php?edit=<?php echo $row['id'];?>" class="btn btn-info">EDIT</a>
                    <a href="invoicesTable.php?delete=<?php echo $row['id'];?>" class="btn btn-danger">DELETE</a>
                </td>
        </tr>
   <?php endwhile;?>
 </table>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $('#myTable').DataTable({
            dom:'Bfrtrip',
            buttons:[
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]  
        });
    });
    </script>
</body>
</html>