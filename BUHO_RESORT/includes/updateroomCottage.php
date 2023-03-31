<?php
include '../db_con.php';
$id = $_GET['id'];
$sql = "select * from cottage_room where CRid= $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$cottage_type = $row['cottage_type'];
$class = $row['class'];
$person =$row['person'];
$price = $row['price'];
$photo = $row['photo'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Update Room and Cottages</title>
    
    <style>
        .sbt{
          position:relative;
          left: 0%;
          width:150px;
          height:35px;
          border:none;
          background:blue;
          color:white;
        }
        .cancel{
        text-decoration:none;
          color:white;
        }
        input{
            width:320px;
            height:35px;
            margin-top:5px;
            border:none;
           
        }
        .container{
            margin: 5% 40%;
            width:350px;
            height:412px;
            background-color:#f7c800;
        }
        th{
            color:black;
            position:relative;
            left:135px;
        }
       
        body{
            background-image: url('Photo/front.png');
            background-repeat: no-repeat;
             background-size:cover;
        }

    </style>
</head>
<body>
    <div class="container">
     <form action="upload.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
            <th> UPDATE </th>
            </tr>  
            <tr>
            <td> Cottage Type: </td>
            </tr>
            <tr>
            <td> <input type="text" name="cottage_type" value="<?php echo $cottage_type ?>"></td>
            </tr>
            <tr>
            <td> Class: </td>
            </tr>
            <tr>
            <td> <input type="text" name="class" value="<?php echo $class ?>" ></td>
            </tr>
            <tr>
            <td> Person: </td>
            </tr>
            <tr>
            <td> <input type="text" name="person" value="<?php echo $person ?>"></td>
            </tr>
            <tr>
            <td> Price: </td>
            </tr>
            <tr>
            <td> <input type="text" name="price" value="<?php echo $price ?>"></td>
            </tr>
            <tr>
            <td> Select Image File:</td>
            </tr>
            <tr>
            <td><input class="form-control" type="file" name="file" id="formFile"></td>
            <tr>
            <td><input type="submit" class="sbt" name="submit" value="Update" onclick="return confirm('Are you sure you want to update?','Yes','No')">
            <button style="  background: red;
                             border: 0;
                             outline: 0;
                             width: 150px;
                             height: 35px;
                             font-size: 16px;
                             text-align: center;
                             cursor: pointer;
                            "><a href="../RCs.php" class="cancel" onclick="return confirm('Are you sure you want to cancel?','Yes','No')">Cancel</a></button></td>
            </tr>
        </table>
     </form>
    </div>
    </div>
</body>
</html