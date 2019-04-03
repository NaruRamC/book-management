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
	<title>update book records</title>
	<link rel="stylesheet" href="./css/viewstyle.css"/>
</head>
<body>

<h1>BOOK RECORDS MANAGEMENT</h1>
<form action="updation.php" method="post">
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
     <td><?php echo $row['bookid'];?>
	 <input type="hidden" name="bookid<?php echo $i;?>" value="<?php echo $row['bookid'];?>"/></td>
	 <td><input type="text" value="<?php echo $row['title']; ?>" name="title<?php echo $i;?>"/></td>
     	 <td><input type="text" value="<?php echo $row['price'];?>" name="price<?php echo $i;?>"/></td>
     	 <td><input type="text" value="<?php echo $row['author'];?>" name="author<?php echo $i;?>"/></td>
		 </tr>
   <?php
    }
 
   ?>
   
	   </table>
	   <input type="submit" value="update"/>
	   </form>
	   </body>
	   </html>
     	 