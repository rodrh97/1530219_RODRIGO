<?php
	if($before_login)
	{
?>
<center>
<div class="ui blue four item inverted menu">
	<a class="browse item" href="index.php?page=index"><i class="fas fa-home"></i>Home</a>
	<a class="browse item" href="index.php?page=register"><i class="fas fa-user-plus"></i>Register</a>
	<a class="browse item" href="index.php?page=login"><i class="fas fa-sign-in-alt"></i>Login</a>
	<a class="browse item" href="index.php?page=forgot_password"><i class="fas fa-question"></i>Forgot Password</a>
</div>
</center>
<?php
	}
	else if($after_login)
	{
?>
<center>
<div class="ui blue five item inverted menu">
	<a class="browse item" href="index.php?page=home"><i class="fas fa-home"></i>Home</a>
	<a class="browse item" href="index.php?page=profile"><i class="far fa-user"></i></i>Profile</a>
	<a class="browse item" href="index.php?page=book_add"><i class="fas fa-plus-circle"></i>Add Book</a>
	<a class="browse item" href="index.php?page=book_list"><i class="fas fa-list-ul"></i>List Book</a>
	<a class="browse item" href="index.php?page=logout"><i class="fas fa-sign-out-alt"></i>Logout</a>
</div>
</center>
<?php
	}
?>