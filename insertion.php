<?php
    $title=$_POST['b'];
	$price=$_POST['c'];
	$author=$_POST['d'];
	
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'BRM_DB');
	$q=" INSERT INTO book (title,price,author) values ('$title',$price,'$author')";
	$status=mysqli_query($con,$q);
	mysqli_close($con);
	?>
	<!DOCTYPE html>
	<html>
	<head>
	<title>Insertion</title>
	</head>
	<body>
	<h1>book Record management</h1>
	<p>
	<?php
	    if($status==1)
			echo "rcord insrted";
		else
			echo "insertion failed";
		?>
		</p>
		    Do you want to inssert more record?<a href="insertform.php">click here</br></a>
			<a href="home.php">otherwise go back to home page</a>
			</body>
			</html>