<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');

$q="select * from book";
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res);
mysqli_close($con);

?>
<!DOCTYPE html>
<html>
<head>
	<title>book records</title>
	<link rel="stylesheet" href="./css/viewstyle.css"/>
</head>
<body>

<h1>BOOK RECORDS MANAGEMENT</h1>
<table id="view_table">
<tr>
<th>BOOK id</th>
<th>title</th>
<th>price</th>
<th>author</th>
</tr>
<?php
 for($i=1;$i<=$num;$i++)
 {
	 $row=mysqli_fetch_array($res);
?>
	<tr>
     <td><?php echo $row['bookid'];?></td>
	 <td><?php echo $row['title'];?></td>
     	 <td><?php echo $row['price'];?></td>
     	 <td><?php echo $row['author'];?></td>
		 </tr>
		 <?php
 }
       ?>
	   </table>
	   <a href="home.php" >otherwise go back to home page</a>
	   </body>
	   </html>
     	 
     	 
 