<?php
$error = false;
if(isset($_REQUEST['action'])) {
	switch($_REQUEST['action']) {
		case 'contact':
			require_once "./lib/Contact.php"; 
			$valid = Contact::create($_POST);
			if(!$valid) {
				$error = 'Contact failed.';
			}
		break;
	}		 
}

require_once "./header.php";

?>
<link rel="stylesheet" href="css/contact.css?v=<?php echo time ();?>">
</head>

<body>

	<div class="container">
		<?php
		require_once "./nav.php";

		?>


		<img src="img/object1.png" class="object1">
		<img src="img/object2.png" class="object2">
		<div class="content">
			<div class="content-text">
			<form name="forma" method="POST" action="ContactUs.php?action=contact" onsubmit="return validate(event)">

				<label for="fname">Name</label>
				<input type="text" id="fname" name="name" placeholder="Your name..">

				<label for="fname">Email</label>
				<input type="text" id="fname" name="email" placeholder="Your email..">

				<label for="fname">Phone Number</label>
				<input type="text" id="fname" name="phone" placeholder="Your phone number..">

				
				<label for="subject">Message</label>
				<textarea id="subject" name="message" placeholder="Write something.." style="height:200px"></textarea>

				<input type="submit" value="Submit" name="submit">

			</div>
		</div>
        </form>

		<i class="fas fa-adjust mode"></i>
	</div>
	<script src="js/page.js"></script>
</body>

</html>