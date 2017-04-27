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

<form id="contact" action="/process" method="POST">
	<label for="subject">Subject</label>
	<span id="reqsubject" class="required">This field is required</span>
	<input id="subject" name="subject" type="text" />
	<br />

	<label for="name">Name</label>
	<span id="reqname" class="required">This field is required</span>
	<input id="name" name="name" type="text" />
	<br />

	<label for="email">Email</label>
	<span id="reqemail" class="required">This field is required</span>
	<input id="email" name="email" type="text" />
	<br />

	<label for="message">Message</label>
	<span id="reqmessage" class="required">This field is required</span>
	<textarea id="message" name="message"></textarea>
	<br />

	<input type="submit" />
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/js/contact.js"></script>

<?php include('includes/footer.php'); ?>
