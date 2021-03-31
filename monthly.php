<?php
include("db-connection.php");

session_start();
$email  = "fff";

if(!$_SESSION['email'])
{
 header("location: index.php");
}
else{ $email = $_SESSION['email']; 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Falcon - View Items</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
     <!-- Sidebar -->
     <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="main-page.php">
  <div class="sidebar-brand-icon">
    <i class="fa fa-desktop" aria-hidden="true" style="color: white;"></i>
  </div>
  
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<div class="sidebar-brand-text mx-10"> <sup></sup></div>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
      <div class="nav-link" >
          <i class='fa fa-cogs fa-2x' style="color: white;"></i>
          <span style="font-size: large; color: white;">Falcon Workshop</span></div>
      </li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

      <li class="nav-item">
  <a class="nav-link" href="store-add.php">
    <i class="fa fa-paper-plane"></i>
    <span style="font-size: 16px;">Add Items</span></a>
</li> 
<li class="nav-item">
  <a class="nav-link" href="store-view.php">
    <i class="fa fa-eye"></i>
    <span style="font-size: 16px;">View Items</span></a>
</li> 
<!-- Divider -->
<hr class="sidebar-divider">

<li class="nav-item">
  <a class="nav-link" href="yearly.php">
    <i class="fa fa-calculator"></i>
    <span style="font-size: 16px;">Year Wise</span></a>
</li> 

          <!-- Nav Item - Charts -->
          <!-- <li class="nav-item">
        <a class="nav-link" href="show-all.php">
          <i class="fas fa-globe-asia" style="font-size: 18px;"></i>
          <span style="font-size: 18px;"> Show all </span></a>
      </li> -->


<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
</ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- <ul class="nav navbar-nav">
<li style="padding-top: 10px;font-size: 15px;"><button style=" width: 100px; margin-left: 20px;" onclick="history.go(-1);" class="btn btn-primary">
 <span class="glyphicon glyphicon-arrow-left"></span> Back </button></li>
    </ul> -->
   
    
          <!-- Sidebar Toggle (Topbar) -->
          <form class="form-inline">
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               
                <span style="color: black; font-weight: 600; font-size: large;">Admin</span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->

   

        <!-- Begin Page Content -->
        <div class="container-fluid">


               <!-- Content Row -->
          <div class="row">
 <!----------------------------------------------------month wise------------------------------------->
<!-- Grow In Utility -->
<div class="col-lg-12">

  <div class="card position-relative">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Month Wise</h6>
    </div>
    <div class="card-body">
      <div class="mb-3">
      <form method="POST" action="monthly.php"  style="text-align: center;">
			<Select name="month" style=" width:150px; border-radius: 5px;" class="form-group border-bottom-primary">
			<option selected disabled > ~Select Month~</option>
			<option value="01">january</option>
			<option value="02">feburary</option>
			<option value="03">march</option>
			<option value="04">april</option>
			<option value="05">may</option>
			<option value="06">june</option>
			<option value="07">july</option>
      <option value="08">august</option>
      <option value="09">september</option>
      <option value="10">octuber</option>
      <option value="11">november</option>
      <option value="12">december</option>
     </select>

     <Select name="year" style=" width:140px; border-radius: 5px;" class="form-group border-bottom-primary">
			<option disabled selected> ~Select Year~</option>
			<option value="21">2021</option>
			<option value="22">2022</option>
			<option value="23">2023</option>
			<option value="24">2024</option>
			<option value="25">2025</option>
			<option value="26">2026</option>
      <option value="27">2027</option>
      <option value="28">2028</option>
      <option value="29">2029</option>
      <option value="30">2030</option>
     </select>
	
			<input type="submit" name="submit" value="Go" style="width:80px; background-color:#06F; color:#FFF; border-radius:10px; border:solid" class="ml-2"/>
           </form>

           <br>
      </div>
      
   <?php
		   if(isset($_POST['submit']) AND isset($_POST['month']) AND isset($_POST['year'])){
        $month=$_POST['month']; 
        $year=$_POST['year'];

?>

<h6 style="text-align: center; color: blue;"><?php echo  $month ." / " .$year ?></h6>

<?php

$result=mysqli_query($mysqli,"SELECT SUM(Amount) AS amount FROM items WHERE `month` = '".$month."' AND `year` = '".$year."'");
$result1=mysqli_query($mysqli,"SELECT SUM(Balance) AS balance FROM items WHERE `month` = '".$month."' AND `year` = '".$year."'");
while ($row = $result->fetch_assoc()) {
  $amount = $row['amount']."<br>";

}
while ($row = $result1->fetch_assoc()) {
  $balance = $row['balance']."<br>";
}
   ?>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr style="background-color: #1c72b8; color: blanchedalmond; font-size: 20px;">

                   <th style="text-align: center;">Total Amount</th>

                   <th style="text-align: center;">Total Balance</th>
                   
                    </tr>
                  </thead>
                  <tbody>
                  <tr style="text-align: center; font-size: 40px;">
                  
                  <td><?php echo $amount;?></td>
                  
                  <td><?php echo  $balance;?></td>

  </tbody>
</table>
<?php
} else{

  $year=  date('y');

$month=  date('m');
?>
<h6 style="text-align: center; color: blue;"><?php echo  $month ." / " .$year ?></h6>

<?php
$result=mysqli_query($mysqli,"SELECT SUM(Amount) AS amount FROM items WHERE `month` = '".$month."' AND `year` = '".$year."'");
$result1=mysqli_query($mysqli,"SELECT SUM(Balance) AS balance FROM items WHERE `month` = '".$month."' AND `year` = '".$year."'");
while ($row = $result->fetch_assoc()) {
  $amount = $row['amount']."<br>";

}
while ($row = $result1->fetch_assoc()) {
  $balance = $row['balance']."<br>";
}
   ?>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr style="background-color: #1c72b8; color: blanchedalmond; font-size: 20px;">

                   <th style="text-align: center;">Total Amount</th>

                   <th style="text-align: center;">Total Balance</th>
                   
                    </tr>
                  </thead>
                  <tbody>
                  <tr style="text-align: center; font-size: 40px;">
                  
                  <td><?php echo $amount;?></td>
                  
                  <td><?php echo  $balance;?></td>

  </tbody>
</table>
<?php
}?>
    </div>
  </div>

</div>


</div>

        
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
    
      <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are You Sure?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="admin-logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
<script>
   $('#dataTable').dataTable( {
  "columnDefs": [
    { "width": "10%", "targets": 0 },
    { "width": "10%", "targets": 1 },
    { "width": "10%", "targets": 5 },
    { "width": "10%", "targets": 8 }
  ]
} );

</script> 
