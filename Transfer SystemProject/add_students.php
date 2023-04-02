<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Add students</title>
</head>

<style>
	/* Style inputs */
  input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
{
	background-color: powderblue;
}

/* Style the submit button */
input[type=submit] {
  width: 100%;
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* Add a background color to the submit button on mouse-over */
input[type=submit]:hover {
  background-color: #45a049;
}
</style>
<header class="header">
	<div class="container">
<div class="row">
<div class="col-md-12">

<center>
    <h1 class="text-center ">Kibabii University Faculty Transfer System<br /><small style="font-size:20px">Knowledge For Development</small></h1>

<img id="mimg" src="images/Kibabii-Logo.png" class="img-responsive" style="width: 100px;" />

</center>


</div>
</div>
</div>
<br />
	
</header>
<body>
	<hr>
	<h4>Register Students</h4>
	<form>
		<label for="Fname">First Name</label>
		<input type="text" id="Fname" name="firstname" placeholder="Student's First Name...">

		<label for="Lname">First Name</label>
		<input type="text" id="Lname" name="lastname" placeholder="Student's Last Name...">

		<label for="RegNo">Registration Number</label>
		<input type="text" id="RegNo" name="regno" placeholder="Student's RegNo...">

		<label for="email">email</label>
		<input type="text" id="email" name="email" placeholder="Student's email...">

		<label for="Phone">Student's Phone no.</label>
		<input type="text" id="Phone" name="Phone" placeholder="Student's Phone No....">

		<label for="gender">Gender</label>
		<select id="gender" name="gender">
			<option value="Male">Male</option>
			<option value="Female">Female</option>
		</select>

		<label Year of study>Year Of Study</label>
		<select id="Year Of Study" name="Year Of Study">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
		</select>
		<label for="status">Student's status</label>
		<select>
			<option value="In session">In session</option>
			<option value="Out of session">Out of session</option>
			<option value="Unknown<">Unknown</option>
		</select>

		<input type="submit" value="Submit">

	</form>

</body>
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
