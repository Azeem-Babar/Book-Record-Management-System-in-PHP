<?php 
$con = mysqli_connect('localhost' , 'root');
mysqli_select_db ($con , 'brm_db');
$q = "select * from book";
$result = mysqli_query ($con , $q);
$num = mysqli_num_rows($result);
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
			 <h2>View Records</h2>
	<!-- <h1 style="color: red;  text-align: center;">Book Record Management </h1>
	<div style="text-align: center; " > -->
	<table id="view_table" style="background-color:olivedrab ; color: black ;border-spacing: 10px ; width: 600px; height: 300px; " >
		<tr id="view_row">
			<th>Book ID</th>
			<th>Title </th>
			<th>Price</th>
			<th>Author </th>
		</tr>
<?php 
for ($i=1; $i <= $num ; $i++) { 
	$row = mysqli_fetch_array($result);

 ?>
 <tr>
 	<td><?php echo $row['bookid']; ?></td>
 	<td><?php echo $row['title']; ?></td>
 	<td><?php echo $row['price']; ?></td>
 	<td><?php echo $row['author']; ?></td>

 </tr>
<?php } ?>

	</table>
</div>

     
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
