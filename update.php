<?php
include_once 'db_connect.php';
$userId = $_GET['userId'];

$result = mysqli_query($conn,"SELECT * FROM user where id= $userId");
$result = $result->fetch_array(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Update employee data</title>
</head>
<body>
<form action="edit.php" method="POST">
<table>
<tr>
<td>Name</td>
<td>Email ID</td>
</tr>
<tr>
	<td>
		<input type="text" name="name" value="<?php echo $result['name']; ?>">
	</td>
	<td>
		<input type="text" name="email" value="<?php echo $result['email']; ?>">
	</td>
		<input type="hidden" name="id" value="<?php echo $userId; ?>">
	<td>
		<input type="submit" value="update">
	</td>
</tr>

</table>
</form>
</body>
</html>