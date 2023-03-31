<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Public Page</title>
	<link rel="stylesheet" href="css/publicpage.css">
<style>
	
	.a{
  text-decoration: none;
  color:black;}
  .box{
  width: 250px;
  height: 150px;
  background-color:#122620;
  border: 1px solid rgb(255, 255, 255);
  padding: 50px;
  position:relative;
  left:40px;
  top:30px;
  margin-block-end: 10px;
}
.content{
	position:relative;
	top:-30px;
}
.right-container{
  margin-top:-786px;
  float:right;
  margin-right:80px;
  
}
.container{
    background-color:#D6AD60;
    margin-top: 10px;
    margin-left: 7.5%;
    background-size: cover;
    width: 60%;
    height: 900px;
}

</style>
</head>
<body>

<?php 
	include('index.php');
?>

<div>
	<img src="Photo/head.jpg" class="head">
</div>

<?php
include 'includes/displayRC.php';
?>
   

<div class="container">
	<div>
		<h3 style="font-family: cursive;margin:5px 30px;color:#F4EBD0">Rooms and Cottage</h1>
		<hr style="width:30%; height:5px; background-color:#122620;margin-left:10px;">
	</div>
	<div class="box">
	<div class="content">
	<img class="img" src="<?php echo $imageURL; ?>" alt="" /> 
		<button class="book"><a class="a" href="book.php?id=<?php echo $no=1;?> ">Book now</button></a>
			<p>Room Type: <?php echo $cottage_type; ?></p>
			<p><?php echo $class; ?></p>
			<p>Max Person: <?php echo $person; ?></p>
			<p>Price per Day: <?php echo $price; ?></p>
	</div>
	</div>
	<div class="box">
	<div class="content">
	<img class="img" src="<?php echo $imageURL2; ?>" alt="" /> 
		<button class="book"><a class="a" href="book.php?id=<?php echo $no=2;?>">Book now</button></a>
			<p>Room Type: <?php echo $cottage_type2; ?></p>
			<p><?php echo $class2; ?></p>
			<p>Max Person: <?php echo $person2; ?></p>
			<p>Price per Day: <?php echo $price2; ?></p>
</div>
	</div>
	<div class="box">
	<div class="content">
	<img class="img" src="<?php echo $imageURL3; ?>" alt="" /> 
		<button class="book"><a class="a" href="book.php?id=<?php echo $no=3;?>">Book now</button></a>
			<p>Room Type: <?php echo $cottage_type3; ?></p>
			<p><?php echo $class3; ?></p>
			<p>Max Person: <?php echo $person3; ?></p>
			<p>Price per Day: <?php echo $price3; ?></p>
</div>
	</div>
	<div class="right-container" >
	<div class="box">
	<div class="content">
	<img class="img" src="<?php echo $imageURL4; ?>" alt="" /> 
		<button class="book"><a class="a" href="book.php?id=<?php echo $no=4;?>">Book now</button></a>
			<p>Room Type: <?php echo $cottage_type4; ?></p>
			<p><?php echo $class4; ?></p>
			<p>Max Person: <?php echo $person4; ?></p>
			<p>Price per Day: <?php echo $price4; ?></p>
</div>
	</div>
	<div class="box">
	<div class="content">
	<img class="img" src="<?php echo $imageURL5; ?>" alt="" /> 
		<button class="book"><a class="a" href="book.php?id=<?php echo $no=5;?>">Book now</button></a>
			<p>Room Type: <?php echo $cottage_type5; ?></p>
			<p><?php echo $class5; ?></p>
			<p>Max Person: <?php echo $person5; ?></p>
			<p>Price per Day: <?php echo $price5; ?></p>
</div>
	</div>
	<div class="box">
	<div class="content">
	<img class="img" src="<?php echo $imageURL6; ?>" alt="" /> 
		<button class="book"><a class="a"  href="book.php?id=<?php echo $no=6;?>">Book now</button></a>
			<p>Room Type: <?php echo $cottage_type6; ?></p>
			<p><?php echo $class6; ?></p>
			<p>Max Person: <?php echo $person6; ?></p>
			<p>Price per Day: <?php echo $price6; ?></p>
	</div>
		</div>
</div>
</div>

<div>
  <img class="mySlides" src="Photo/slide1.jpg">
  <img class="mySlides" src="Photo/slide2.jpg">
  <img class="mySlides" src="Photo/slide3.jpg">
  <div class="button-container">
  <button class="left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="right" onclick="plusDivs(1)">&#10095;</button>
  <div>
</div>


	<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
</body>
</html>