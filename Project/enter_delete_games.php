<html>
<form action ="enter_game.php" method = "POST">
	<p>Insert a game into the database.</p>
	<input type = "text" name = "title" placeholder = "Title">
	<p></p>
	<input type = "text" name = "pub" placeholder = "Publisher">
	<p></p>
	<input type = "text" name = "dev" placeholder = "Developer">
	<p></p>
	<input type = "text" name = "reviews" placeholder = "Review Score">
	<p></p>
	<input type = "text" name = "esrb" placeholder = "ESRB Rating">
	<p></p>
	<input type = "text" name = "platform" placeholder = "Platform(s)">
	<p></p>
	<input type = "text" name = "release" placeholder = "Release Date">
	<p></p>
	<input type = "text" name = "price" placeholder = "Price">
	<p></p>
	<input type = "text" name = "genre" placeholder = "Genre">
	<p></p>
	<input type = "submit" name = "insert-game" value = "Insert this game">
</form>
<form action = "delete_game.php" method = "POST">
	<p>Remove a game from the database.</p>
	<input type = "text" name = "remove-game" placeholder = "Enter a game">
	<p></p>
	<input type = "submit" name = "remove-game-button" value = "Remove this game">
</form>
<form action ="mr_robot.php" method = "POST">
<p></p>
	<input type = "submit" name = "return-home" value = "Return Home">
</form>
</html>