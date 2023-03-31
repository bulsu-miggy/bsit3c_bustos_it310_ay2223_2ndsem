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
      <!-- DataTables -->
      <link rel="stylesheet" href="../asset/tables/datatables-bs4/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" href="../asset/tables/datatables-responsive/css/responsive.bootstrap4.min.css">
      <link rel="stylesheet" href="../asset/tables/datatables-buttons/css/buttons.bootstrap4.min.css">
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
                        <h1 class="m-0"><span class="fa fa-trash"></span>Recently Deleted Books</h1>
                     </div>
                     <!-- /.col -->
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active">Deleted</li>
                        </ol>
                     </div>
                     <!-- /.col -->
                  </div>
                  <!-- /.row -->
               </div>
               <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <?php
           if(isset($_POST['submit']))
               {$s=$_POST['ok'];

                    $sql="SELECT * FROM Libraryv2.tbl WHERE BookId='$s' OR Textbook LIKE '%$s%'";
               }
           else
               $sql="SELECT * FROM tbl ORDER BY BookID DESC";

           $result=$conn->query($sql);
           $rowcount=mysqli_num_rows($result);
             ?>

               <form action="excelhistory.php" method="post" style="margin-left: 35px;" class="animated pulse">
                  <input type="submit" name="export_excel" class="btn btn-info" value="Export to Excel">
               </form>

            <!-- Main content -->
            <section class="content">
               <div class="container-fluid">
                  <div class="card-body animated pulse">
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
    
                           <tr>
                              <th>Book Id</th>
                              <th>User</th>
                              <th>Name</th>
                              <th>Date</th>
                           </tr>
                        </thead>
                        <tbody>
                        <?php
   
                        while($row=$result->fetch_assoc())
                        {      
     
                           $bookid=$row['BookId'];
                           $name=$row['deletor'];
                           $item=$row['item'];
                           $avail=$row['date'];
   
  
                           ?>
                           <tr>
                           <td><?php echo $bookid ?></td>
                           <td><?php echo $name ?></td>
                           <td><?php echo $item ?></td>
                           <td><?php echo $avail ?></td>

                            </form>
                              </div>
                           </tr>
                          <?php } ?>
                        

                            </tfoot>
                     </table>
                            
                  </div>
               </div>
               <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
      </div>
      <!-- ./wrapper -->
      <script>
      function myFunction2() {
      return confirm('Are you sure you want to delete this record?'); } 
      </script>
      <!-- jQuery -->
      <script src="../asset/jquery/jquery.min.js"></script>
      <script src="../asset/js/bootstrap.bundle.min.js"></script>
      <script src="../asset/js/adminlte.js"></script>
      <!-- DataTables  & Plugins -->
      <script src="../asset/tables/datatables/jquery.dataTables.min.js"></script>
      <script src="../asset/tables/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
      <script src="../asset/tables/datatables-responsive/js/responsive.bootstrap4.min.js"></script>s
      <script src="../asset/tables/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
      <script>
         $(function () {
           $("#example1").DataTable();
         });
      </script>


   </body>
   <?php }
else {
    echo "<script type='text/javascript'>alert('Access Denied!')</script>";
} ?>
</html>