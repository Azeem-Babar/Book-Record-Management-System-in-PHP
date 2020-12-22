<?php 
$size  = sizeof($_POST);
$records = $size/4 ; 




for ($i=1; $i <=$records ; $i++) { 
	$index1 = "bookid".$i;
	$bookid[$i] = $_POST[$index1];
	$index2 = "title".$i;
	$title[$i] = $_POST[$index2];
	$index3 = "price".$i;
	$price[$i] = $_POST[$index3];
	$index4 = "author".$i;
	$author[$i] = $_POST[$index4];
}
$con = mysqli_connect('localhost' , 'root');
mysqli_select_db ($con , 'brm_db');
for ($i=1; $i <= $records ; $i++) { 
	$q = "update book set title = '$title[$i]' , price  = $price[$i] , author = '$author[$i]'
	where bookid  = $bookid[$i]";
	mysqli_query($con , $q);
}
mysqli_close($con);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>Insertion Form </title>
	<style>
		*{
		padding: 0px ;
		margin: 0px ; 
		border: 0px ; 

	}
		.up{
width: 100% ; 
height: 285px ;
	/*background-color: green ; */
}
.up img{
	margin-top: -8px;
	width: 100% ; 
height: 285px ;
}
.down_left{
     float: left ;


/*	padding: 150px;
	padding-left: 200px;*/
	
     width: 65% ; 
height: 383px;
background-image: linear-gradient(to left , green , purple);
}

.down_right{
  float: right ;
 
	/*padding: 10px;*/
	/*padding-left: 200px;*/
	/*clear: both;*/
     width:35% ; 
height: 383px;
background-image: linear-gradient(to left , green , purple);
}
.homebutton {
    color: red;
	margin-left: 100px;
	width: 28% ; 
	height: 80px;
	border-radius: 100px;
	

}
.homebutton:hover {
	color: blue ; 
}
h1{
	/*background-size: 3000px 3000px;

	background-repeat: no-repeat;*/
	padding: 20px;

	/*padding-right: 50px;*/
	line-height: 100%;
	text-align: center;
	border-radius: 50px;
	color: red;
	background-image: linear-gradient(to left , blue , pink);
}
h2{
	/*background-size: 3000px 3000px;

	background-repeat: no-repeat;*/
	padding: 15px;

	padding-right: 50px;
	line-height: 50%;
	text-align: center;
	border-radius: 50px;
	color: red;
	background-image: linear-gradient(to left , blue , pink);
}
.down_left form{
	padding-left: 250px;
}
.down_left input{
	margin:10px;
	text-align: center;
     
}

	</style>

</head>
<body>
	<div class="up">
<h1 >Book Record Management System</h1>
	<img src="images/five.jpg" class="img-fluid"  >

                     
	<div class="down">
		<div class="down_left">
			 <h2> Records Updated</h2>
			 <?php echo "Records are updated"; ?>
	again update records   <a href="updateForm.php">Click Here </a>
     
</div>
<div class="down_right">
	<h2>Links</h2>
	
	<input type="button" value="Insert Book Records " class="homebutton btn-success" onClick="window.location = 'insertForm.php'" />
<input type="button" value="View Book Records" class="homebutton btn-success" onClick="window.location = 'view.php'" /><br><br> 
<input type="button" value="Home" class="homebutton btn-success" onClick="window.location = 'home.php'" /><br><br>
<input type="button" value="Delete Book Records" class="homebutton btn-success" onClick="window.location = 'deleteForm.php'" />
<input type="button" value="Update Book Records" class="homebutton btn-success" onClick="window.location = 'updateForm.php'" />

</div>
</div>
</body>
</body>
</html>