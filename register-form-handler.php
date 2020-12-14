
<?php
$flag= 0;
$conn = new mysqli("localhost","root","","ecom");
if (isset($_POST['name']))	{

	$name = $_POST['name'];
		if(preg_match("/^([a-zA-Z' ]+)$/",$name)){
    	echo 'Valid name given.'; $flag = 1;
		}
else{
    echo 'Invalid name given.';
} 
	$name= str_replace("'", "\'", $name);
	$email = $_POST['email'];
			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		      echo("$email is a valid email address");
		   	}
		   	else{
		      echo("$email is not a valid email address"); $flag = 1;
		   	}
	$password = $_POST['password'];
	// $a = "SELECT * FROM admin_users WHERE name='$name'";
	// $return=mysql_num_rows($a);
	
	
	if ($conn->connect_error) {
  	die("Connection failed: " . $conn->connect_error); }

	$sql = "INSERT INTO users (name, email, password)
			VALUES ('$name','$email', '$password')";
	$conn->query($sql);
	echo nl2br ("Your form has been submitted successfully.\n");
	echo "Page will be redirect within 3 seconds...";
	header( "refresh:3;url=index.php" );
}
?>