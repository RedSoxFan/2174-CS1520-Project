<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Brian Ashworth</title>
		<link rel="stylesheet" href="css/main.css" />
		<?php
			$base = basename($_SERVER['SCRIPT_NAME'], '.php');
			if (file_exists('css/'.$base.'.css')) {
				echo "<link rel=\"stylesheet\" href=\"css/${base}.css\" />";
			}
		?>
	</head>
	<body>
		<header>
			<h1>Brian Ashworth</h1>

			<nav>
				<ul>
					<li>
						<a href="index.php">About</a>
					</li>
					<li>
						<a href="projects.php">Projects</a>
					</li>
					<li>
						<a href="contact.php">Contact</a>
					</li>
				</ul>
			</nav>
		</header>

		<main>
