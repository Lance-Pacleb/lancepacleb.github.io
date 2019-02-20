<?php include('serverlac.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
<style>
body{
	margin:0px;
	border:0px;
	padding-top: 60px;

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
#navbar{
	width:100%;
	height:70px;
	background-color: green;
	color: white;
	position: fixed;
	top: 0px

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
h2{
	padding-top: 50px;
	text-align: center;
}
.registration {
  width: 40%;
  height: 490px;
  background-color: rgba(0,0,0,0.9);
  border-radius: 20px;
  border:1px solid black;
  color: white;
  padding-top: 60px;
  margin-left: 30%;
  position: all;
  text-align: center;
  border-top-color: green;
  border-top-color:3px;

}
.holder1{
	background-color: red;
	width:100%;
	height:550px;
	background-image: url(grocery.jpg);
	background-size: cover;
	background-repeat: no-repeat;
}

.holder2{
	padding: 20px;
}
input[type=text], input[type=email], input[type=password]{
  	letter-spacing: 1p;
 	  width: 35%;
  	padding: 8px 16px;
 	  margin: 8px 15px;
  	border: 1px solid #ccc;
  	border-radius: 20px;
  	background: transparent;
  	color: white;
  	outline: none;
  	display: inline-flex;
}
input[type=date], input[type=email], input[type=number]{
  	letter-spacing: 1p;
 	  width: 35%;
  	padding: 8px 16px;
 	  margin: 8px 15px;
  	border: 1px solid #ccc;
  	border-radius: 20px;
  	background: transparent;
  	color: white;
  	outline: none;
  	display: inline-flex;
}
input[type="submit"]:hover {
	cursor: pointer;
	background: orange;
	color: #000;
}
.move1{ 
	padding: 10px;
}

.registerbtn{
  	margin-right: 20px;
  	background-color: blue;
  	border:none;
  	border-radius: 20px;
  	width: 27%;
  	height: 30px;
  	color: #fff;
  	font-size: 20px;
  	margin-top: 7px;
  	outline: none;
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

	<center>
		<div id="navbar">
			<a href="" id="linker">Help</a>
      <a href="" id="linker">About Us?</a>
      <a href="mainpage.php" ><button class="signbtn" >Home</button></a>
		</div>
	</center>
	<div class="holder1">
		<div class="holder2">
			<div class="registration"">
				<center><h1>Create your Account</h1></center>
					
						<form clas="move1" action="server.php" method="post">
               <h5 style="color:red; letter-spacing: 2px;">Password Not Match!</h5>
							<input type="text" name="firstname" id="box" required placeholder="Enter your First Name">
							<input type="text" name="lastname" id="box" required placeholder="Enter your Last Name">
							<input type="text" name="address" id="box" required placeholder="Enter your Address">
  							<input type="email" name="email" required placeholder="Enter your email">
  							<input type="Password" name="pass1" id="box" required placeholder="Enter your Password">
  							<input type="Password" name="pass2" id="box" placeholder="Re-Enter your Password"><br>
							<label>Birthday:</label>
							<input type="date" name="bday" id="box" required><br>
							<label >ContactNo:</label>
							<input type="number" name="contactno" id="box" required placeholder="Enter your contact no."><br>
							<label>Gender:</label>
		    				<input type="radio" name="gender" require value="male"> Male
  							<input type="radio" name="gender"  require value="female"> Female
  							<input type="radio" name="gender" require ssvalue="other">Other<br><br>
							<input type="submit" value="Register" class="registerbtn" name="register"><br>
							<label>I have already an account</label><a href="indexloginform.php">Log in</a><br>
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