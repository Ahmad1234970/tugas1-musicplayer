<?php 

// Kalau sesi user_name tidak ada, redirect
/*if (!isset($_SESSION['user_name'])) {	
	header("location:index.php"); 
}*/ 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Music Player</title>
	<link rel="stylesheet" type="text/css" href="<?php echo ASSET; ?>css/style.css">
	<link href="<?php echo ASSET; ?>image/a.jpg" rel="shortcut icon">
</head>
<body>
	<div class="container">
		<div class="header">
			<img src="<?php echo ASSET; ?>image/a.jpg">
		</div>
		<div class="menu">
			<a href="dashboard.php">Dashboard</a>
			<a href="dashboard.php?page=artist_tampil">Artis</a>
			<a href="dashboard.php?page=album_tampil">Album</a>
			<a href="dashboard.php?page=track_tampil">Lagu</a>
			<a href="dashboard.php?page=user_tampil">User</a>
			<a href="dashboard.php?page=user_logout">Logout</a>
		</div>

		<div class="main">
			
			<?php 

			if (isset($_GET['page'])) {
				include $_GET['page'] . ".php";
			} else {
				include "main.php";
			}

			?>

		</div>

		<div class="footer">
			Copyright 2020. Ahmad Raynaldi >> Music Player
		</div>
	</div>
</body>
</html>