<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title>Home Page </title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<!-- <link rel="stylesheet" href="./css/viewStyle.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<style>
	*{
		padding: 0px ;
		margin: 0px ; 
		border: 0px ; 

	}
	
.up{
width: 100% ; 
height: 383px ;
	background-color: green ; 
}
.up img{
	width: 100% ; 
height: 383px ;
}
.down{

	padding: 150px;
	padding-left: 200px;
	clear: both;
     width: 100% ; 
height: 383px;
background-image: linear-gradient(to left , green , purple);
}
.homebutton {
	margin-left: 50px;
	width: 15% ; 
	height: 100px;
	border-radius: 100px;

}
.homebutton:hover {
	color: blue ; 
}

h1{
	/*background-size: 3000px 3000px;

	background-repeat: no-repeat;*/
	padding: 20px;

	padding-right: 50px;
	line-height: 50%;
	text-align: center;
	border-radius: 50px;
	color: red;
	background-image: linear-gradient(to left , green , purple);
}

</style>
<body>
	<div class="up">
<h1 >Book Record Management System</h1>
	<img src="images/five.jpg" class="img-fluid"  >
                     </div>

<div class="down " >
<input type="button" value="Insert Book Records " class="homebutton btn-success" onClick="window.location = 'insertForm.php'" />
<input type="button" value="View Book Records" class="homebutton btn-success" onClick="window.location = 'view.php'" />
<input type="button" value="Delete Book Records" class="homebutton btn-success" onClick="window.location = 'deleteForm.php'" />
<input type="button" value="Update Book Records" class="homebutton btn-success" onClick="window.location = 'updateForm.php'" />

	</div>
	
	
</body>
</html>