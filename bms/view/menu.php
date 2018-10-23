<?php
	if($before_login)
	{
?>
<center>
<div class="ui compact menu">
	<a class="browse item" href="index.php?page=index">Home</a>
	<a class="browse item" href="index.php?page=register">Register</a>
	<a class="browse item" href="index.php?page=login">Login</a>
	<a class="browse item" href="index.php?page=forgot_password">Forgot Password</a>
</div>
</center>
<?php
	}
	else if($after_login)
	{
?>
<center>
<div class="ui compact menu">
	<li><a class="browse item" href="index.php?page=home">Home</a></li>
	<li><a class="browse item" href="index.php?page=profile">Profile</a></li>
	<li><a class="browse item" href="index.php?page=book_add">Add Book</a></li>
	<li><a class="browse item" href="index.php?page=book_list">List Book</a></li>
	<li><a class="browse item" href="index.php?page=logout">Logout</a></li>
</div>
</center>
<?php
	}
?>