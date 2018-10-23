<?php 
	include_once "header.php";
	if($logged_in)
	{
		$after_login=true;
		include_once "menu.php";
?>
		<br><div class="ui text container">
		<div class="ui raised very padded text container segment">
		<table class="ui celled padded table" border="1" width="50%" align="center">
			<tr>
				<th>Title</th>
				<th>Author</th>
				<th>Description</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
<?php
		foreach($books as $book)
		{
?>
			<tr>
				<td><?php echo $book["title"]; ?></th>
				<td><?php echo $book["author"]; ?></th>
				<td><?php echo $book["description"]; ?></th>
				<td><a href="index.php?page=book_edit&id=<?php echo $book["id"]; ?>"><i class="fas fa-pen-alt"></i></a></th>
				<td><a href="index.php?page=book_delete&id=<?php echo $book["id"]; ?>"><i class="fas fa-trash-alt"></i></a></th>
			</tr>
<?php
		}
?>
		</table>
	</div>
	</div>

<?php
	}
	else
	{
		$before_login=true;
		include_once "menu.php";
?>
<h3>Invalid Login!!! Try Again.</h3>
<?php
	}
	include_once "footer.php";
?>
