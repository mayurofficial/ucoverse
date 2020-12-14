<?php
	$conn = new mysqli("localhost","root","","ecom");
?>

<!DOCTYPE html>
	<head>

		<title>	Ucoverse </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" type="image/jpg" href=”sp.png”/>
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
		
	</head>


	<body>

		<div><?php include("include/head.php"); ?></div>
		
		 
        <!-- <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      	</div>
    	</div> -->
<div class="hero">

 <div id="circle"> </div>

			<div class="column1">

					<div class=title>

						<p>WELCOME TO <span style="color: #ff4500">Uco</span>verse</p>
						<div class="bar"></div>
						<h3 style="color:black">We can sell you the whole universe <br>But that will be hell lot of crazy </h3>
						
						<div class= "para" style="font-size: 16px"><b>That's why we only offer a wide range of trendy & stylish collection ranging from classic styles to unconventional designs so that one does not have to compromise on fashion, size or fit.</b></div>
						
					</div>
			</div>


			<div class="column2">
				<div><img class="heroimage" style="width: 350px; user-select: none;position: absolute; float:left; margin-top: 60px;" src="images/oss.svg"></div>
				<div class="slide_in">
						<div class="register-form-handler">
							<form id="register-form" method="post" action="register-form-handler.php">
								<p><b><center>Signup Now</center></b></p>
								<input name="name" type="text" class="form-control" placeholder="Your Name" required><br>
								<input name="email" type="email" class="form-control" placeholder="Your Email" required><br>

								<input name="password" type="password" class="form-control" placeholder="Password"  required></textarea><br>
								<center><input type="submit" class="submit" value="Register"></center>
								<p><b><center>Already Registered?</center></b></p>
								<center><a style="color: #ff4500"href="user/login.php">Login here</a> </center>
							</form>
						</div>
				</div>

			</div>


</div>



<div class="outer"> 
		<div > <img class="1 value" src="images/1.svg">  	</div>
		<div class="value-text"> Reliability </div>

		<div > <img class="2 value" src="images/2.svg"> 	</div>
		<div class="value-text"> Home Delivery </div>

		<div > <img class="3 value" src="images/3.svg"> 	</div>
		<div class="value-text"> Secure Payment </div>

		<div > <img class="4 value" src="images/4.svg"> 	</div>
		<div class="value-text"> 24/7 Support </div>


	</div>
<div class= "heromain">
	
	<div><h1><center>Buy Now</center></h1></div>
		<div class="heromain-container1">
		

		<div>
				<?php
							$sql = "select * from product";
							$products = $conn->query($sql);

							foreach($products as $product) {
						?>
					
						<div class="card">
								<div class="imgproduct" style="text-align: center;">

									<div><?php $path=$product['image']; ?></div> 
									<img class="imgsrc" src="admin/add product/images/<?php echo $path?>">
										
											<div class="pdata">	<!-- 4 -->				
												<div class="pdata1"><?php echo $product['name']; ?></div>
												<div class="pdata2"><s><?php echo "Rs ".$product['mrp']; ?></s></div>
												<div class="pdata3"><?php echo "Rs ".$product['price']; ?></div>
											</div>
										
										<a class="active1" href="#about">Buy</a>
								</div>
						</div>
							
						<?php	}		?>		
		</div>
	</div>
	<div class="heromain-container2">
		<div> 
			<img src = "images/sidebar.gif" width="100%" height="100%">
		</div>
		<div> 
			<img src = "images/sidebar1.gif" width="100%" height="100%">
		</div>

	</div>
</div>

<div class= "heromain2">
<div class="curve">

</div>
	<div class="column11">
			<p style="font-size: 30px;color:#ff4500;">Momentum True Wireless 2 <br> Anniversary Edition </p>
			<div class="bar"></div>
			<div><h3> The limited anniversary edition </h3>
			<p style="font-size: 20px;"> From Rs 999 </p>	
			<a class="active1" href="#about"> Buy Now</a></div>
			
	</div>
</div>


<div class= "heromain2" style="background-image: url('images/laptop.jpg'); ">

	

	<div class="column11">

			<p style="font-size: 30px;color:#ff4500; margin: auto;">MacBook Air </p>
			<div class="bar"></div>
			<h3 style="">Power. It’s in the Air. </h3>
			<p style="font-size: 20px;"> From Rs 159000 or <br> Rs 13250/mo. for 12 mo.** </p>	
			<a class="active1" href="#about">Buy Now</a>


	 </div>
	 
	</div>

<div class="footer">
  <p style="float: left">Designed By Complex</p>
</div>

	<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
	</body>



</html>