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


$year=  date('y');

$month=  date('m');



if(isset($_POST["item_submit"]) AND isset($_POST["remarks"]))
{
	$item_name= $_POST["item_name"];
	$item_phone = $_POST["item_phone"];
	$item_detail = $_POST["item_detail"];
  $item_amount = $_POST["item_amount"];
  $item_balance = $_POST['item_balance'];
  $item_recirev = $_POST['item_recirev'];
  $item_problem = $_POST['item_problem'];
  $item_remarks = $_POST['remarks'];
  // $month = $_POST['month'];
  // $year = $_POST['year'];

       mysqli_query($mysqli,"insert into items(Items,Contact_name,Contact_number,Problems,Amount,Balance,Recieved_by,Remarks,month,year)values('$item_detail','$item_name','$item_phone','$item_problem','$item_amount','$item_balance','$item_recirev','$item_remarks','$month','$year')");
             echo "<script type='text/javascript'>alert('Successfully Added');
             document.location='main-page.php';</script>";
}
// }else{
//   echo "<script type='text/javascript'>alert('ADD Month');
//   document.location='store-add.php';</script>";
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Falcon - Add Items</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

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
        <a class="nav-link" href="store-view.php">
          <i class="fa fa-eye"></i>
          <span style="font-size: 16px;">View Items</span></a>
      </li> 

      <!-- Divider -->
      <hr class="sidebar-divider">

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
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

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

          <div class="row text-center">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <div class="btn btn-primary btn-block"><h<h4 style="font-weight: bold;padding-top: 6px; font-size: 22px;">Add Product Details</h4></div><br><br>

            <!--------------------------------------------------------------form----------------------------------------------->
            <form method="post" enctype="multipart/form-data">
            
            <div class="row">   
              <div class="col-sm-6">
              <input type="text" class="form-control" name="item_name" placeholder="Enter Contact Name" required><br>
              </div>
              <div class="col-sm-6">
              <input type="number" class="form-control" name="item_phone" placeholder="Enter Contact #" required><br>
              </div>
            </div>

            <div class="row"> 
            <div class="col-sm-6">
            <label >Items</label>
            <textarea style="height: 100px;" class="form-control" name="item_detail" placeholder="Enter Items Here" required></textarea><br>
              </div>
              <div class="col-sm-6">
              <label >Problem</label>
            <textarea style="height:100px;" class="form-control" name="item_problem" placeholder="Enter Problems Here" required></textarea>
              <label style="padding-top: 15px;"></label>
            
              <br>
              
     
              </div>
            </div>

            <div class="row">         
            <div class="col-sm-6">     
            <label style="padding-top: 1px;"></label> 
            <input placeholder="Enter Amount" class="form-control"  name="item_amount"  type="number" onfocus="(this.type='number')" required><br>
            </div>

            <div class="col-sm-6">  
            <label style="padding-top: 1px;"></label> 
          <input placeholder="Enter Balance" type="number" class="form-control"  name="item_balance" onfocus="(this.type='number')" required>    
            </div>
            
          </div>
           
          <div class="row">
          <div class="col-sm-6">
          <label style="padding-top: 3px;"></label> 
          <input placeholder="Recieved By" class="form-control"  name="item_recirev"  type="text" onfocus="(this.type='text')" required><br>
          
            <br>
            </div>
          <div class="col-sm-6">  
          <label style="padding-top: 3px;"></label> 
          <Select name="remarks" class="form-control border-bottom-primary" required>
			<option selected disabled > ~ Add Remarks ~</option>
      <option value="purchased">purchased</option>
      <option value="pending">pending</option>
      <option value="ready">ready</option>
      <option value="rejected">rejected</option>
      <option value="handedover">handed over</option>
			<option value="returned">returned</option>
	
     </select><br>     
                <!-- <label style="color: red;">*Select Month</label>
                <Select name="month" class="form-control border-bottom-primary" required>
			<option selected disabled > ~ Months ~</option>
			<option value="january">january</option>
			<option value="feburary">feburary</option>
			<option value="march">march</option>
			<option value="april">april</option>
			<option value="may">may</option>
			<option value="june">june</option>
			<option value="july">july</option>
      <option value="august">august</option>
      <option value="september">september</option>
      <option value="octuber">octuber</option>
      <option value="november">november</option>
      <option value="december">december</option>
     </select> -->
    </div>
     <!-- <div class="col-sm-2">  -->
     <!-- <label>*year</label> -->
   
     <!-- <Select name="year" style=" width:130px; border-radius: 5px;" class="form-control border-bottom-primary">
			<option disabled > ~Select Year~</option>
			<option value="2021" selected>2021</option>
			<option value="2022">2022</option>
			<option value="2023">2023</option>
			<option value="2024">2024</option>
			<option value="2025">2025</option>
			<option value="2026">2026</option>
      <option value="2027">2027</option>
      <option value="2028">2028</option>
      <option value="2029">2029</option>
      <option value="2030">2030</option>
     </select> -->
             <!-- </div> -->

             
          </div>
          <br>
          <input type="submit" class="btn btn-success btn-block" style="font-size: 20px; font-weight: bold;" name="item_submit" value="Confirm">

        </form>

          </div>
          <div class="col-sm-2"></div>
          </div>     
        </div>

        </div>
        <!-- /.container-fluid -->

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

</body>

</html>
