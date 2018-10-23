<?php 
	include_once "header.php";
	$before_login=true;
	include_once "menu.php";
?>

<?php
	if($status=="before_submission" or $status=="failure")
	{
?>
	<br><center><h3 class="ui header">Please fill up the following form to retrieve password of your account</h3></center><br>
	<div class="ui text container">
	<form method="post" class="ui form">
		<div class="ui raised very padded text container segment">
			<center><h3 class="ui header">Forgot Password Form</h3></center>
			<br>
			<div class="field">
			<label for="username">Username</label>
			<input type="text" name="username" id="username" value="<?php echo $_REQUEST["username"]; ?>">
			<font color="red"><?php echo $errors["username"]; ?></font>
			</div>
			<br>
			<input type="hidden" name="page" value="forgot_password">
			<input type="hidden" name="caller" value="self">
			<center><input class="ui positive button" type="submit" value="Retrieve Password"></center>
		</div>
	</form>
	</div>
<?php
	}
	else
	{
?>
		<br><center><h3 class="ui header">Please check your mail for new password</h3></center>
<?php
	}
?>

<?php
	include_once "footer.php";
?>
