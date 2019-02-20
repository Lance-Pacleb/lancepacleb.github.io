<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
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
.home{
	background-color: red;
	color:yellow;
	width:100%;
	height:500px;
	background-color: blue;
	color: white;
	background-image: url(grocery.jpg);
  background-size: cover;
	background-repeat: no-repeat;
  background-size: cover;



}

h2{
	padding-top: 50px;
	text-align: center;
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
			        <a href="indexregistrationform.php" id="linker">Register</a>
			        <a href="indexloginform.php" ><button class="signbtn" >Login in</button></a>
	       </div>
	   </center>

     <div class="home"></div>
     <div class="yourdeliver"></div>

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