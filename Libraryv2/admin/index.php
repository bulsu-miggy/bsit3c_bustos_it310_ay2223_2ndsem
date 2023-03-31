<?php
require('dbconn.php');
require('checking.php');
?>

<?php 

// if ($_SESSION['RollNo'] == 'admin') {
  $rollno = $_SESSION['RollNo'];
           $sql="select * from Libraryv2.user where RollNo='$rollno'";
           $result=$conn->query($sql);
           $row=$result->fetch_assoc();
           $type = $row['Type'];

// if ($type == 'Admin') 
if ($type !== 'Student')
{

    ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>PAHINA AKLATAN</title>
      <!-- Font Awesome -->
      <link rel="stylesheet" href="../asset/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="../asset/css/adminlte.min.css">
      <link rel="stylesheet" href="../asset/css/animate.min.css">
      <link rel="stylesheet" href="../asset/css/style.css">

   </head>
   <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
         <!-- Navbar -->
         <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                  <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                  <i class="fas fa-expand-arrows-alt"></i>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-widget="fullscreen" href="logout.php">
                  <i class="fas fa-power-off"></i>
                  </a>
               </li>
            </ul>
         </nav>
         <!-- /.navbar -->
         <!-- Main Sidebar Container -->
         <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: rgba(62,88,113);">
                        <!-- Brand Logo -->
            <a href="index.php" class="brand-link animated swing">
            <img src="../asset/img/logo.png" alt="Aklatan Logo" width="200">
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
               <!-- Sidebar user panel (optional) -->
               <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                  <img src="<?php 
                                    $sql="select * from Libraryv2.user where RollNo='$rollno'";
                                    $result=$conn->query($sql);
                                    $row=$result->fetch_assoc();
                                  
                         
                                    $image=$row['image'];  echo $image ?>" class="img-circle elevation-2" alt="User Image">
                  </div>
                  <div class="info">
                     <a href="#" class="d-block"><?php
                   $sql="select * from Libraryv2.user where RollNo='$rollno'";
                   $result=$conn->query($sql);
                   $row=$result->fetch_assoc();
                 
        
                   $name=$row['Name'];  echo $name ?></a>
                  </div>
               </div>
               <!-- Sidebar Menu -->
               <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                     <li class="nav-item animated bounceInLeft">
                        <a href="index.php" class="nav-link">
                           <i class="nav-icon fa fa-tachometer-alt"></i>
                           <p>
                              Dashboard
                           </p>
                        </a>
                     </li>
                     <li class="nav-item animated bounceInRight">
                        <a href="student.php" class="nav-link">
                           <i class="nav-icon fa fa-users"></i>
                           <p>
                              Student
                           </p>
                        </a>
                     </li>
                     <li class="nav-item animated bounceInLeft">
                        <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-envelope"></i>
                           <p>
                              Messages
                           </p>
                           <i class="right fas fa-angle-left"></i>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a href="message.php" class="nav-link">
                                 <i class="nav-icon fa fa-plus"></i>
                                 <p>Send Message</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="receive.php" class="nav-link">
                                 <i class="nav-icon fa fa-comment"></i>
                                 <p>Messages Received</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item animated bounceInRight">
                        <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-book"></i>
                           <p>
                              Books
                           </p>
                           <i class="right fas fa-angle-left"></i>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a href="addbook.php" class="nav-link">
                                 <i class="nav-icon fa fa-plus"></i>
                                 <p>Add Book</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="book.php" class="nav-link">
                                 <i class="nav-icon fa fa-list"></i>
                                 <p>List of Books</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item animated bounceInLeft">
                        <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-file-signature"></i>
                           <p>
                              Requests
                           </p>
                              <i class="right fas fa-angle-left"></i>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a href="issue_requests.php" class="nav-link">
                                 <i class="nav-icon fa fa-paper-plane"></i>
                                 <p>Issue Requests</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="renew_requests.php" class="nav-link">
                                 <i class="nav-icon fa fa-share"></i>
                                 <p>Renew Request</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="return_requests.php" class="nav-link">
                                 <i class="nav-icon fa fa-reply-all"></i>
                                 <p>Return Request</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item animated bounceInRight">
                        <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-tasks"></i>
                           <p>
                              Issued
                           </p>
                              <i class="right fas fa-angle-left"></i>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a href="current.php" class="nav-link">
                                 <i class="nav-icon fa fa-bookmark"></i>
                                 <p>Currently Issued Books</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="pre.php" class="nav-link">
                                 <i class="nav-icon fa fa-tag"></i>
                                 <p>Previously Issued Books</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="history.php" class="nav-link">
                                 <i class="nav-icon fa fa-trash"></i>
                                 <p>Recently Deleted Books</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                  </ul>
                  </li>
                  </ul>
               </nav>
               <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
         </aside>
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-6 animated bounceInRight">
                        <h1 class="m-0"><span class="fa fa-tachometer-alt"></span> Dashboard</h1>
                     </div>
                     <!-- /.col -->
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                     </div>
                     <!-- /.col -->
                  </div>
                  <!-- /.row -->
               </div>
               <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content">
               <div class="container-fluid">
                  <!-- Small boxes (Stat box) -->
                  <div class="row">
                     <div class="col-lg-4 col-6 animated bounceInLeft">
                        <!-- small box -->
                        <div class="small-box bg-1">
                           <div class="inner">
                              <h3>
                              <?php
                              $sql = "SELECT * FROM Libraryv2.book";
                              $result = mysqli_query($conn,$sql);
                              $count = mysqli_num_rows($result);
                              echo $count      
                                 
                                 ?>
                              </h3>
                              <p>Books Registered</p>
                           </div>
                           <div class="icon">
                              <i class="fa fa-book fa-2x"></i>
                           </div>
                           <a href="book.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                     </div>
                     <!-- ./col -->
                     <div class="col-lg-4 col-6 animated rubberBand">
                        <!-- small box -->
                        <div class="small-box bg-2">
                           <div class="inner">
                              <h3>
                              <?php
                              $sql = "SELECT * FROM Libraryv2.user WHERE Type<>'Admin' && Type<>'librarian'";
                              $result = mysqli_query($conn,$sql);
                              $count = mysqli_num_rows($result);
                              echo $count      
                                 
                                 ?>
                              </h3>
                              <p>User Registered</p>
                           </div>
                           <div class="icon">
                              <i class="fa fa-users fa-2x"></i>
                           </div>
                           <a href="student.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                     </div>
                     <!-- ./col -->
                     
                     <div class="col-lg-12 col-6">
                        <!-- small box -->
                        
                           
                              <?php
                                $rollno = $_SESSION['RollNo'];
                                $sql="select * from Libraryv2.user where RollNo='$rollno'";
                                $result=$conn->query($sql);
                                $row=$result->fetch_assoc();
                              

                                $name=$row['Name'];
                                $email=$row['EmailId'];
                                $mobno=$row['MobNo'];
                                ?>    
                              <div class="card">
                             <center><img src="<?php 
                                    $sql="select * from Libraryv2.user where RollNo='$rollno'";
                                    $result=$conn->query($sql);
                                    $row=$result->fetch_assoc();
                                  
                         
                                    $image=$row['image'];  echo $image ?>" alt="Profile" width="250px"></center>
                             <div class="card-body"><center>
                             <div class="small-box bg-info" style="width: 50%">
                              <div class="inner">
                                  <h3><?php echo $name ?></h3>
                                    <br>
                                    <h5><b>Email ID: </b><?php echo $email ?></h5>
                                    <h5><b>Mobile number: </b> <?php echo $mobno ?></h5>
                                    </div></div>    
                                    <a href="edit_admin_details.php" class="btn btn-primary">Edit Details</a>
                                    <a href="addadmin.php" class="btn btn-danger">Add admin</a></center>
                              
                     </div>
                           </div>
                        </div>
                     </div>
                     <!-- ./col -->
                  </div>
                  <!-- /.row -->
                  <!-- /.row (main row) -->
               </div>
               <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
      </div>
      <!-- ./wrapper -->
      <!-- jQuery -->
      <script src="../asset/jquery/jquery.min.js"></script>
      <script src="../asset/js/adminlte.js"></script>
      <script src="../asset/js/canvasjs.min.js"></script>
   </body>
   <div class="footer" style="margin-left: 18%">
<b>&copy;2022 PAHINA AKLATAN<img src="../asset/img/nightg.png" height="50px" width="50px" style="display:inline-block"><a href="https://www.facebook.com/enadlr">NIGHTGANG</b></a>
		
	</div>
   <?php }
else {
    echo "<script type='text/javascript'>alert('Access Denied!')</script>";
} ?>
</html>