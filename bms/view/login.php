<?php 
	include_once "header.php";
	$before_login=true;
	include_once "menu.php";
?>

<?php
	if($status=="before_submission" or $status=="failure")
	{
?>
	<br><center><h3 class="ui header">Please fill up the following form to login to your account</h3></center><br>
	<div class="ui text container">
	<form method="post" class="ui form">
		<div class="ui raised very padded text container segment">
			<center><h3 class="ui header">Login Form</h3></center>
			<br>
			<div class="field">
			<label for="username">Username</label>
			<input type="text" name="username" id="username" value="<?php echo $_REQUEST["username"]; ?>">
			<font color="red"><?php echo $errors["username"]; ?></font>
			</div>
			<br>
			<div class="field">
			<label for="password">Password</label>
			<input type="password" name="password" id="password">
			<font color="red"><?php echo $errors["password"]; ?></font>
			</div>
			<br>
			<input type="hidden" name="page" value="login">
			<input type="hidden" name="caller" value="self">
			<center><input class="ui primary button" type="submit" value="Sign In"></center>
		</div>
	</form>
	</div>
<?php
	}
	else
	{
?>
		<form method="post">
			<input type="hidden" name="username" id="username" value="<?php echo $_REQUEST["username"]; ?>">
			<input type="hidden" name="password" id="password" value="<?php echo $_REQUEST["password"]; ?>">
			<input type="hidden" name="page" value="home">
		</form>
		<script>
			document.forms[0].submit();
		</script>
<?php
	}
?>

<?php
	include_once "footer.php";
?>
