<!DOCTYPE html>
<html>
<head>
	<title>book records</title>
</head>
<body>

<h1>BOOK RECORDS MANAGEMENT</h1>
<form  action="insertion.php" method="post">
<table>
	<tr>
		<td>
			title 
		</td>
		<td><input type="text" name="b" minlength="4"  required ></td>
	</tr>

	<tr>
		<td> price</td>
		<td ><input type="text" name="c" maxlength="8"></td>
	</tr>
	<tr>
		<td>author</td>
		<td><input type="text" name="d" minlength="4" maxlength="10"></td>
	</tr>
</table>
<input type="submit" name="e"  value="insert">
</form>
</body>
</html>