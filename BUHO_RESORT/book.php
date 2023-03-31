<?php
 // Include the database configuration file
 include 'db_con.php';
 $id =$_GET['id'];
 // Get images from the database
 $query = "SELECT * FROM cottage_room Where CRid=$id";
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_assoc($result) ;
 $cottage_type = $row["cottage_type"];
 $class = $row["class"];
 $person = $row["person"];
 $price = $row["price"];

if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];
    $schedule=$_POST['sched'];
    $sql = "INSERT INTO reservation(fname,email,contact_number,address,schedule,size,type,max_person,price) 
    VALUES ('".$name."','".$email."','".$contact."','".$address."','".$schedule."','".$cottage_type."','".$class."','".$person."','".$price."')";  

    if(mysqli_query($conn, $sql)){  
    
     header ("location: payment.php?name=$name ");
    
    }
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/book.css">
    <title>Book now!</title>
</head>
<body>
    <div><img src="photo/logo.png"></div>
    <h1>BOOKING</h1>
    <div><pre>                    NOTE:

        The payment process will only 
        be done via gcash app on this 
              online booking.</pre>
    </div>
    <form  method="POST">
    <div class="container"> 

    <div class="table">
        <table>
            <tr>
                <td><label for="name"><b>Name:</b></label></td>
                <td><input type="text" placeholder="Enter your name" name="name" required/></td>
            </tr>
            <tr>
                <td><label for="email"><b>Email:</b></label></td>
                <td><input type="text" placeholder="Enter your email" name="email" required/></td>
            </tr>
            <tr>
                <td><label for="contact"><b>Contact Number:</b></label></td>
                <td><input type="tel" name="contact"   placeholder=" Please enter exactly 11 digits" pattern="\d{11}" title="please enter exactly 11 digits" required /></td>
                
            </tr>
            <tr>
                <td><label for="address"><b>Address:</b></label></td>
                <td><input type="text" placeholder="Enter Address" name="address" required/></td>
                
            </tr>
             <tr>
                <td><label for="sched"><b>Schedule:</b></label></td>
                <td><input type="date" value="<?php echo date("Y-m-d");?>" name="sched" required/></td>
            </tr>
            <tr>
                <td><label for="Size"><b>Size:</b></label></td>
                <td class="p"><p class="font"><?php echo $cottage_type; ?></p></td>
            </tr>
            <tr>
                <td><label for="type"><b>Type:</b></label></td>
                <td class="p"><p class="font"><?php echo $class; ?></td>
            </tr>
            <tr>
                <td><label for="max"><b>Max Person:</b></label></td>
                <td class="p"><p class="font"><?php echo $person; ?></td>
            </tr>
            <tr>
                <td><label for="price"><b>Price:</b></label></td>
                <td class="p" name="price"><p class="font"><?php echo $price; ?></td>
            </tr>
            <tr>
                <td></td>
                <td><button name="submit" ><a class="cancel"  >Proceed to payment</button>
                <button class="button"><a class="cancel" href="publicpage.php"onclick="return confirm('Are you sure you want to cancel?','Yes','No')">Cancel</button></td>
            </tr>
        </table>
    </div>
    </div>
      </form>

    
</body>
</html>