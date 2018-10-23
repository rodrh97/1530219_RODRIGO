<?php 
	include_once "header.php";
	if($logged_in)
	{
		$after_login=true;
		include_once "menu.php";
?>
<br>
<center><h3 class="ui header">Welcome to Home Page</h3><center>

<?php
	}
	else
	{
		$before_login=true;
		include_once "menu.php";
?>
<br>
<center><h3 class="ui header">Invalid Login!!! Try Again.</h3><center>
<?php
	}
	include_once "footer.php";
?>
