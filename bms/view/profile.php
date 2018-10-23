<?php 
	include_once "header.php";
	if($logged_in)
	{
		$after_login=true;
		include_once "menu.php";
?>

<?php
		if($status=="before_submission" or $status=="failure")
		{
?>
	<br>
	<center><h3 class="ui header">Please fill up the following form to update your profile</h3></center>
	<br>
	<div class="ui text container">
	<form method="post" class="ui form">
		<div class="ui raised very padded text container segment">
			<center><h3 class="ui header">Profile Update Form</h3></center>
			<br>
			<div class="field">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" value="<?php echo $profile[0]["name"]; ?>">
			<font color="red"><?php echo $errors["name"]; ?></font>
			</div>
			<br>
			<div class="field">
			<label for="username">Username</label>
			<input type="text" name="username" id="username" value="<?php echo $profile[0]["username"]; ?>" readonly="true">
			<font color="red"><?php echo $errors["username"]; ?></font>
			</div>
			<br>
			<div class="field">
			<label for="password">Password</label>
			<input type="password" name="password" id="password">
			<font color="red"><?php echo $errors["password"]; ?></font>
			</div>
			<br>
			<center><h4 class="ui header">[Fill up only if you want to change it]</h4></center>
			<br>
			<input type="hidden" name="page" value="profile">
			<input type="hidden" name="caller" value="self">
			<center><input class="ui positive button" type="submit" value="Update"></center>
		</div>
	</form>
	</div>
<?php
		}
		else
		{
?>
		<br>
	<center><h3 class="ui header">Profile Updated</h3></center>
<?php
		}
	}
	else
	{
		$before_login=true;
		include_once "menu.php";
?>
<center><h3 class="ui header">Invalid Login!!! Try Again.</h3></center>
<?php
	}
	include_once "footer.php";
?>
