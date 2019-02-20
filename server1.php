<?php
session_start();

	$con = mysqli_connect('127.0.0.1','root', '');

	$errors = array();



	if(!$con)
	{
		echo  'not connected to server';
	}
	if(!mysqli_select_db($con, 'test'))
	{
	echo 'Database Not Selected';
	}


		$firstnameinput =$_POST['firstname'];
		$lastnameinput =$_POST['lastname'];
		$addressinput =$_POST['address'];
		$emailinput = $_POST['email'];
		$bdayinput = $_POST['bday'];
		$contactnoinput = $_POST['contactno'];
		$genderinput = $_POST['gender'];
		$passwordinputone = $_POST['pass1'];
		$passwordinputtwo = $_POST['pass2'];

				$password = md5($passwordinputone);
				$sql = "INSERT INTO users (Firstname,Lastname,Email,Address,Contact,Gender,Birthday,FirstPassword, SecondPassword)
				VALUES('$firstnameinput','$lastnameinput',$emailinput','$contactnoinput','$genderinput',$bdayinput',$passwordinputone','$password')";

				if(!mysqli_query($con,$sql))
				{
					echo 'not Insert';
				}
				else{
					echo 'insert';
				}

				$_SESSION['username'] = $firstnameinput;
				$_SESSION['success'] = "You are now ";



?>

//


<?php


  $con = mysqli_connect('127.0.0.1','root', '');
  		if(!$con)
  		{
  			echo "not connected";
  		}

  		if(!myslqi_select_db($con,'test'))
  		{
  			echo 'database not selected';
  		}
		$firstnameinput =mysql_real_escape_string($_POST['firstname']);
		$lastnameinput =$_POST['lastname'];
		$addressinput =$_POST['address'];
		$emailinput = $_POST['email'];
		//$bdayinput = $_POST['bday'];
		//$contactnoinput = $_POST['contactno'];
		///$genderinput = $_POST['gender'];
		//$passwordinputone = $_POST['pass1'];
		$passwordinputtwo = $_POST['pass2'];

		$sql1 = " INSERT INTO users (Firstname,Lastname,Email,Address,Contact,Gender,Birthday,FirstPassword, SecondPassword)
				VALUES('$firstnameinput','$lastnameinput',$emailinput','$contactnoinput','$genderinput',$bdayinput',$passwordinputone','$passwordinputtwo')";
		if(!myslqi_query($con,$sql1))
		{

			echo "not insert";
		}
		else{
			header('location:mainindexpagewithaccount.php');
		}

		if($passwordinputone != $passwordinputtwo){
			header('location:errorreregis.php');}


 ?>
