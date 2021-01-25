<?php

$invalid='';

if(isset($_POST['login'])){

    if(empty($_POST['user'])|| empty($_POST['pass'])){

        $invalid="Incorrect";



    }

    else{

        $user1=$_POST['user'];

        $pass=$_POST['pass'];

        $db =mysqli_connect("localhost:3306","root","","moviedatabase");

        // Check connection
        //$query=mysqli_query($db,"SELECT * FROM user WHERE UPass='$pass' AND UName='$user1'");


  

        

         $query=mysqli_query($db,"SELECT * FROM users WHERE UName='$user1'AND UPass='$pass' ");

        

        $rows=mysqli_num_rows($query);

        if($rows==1){header("Location: index.html");}

        else{$invalid="Incorrect";}

         



    }

}

if(isset($_POST['signUp'])){

    if(empty($_POST['name'])|| empty($_POST['DOB'])|| empty($_POST['email'])|| empty($_POST['user'])|| empty($_POST['pass'])){

        $invalid="Incorrect";



    }

    else{

        $name=$_POST['name'];
        
        $DOB=$_POST['DOB'];

        $email=$_POST['email'];

        $user=$_POST['user'];

        $pass=$_POST['pass'];

        $db =mysqli_connect("localhost:3306","root","","moviedatabase");

        // Check connection
        //$query=mysqli_query($db,"SELECT * FROM user WHERE UPass='$pass' AND UName='$user1'");
        $query=mysqli_query($db,"SELECT * FROM users WHERE UName='$user'");

        

        $rows=mysqli_num_rows($query);

        if($rows==1){echo 'UserName is already taken!'; }
        else{
            mysqli_query($db,"INSERT INTO users (UserId, Name, Email, UName, UPass, DOB, Complaints) VALUES (NULL, '$name', '$email', '$user', '$pass', '$DOB', 0)");
        {header("Location: signup.php");}

       {$invalid="Account Created, Please Login";}
        }

  

        

         

         



    }
}
?>
<html>
    <head>
        <title>Sign Up</title>
        <style>
            
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}

body {
	background: #242943;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 0;
}

h2 {
    color:antiquewhite;
	text-align: center;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button {
	border-radius: 20px;
	border: 1px solid #242943;
	background-color: #242943;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	background: #242943;
	background: -webkit-linear-gradient(to right, #242943, #242943);
	background: linear-gradient(to right, #242943, #242943);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left {
	transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
}

.social-container {
	margin: 20px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}

footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}

        </style>
    </head>
    <body>
        <h2>MOVIEHOLICS</h2>
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form action=" " method = "post">
                    <h1>Create Account</h1>
                    <!-- <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div> -->
                    <span>or use your email for registration</span>
                    <input type="text" name="name" placeholder="Name" />
                    <input type="date" name="DOB" placeholder="D.O.B" />
                    <input type="email" name="email" placeholder="Email" />
                    <input type="text" name="user" placeholder="Username" />
                    <input type="password" name="pass" placeholder="Password" />
                    <button name="signUp">Sign Up</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form method = "post" action="">
                    <h1>Log in</h1>
                    <!-- <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div> -->
                    <span>or use your account</span>
                    <input type="text" name="user" placeholder="Username"/>
                    <input type="password" name = "pass" placeholder="Password" />
                    <a href="#">Forgot your password?</a>
                    <button type = "submit" name="login">Log In</button>
                    <?php echo $invalid; ?>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <button class="ghost" id="signIn">Log In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Friend!</h1>
                        <p>Enter your personal details and start the cinematic journey with us</p>
                        <button class="ghost" id="signUp" name = "signUp">Sign Up</button>
                        
                    </div>
                </div>
            </div>
        </div>
        
        
        <script src="assets/js/signup.js"></script>
    </body>
</html>