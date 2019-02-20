<?php 
 session_start();
	$db = mysqli_connect('localhost', 'root', '','test');
		
		
	if(isset($_GET['register'])){

		$firstnameinput =$_GET['name'];
		$lastnameinput = $_GET['last'];
		$emailinput = $_GET['email'];
		$addressinput = $_GET['address'];
		$genderinput = $_GET['gender'];
		$contactnoinput = $_GET['contactno'];
		$bdayinput = $_GET['bday'];
		$passwordinputone = $_GET['pass1'];
		$passwordinputwo = $_GET['pass2'];

	





				$sql = "INSERT INTO users (Firstname,Lastname,Email,Address,Contact,Gender,Birthday,FirstPassword,SecondPassword)
							VALUES('$firstnameinput','$lastnameinput','$emailinput','$addressinput','$contactnoinput','$genderinput','$bdayinput','$passwordinputone','$passwordinputwo')";
				$result = mysqli_query($db,$sql);

				if($result)
				{

						$_SESSION['name']= $firstnameinput;
						header('location:mainindexpagewithaccount.php');
				}
				if($passwordinputone != $passwordinputwo){
					header('location: errorregisternotify.php ');
				}
				



				else
				{
					echo "insert data fail";
				}
	}
 ?>
