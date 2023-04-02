<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Transfer System</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<style type="text/css">
.footer{
        background: blue;
        margin-top: 50%;
        color: white;

    }
    </style>
<header class="header">
    <div class="container">
<div class="row">
<div class="col-md-12">

<center>

	<h1 class="text-center ">Kibabii University Faculty Transfer System<br /><small style="font-size:20px">Knowledge For Development</small></h1>

	<img id="mimg" src="images/KIbabii-Logo.png" class="img-responsive" style="width: 100px;" />


</center>
</div>
</div>
</div>

</header>
<body class="body">
    <hr class="hr">

  <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Enter in to Admin Panel </h4>

                    <img id="mimg" src="images/KIbabii-Logo.png" class="img-responsive" style="width: 100px;" />


    </div>
    <div id="login_admin">
        <h1>Login</h1>
        <form name="F1" action="#" onsubmit="return validation()" method="post">

            <p>

                <label>Username: </label>
                    <input type="text"id="user" name="user"/>

                </p>


            <p>

                <label>Password: </label>
                    <input type="text"id="pass" name="pass"/>

                </p>


            <p>

                    <input type="submit"id="btn" value="Login" />

                </p>

               
        </form>
        
    </div>


    

	</body>
	<br>
</body>
<?php 
include(conn.php)
$username = $_POST['username'];
$Password = $_POST['Password'];


//To prevent from mysqli injection

$Username=stripcslashes($Username);
$Password=stripcslashes($Password);
$Username=mysqli_real_escape_string($con, $Username);
$Password=mysqli_real_escape_string($con, $Password);

$sql = "select *from users where Username=$Username and Password=$Password";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);


if($count==1){

    echo "<h1><center>Login sucessful</center></h1>";
}

else{

    echo "<h1>Login Faild. Invalid Username OR Password</h1>";
}

 ?>

    <hr class="hr">
<footer class="footer">
		<div class="container-fluid">
    <div class="row">
        <div class="footer">
Copyright © 2022 Vouma. All rights reserved.
        </div>
    </div>
    </div>
	</footer>
</html>