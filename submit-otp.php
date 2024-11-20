<html>
<head>
	<title>SUBMIT OTP</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="assets/images/logo.gif" class="brand_logo" alt="Logo">
					</div>
				</div>
                
<?php
session_start();
$OTP=$_SEESION['OTP'];
if(isset($_POST['oyp'])){
    $submittedotp=$_POST['otp'];
    if($OTP==$submittedotp){
       echo "OTP verified";
       header("location:index.php");
    }else{
        echo "Enter correct OTP";
    }
}

?>


<form method="POST" action="submit-otp.php">
<input type = "number" name="otp" placeholder="Enter otp">
<button type ="submit">Ok</button>
</form>


</div>
		</div>
	</div>


<script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

</body>
</html>

