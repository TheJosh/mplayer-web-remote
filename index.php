<?php
if (`pidof mplayer`) {
	header('Location: controls.php');
	exit();
}
?>
<!DOCTYPE html>
<title>Media Centre PRO 3000 Extreme Edition</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<link rel="stylesheet" href="style.css">


<!-- Put a list of your directories which contain content below -->
<a href="browse.php?b=/home/josh/tv">TV</a>
<a href="browse.php?b=/home/josh/movies">Movies</a>
