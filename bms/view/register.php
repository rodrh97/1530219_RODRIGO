<?php 
	include_once "header.php";
	$before_login=true;
	include_once "menu.php";
?>

<?php
	if($status=="before_submission" or $status=="failure")
	{
?>
<br>
	<center><h3 class="ui header">Please fill up the following form to register yourself</h3></center>
	<br>
	<div class="ui text container">
	<form method="post" class="ui form">
		<div class="ui raised very padded text container segment">
			<center><h3 class="ui header">Registration Form</h3></center>
			<br>
			<div class="field">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" >
			<font color="red"><?php echo $errors["name"]; ?></font>
			</div>
			<br>
			<div class="field">
			<label for="username">Username</label>
			<input type="text" name="username" id="username" >
			<font color="red"><?php echo $errors["username"]; ?></font>
			</div>
			<br>
			<div class="field">
			<label for="password">Password</label>
			<input type="password" name="password" id="password">
			<font color="red"><?php echo $errors["password"]; ?></font>
			</div>
			<br>
			<input type="hidden" name="page" value="register">
			<input type="hidden" name="caller" value="self">
			<center><input class="ui positive button" type="submit" value="Sign Up"></center>
		</div>
	</form>
</div>
<?php
	}
	else
	{
?>
		<br><center><h3 class="ui header">Registration Successful</h3></center>
<?php
	}
?>

<?php
	include_once "footer.php";
?>
