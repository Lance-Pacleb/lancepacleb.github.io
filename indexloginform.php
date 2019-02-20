
<?php 
 $host ="localhost";
 $user = "root";
 $password = "";
 $db ="test";

 mysql_connect($host,$user,$password);
 mysql_select_db($db);

 if(isset($_POST['uname'])){

 	$unameinput = $_POST['uname'];
 	$passwordinput = $_POST['psw'];

 	$sql = " select * from users where Email='".$unameinput."'AND FirstPassword='".$passwordinput."'
 	limit 1 ";
 	$result = mysql_query($sql);
 	if(mysql_num_rows($result)==1){
 		echo "you have Succesfully logged in";
 		header('location: mainindexpagewithaccount.php');
 		exit();
 	}
 	else
  {
 		echo ' <script> alert("Input password not match") </script> ';
 		header('location: errorlogin.php');
 	}





  

 }




 ?>



















<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
<style>

body{
	margin:0px;
	border:0px;
	padding-top: 60px;

}
#navbar{
	width:100%;
	height:70px;
	background-color: green;
	color: white;
	position: fixed;
	top: 0px;
}

img.avatar {
 	 width: 3%;
 	 border-radius: 100%;
  	height: 25px;
  	margin-top: 5px;
	left:calc(36%);
	position:relative;
	padding: 12px;
}
#linker{
	color: white;
	text-decoration: none;
	padding: 10px;
	text-align: center;
	float:right;
	padding:19px;
}
#linker:hover{
	color: orange;
}

.signbtn{
 	width: 70px;
  	height: 30px;
 	 border: solid #ccc;
  	border-radius: 20px;
  	background: transparent;
  	color:white;
 	 outline: none;

  	text-align: center;
	float:right;
	margin-top: 15px;
}
.signbtn:hover {
  	background-color: orange;	
}
#data {
	width:100%;
	height:500px;
	background-color: blue;
	color: white;
	background-image: url(grocery.jpg);
	background-size: cover;
	 background-repeat: no-repeat;
}
h2{
	text-align: center;
	
}
/*loinform*/
input[type=email], input[type=password]{
  	letter-spacing: 1p;
 	width: 100%;
  	padding: 8px 18px;
 	 margin: 8px 0;
  	display: inline-block;
  	border: 1px solid #ccc;
  	box-sizing: border-box;
  	border-radius: 20px;
  	background: transparent;
  	color: white;
  	outline: none;
}
 .cancelbtn{
  	float: right;
  	margin-right: 20px;
  	background-color: red;
  	border:none;
  	border-radius: 20px;
 	width: 30%;
  	height: 35px;
  	color: #fff;
  	font-size: 20px;
  	margin-top: 10px;
  	outline: none;
 }
 .loginbtn{
  	float: right;
  	margin-right: 20px;
  	background-color: blue;
  	border:none;
  	border-radius: 20px;
  	width: 30%;
  	height: 35px;
  	color: #fff;
  	font-size: 20px;
  	margin-top: 10px;
  	outline: none;
 }
.modal {
  	width: 30%;
  	height: 350px;
  	background-color: rgba(0,0,0,0.9);
  	border-radius: 20px;
 	border:1px solid black;
  	color: white;
  	padding-top: 60px;
  	margin-left: 30%;
  	position: all;
  
}
.modal-content{
	padding:15px;
}
.move{
	padding-top: 40px;
}

.word2{
  width:100%;
  height: 50%;
  background-color: rgb(209, 224, 224);
  text-align:center;
  padding-top: 0px;
  font-size: 18px;
  font-style: italic;
}
.word{
  width:100%;
  height: 10%;
  background-color: rgb(153, 255, 153);
  text-align:center;
  padding-top: 0px;
  font-size: 25px;
}

</style>
</head>
<body>
 		   <div id="navbar">
      <a href="" id="linker">Help</a>
      <a href="" id="linker">About Us?</a>
      <a href="mainpage.php" ><button class="signbtn" >Home</button></a>
	       </div>



	<div id="data">
		<div class="move">
			<div class="modal">
				<h2>Log in</h2>
  				<form class="modal-content" action="#" method="POST">
					<div class="container">
      						<label for="uname"><b>Email</b></label>
      						<input type="email" placeholder="Enter Email" name="uname" required>
      						<label for="psw"><b>Password</b></label>
      						<input type="password" placeholder="Enter Password" name="psw" required>
      						<label>Already have an account?</label><span ><a href="indexregistrationform.php">Sign in</a></span><br>
      						<label><input type="checkbox" checked="checked" name="remember"> Remember me</label>
      						<span class=forget-psw">Forgot <a href="#">Password?</a></span><br>
   							<input  name="" type="submit" class="loginbtn" value="LogIn">
      						<a href="mainpage.php"><button type="button" class="cancelbtn">Cancel</button></a>
					</div>
				</form>

			</div>
		</div>
	</div>

      <div class="word2">
      <p> <strong>Our story</strong></p>
<p>We connect customers with the food they love</p>
     </div>

     <div class="word">
       <p><strong>We're committed to social & environmental responsibility</strong></p>
<p>We believe that building a strong community is about more than just the bottom line.</p>
<p>We strive to make a positive impact in the communities we serve.</p>
     </div>

    

	<div id="datatwo">
			<footer>
				<h1>this is the footer</h1>
			</footer>
	</div>



</body>
</html>