<?php

	if(isset($_POST['name'])) {
		$name = $_POST['name'];

		$name= str_replace("'", "\'", $name);


		$brand = $_POST['brand'];
		$mrp = $_POST['mrp'];
		$price = $_POST['price'];

		$conn = new mysqli("localhost","root","","ecom");
		
		$sql = "INSERT INTO product (name, brand, mrp, price)
				VALUES ('$name','$brand','$mrp,'$price')";
		$conn->query($sql);
		echo "Your form has been sent successfully";

		$sql = "select * from product";
		$products = $conn->query($sql);

		
	}
?>

</body>
</html>
