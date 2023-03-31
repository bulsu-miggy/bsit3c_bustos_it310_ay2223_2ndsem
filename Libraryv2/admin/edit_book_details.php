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

      <style>
  .required:after {
    content:" *";
    color: red;
  }
   </style>
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
                  <a class="nav-link" data-widget="fullscreen" href="../index.php">
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
                        <h1 class="m-0"><span class="fa fa-book"></span> Update Book</h1>
                     </div>
                     <!-- /.col -->
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active">Update Book</li>
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
            $bookid = $_GET['id'];
            $sql = "select * from Libraryv2.book where Bookid='$bookid'";
         
            $result=$conn->query($sql);
            $row=$result->fetch_assoc();
        
            $section=$row['Section'];

            $subject=$row['Subject'];
            $name=$row['Textbook'];
            $vol=$row['Volume'];
            $year=$row['Year'];
            $avail=$row['Availability'];
            $author=$row['Author'];
            $isbn=$row['ISBN'];
            $status=$row['Status']; 
 

            ?>
            <!-- Main content -->
            <section class="content">
               <div class="container-fluid">
                  <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Book Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="edit_book_details.php?id=<?php echo $bookid ?>" method="post">
                <div class="card-body">
                  <div class="row">
                  <div class="col-md-12">
                     <div class="card-header">
                        <span class="fa fa-book"> Book Information</span>
              </div>
                  <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                        <label class="required">Book Section</label>
                        <select class="form-control" name = "Section" tabindex="1" value="SC" data-placeholder="" required>
                        <option value=""></option>
     <option value="General Reference"<?php echo($row['Section']=="General Reference")? 'selected':''; ?>>General Reference</option>
     <option value="Reference"<?php echo($row['Section']=="Reference")? 'selected':''; ?>>Reference</option>
     <option value="Filipiniana" <?php echo($row['Section']=="Filipiniana")? 'selected':''; ?>>Filipiniana</option>
     <option class="Periodical" <?php echo($row['Section']=="Periodical")? 'selected':''; ?>>Periodical</option>
     <option value="Reserved Books"<?php echo($row['Section']=="Reserved Books")? 'selected':''; ?>> Reserved Books</option>
     <option value="Graduate Studies" <?php echo($row['Section']=="Graduate Studies")? 'selected':''; ?>>Graduate Studies</option>
     <option value="Special Collections" <?php echo($row['Section']=="Special Collections")? 'selected':''; ?>>Special Collection</option>
     <option value="Rare Book"  <?php echo($row['Section']=="Rare Book")? 'selected':''; ?>> Rare Book</option>
     <option value="Computer Internet Area"  <?php echo($row['Section']=="Computer Internet Area")? 'selected':''; ?>>Computer Internet Area</option>
                       <!-- javascript for adding new value  -->
              <script>
          // Select the <select> element
var select = document.querySelector("select[name='Section']");

// Create a new option element
var option = document.createElement("option");

// Set the text and value for the new option
option.text = "Other";
option.value = "other";

// Add the new option to the <select> element
select.add(option);

// Add an event listener for the "change" event on the <select> element
select.addEventListener("change", function() {
  // Check if the selected value is "other"
  if (this.value === "other") {
    // Prompt the user for a custom value
    var customValue = prompt("Enter a custom value:");

    // Check if the custom value is not null and not equal to the string "null"
    if (customValue !== null && customValue !== "null" && customValue !== "") {
      // Add the custom value to the <select> element
      var customOption = document.createElement("option");
      customOption.text = customValue;
      customOption.value = customValue;
      select.add(customOption);

      // Set the selected value to the custom value
      this.value = customValue;
    } else {
      // Set the selected value back to the previously selected option
      this.value = this.options[this.selectedIndex].value;
    }
  }
});

              </script>
              <!-- end -->
   </select>
                      </div>
               </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Subject</label>
                    <input type="text" class="form-control" placeholder="Subject" id="Subject" name="Subject" value="<?php echo $subject?>">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                    <label class="required">Title</label>
                    <input type="text" class="form-control" placeholder="Title" id="book" name="book" required value="<?php echo $name?>">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                    <label>Volume</label>
                    <input type="text" class="form-control" placeholder="Volume" id="Title" name="Title" value="<?php echo $vol?>">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                    <label class="required">Year</label>
                    <input type="text" class="form-control" placeholder="Year" id="Copyright" name="Copyright" required value="<?php echo $year?>">
                  </div>
               </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label class="required">Number of Copies</label>
                    <input type="number" class="form-control" placeholder="#" id="availability" name="availability" required value="<?php echo $avail?>">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                    <label class="required">Author</label>
                    <input type="text" class="form-control" placeholder="Year" id="Author" name="Author" required value="<?php echo $author?>">
                  </div>
               </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>ISBN</label>
                    <input type="text" class="form-control" placeholder="ISBN #" id="ISBN" name="ISBN" value="<?php echo $isbn?>">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                        <label class="required">Status</label>
                        <select class="form-control" name = "status" tabindex="1" value="SC" data-placeholder="Select-Status" required>
                        <option value=""></option>
                        <option value="GOOD" <?php echo($row['Status']=="GOOD")? 'selected':''; ?>>GOOD</option>
                        <option value="DAMAGE" <?php echo($row['Status']=="DAMAGE")? 'selected':''; ?>>DAMAGE</option>
                        <option value="DILAPIDATED" <?php echo($row['Status']=="DILAPIDATED")? 'selected':''; ?>>DILAPIDATED</option>
                        </select>
                      </div>
               </div>
            </div>
              </div>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Update Book</button>
                </div>
              </form>
            </div>
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

      <?php
if(isset($_POST['submit']))
{
     $bookid = $_GET['id'];
   $Section = $_POST['Section'];
$Subject = $_POST['Subject'];
$book = $_POST['book'];
$Copyright = $_POST['Copyright'];
$Title = $_POST['Title'];
$availability = $_POST['availability'];
$Author = $_POST['Author'];
$ISBN = $_POST['ISBN'];
$status = $_POST['status'];


$sql1="update Libraryv2.book set `Section`='$Section',`Subject`='$Subject',`Textbook`='$book',`Volume`='$Title',`Year`='$Copyright',`Availability`='$availability',`Author`='$Author',`ISBN`='$ISBN',`Status`='$status' WHERE BookId='$bookid'";

// $conn->query($sql1) or die($conn->error);

if($conn->query($sql1) == TRUE){
echo "<script type='text/javascript'>alert('Success')</script>";
echo "<script>window.location.href='book.php'</script>";
}
else
{//echo $conn->error;
echo "<script type='text/javascript'>alert('Error')</script>";
}
}
?>

      <?php }
else {
    echo "<script type='text/javascript'>alert('Access Denied!')</script>";
} ?>
   </body>
</html>