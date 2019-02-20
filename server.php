<?php 
	session_start();

		$db = mysqli_connect('localhost','root', '', 'test');

		$firstnameinput =mysql_real_escape_string($_POST['firstname']);
		$lastnameinput =$_POST['lastname'];
		$addressinput =$_POST['address'];
		$emailinput = $_POST['email'];
		$bdayinput = $_POST['bday'];
		$contactnoinput = $_POST['contactno'];
		$genderinput = $_POST['gender'];
		$passwordinputone = $_POST['pass1'];
		$passwordinputtwo = $_POST['pass2'];

			if($passwordinputone != $passwordinputtwo){
				 header('location:errorreregis.php');
			}

			else{
				

				mysqli_query($db,$sql);
				header('location:mainindexpagewithaccount.php');
			}
			
 ?>


		else{
			$check =" select * from users where Email = '$emailinput' ";
			$result = mysql_query($db,$check);
			$num = mysqli_num_rows($result);

			if($num == 1){
				header('
					location:erroralreadyuse.php');
			}
			else{
				$sql = " insert into users (Firstname,Lastname,Email,Address,Contact,Gender,Birthday,FirstPassword, SecondPassword)
				values ('$firstnameinput','$lastnameinput',,$emailinput','$addressinput','$contactnoinput','$genderinput',$bdayinput',$passwordinputone','$passwordinputtwo')";
				mysqli_query($db,$sql);
				header('location:mainindexpagewithaccount.php');
				exit();
			}
 
			}