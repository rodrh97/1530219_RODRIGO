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
	<br><center><h3 class="ui header">Please fill up the following form to delete book</h3></center><br>
	<div class="ui text container">
	<form method="post" class="ui form">
		<div class="ui raised very padded text container segment">
			<center><h3 class="ui header">Book Delete Form</h3></center>
			<br>
			<div class="field">
			<label for="title">Do you really want to delete book <?php echo $book[0]["title"]; ?>?</label>
			<br>
			<select name="choice">
				<option value="yes">Yes</option>
				<option value="no" selected>No</option>
			</select>
			</div>
			<br>
			<input type="hidden" name="page" value="book_delete">
			<input type="hidden" name="caller" value="self">
			<input type="hidden" name="id" value="<?php echo $book[0]["id"]; ?>">
			<center><input class="ui negative button" type="submit" value="Delete"></center>
		</div>
	</form>
	</div>
<?php
		}
		else
		{
?>
		<br><center><h3 class="ui header">Book Deleted</h3></center>
<?php
		}
	}
	else
	{
		$before_login=true;
		include_once "menu.php";
?>
<br><center><h3 class="ui header">Invalid Login!!! Try Again.</h3></center>
<?php
	}
	include_once "footer.php";
?>
