<?php include('includes/header.php'); ?>

<h2>Contact</h2>

<?php if (isset($_GET['submitted'])) { ?>
	<section class="submitted">
		Thanks for contacting me!
	</section>
<?php } elseif (isset($_GET['error'])) { ?>
	<section class="error">
		<?php echo $_GET['error']; ?>
	</section>
<?php } ?>

<form id="contact" action="process.php" method="POST">
	<label for="subject">Subject</label>
	<input name="subject" type="text" />
	<br />

	<label for="name">Name</label>
	<input name="name" type="text" />
	<br />

	<label for="email">Email</label>
	<input name="email" type="text" />
	<br />

	<label for="message">Message</label>
	<textarea name="message"></textarea>
	<br />

	<input type="submit" />
</form>

<?php include('includes/footer.php'); ?>
