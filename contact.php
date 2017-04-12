<!DOCTYPE HTML>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Comedian Georgia Barnes - Contact</title>

	<link href="css/comedySitePages.css" rel="stylesheet">

	<!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

</head>

<body id="page-top">

	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
				data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> 
					Menu
					<i class="fa fa-bars"></i>
				</button>
				<a class="navbar-brand page-scroll" href="index.html"> 
				Comedian Georgia Barnes 
				</a>
			</div>

			<!-- nav links -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a class="page-scroll" href="bio.html">Bio</a>
					</li>
					<li>
						<a class="page-scroll" href="shows.html">Shows</a>
					</li>
					<li>
						<a class="page-scroll" href="video.html">Video</a>
					</li>
					<li>
						<a class="page-scroll" href="photos.html">Photos</a>
					</li>
					<li>
						<a class="page-scroll" href="contact.html">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>


    <section class="body">

    	<div class="container">
    		<h1 id="homeHeading" class="contact-header">Contact me</h1>
    		<hr/>
    	
    		<form method="post" action="contact.php">
        
		    	<label>Name</label>
		    	<input name="name" placeholder="Type Here">
		            
		    	<label>Email</label>
		    	<input name="email" type="email" placeholder="Type Here">
		            
		    	<label>Message</label>
		    	<textarea name="message" placeholder="Type Here"></textarea>
		        
		        <label>*What is 2+2? (Anti-spam)</label>
				<input name="human" placeholder="Type Here">

		    	<input id="submit" name="submit" type="submit" value="Submit">
		        
			</form>
		<?php
		    $name = $_POST['name'];
		    $email = $_POST['email'];
		    $message = $_POST['message'];
		    $from = 'From: TangledDemo'; 
		    $to = 'gbarnescomedy@gmail.com'; 
		    $subject = 'Hello';
		    $human = $_POST['human'];
					
		    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
						
		    if ($_POST['submit']) {
		    	if ($name != '' && $email != '') {
		        	if ($human == '4') {				 
		            	if (mail ($to, $subject, $body, $from)) { 
			        		echo '<p>Your message has been sent!</p>';
			    		} else { 
			        		echo '<p>Something went wrong, go back and try again!</p>'; 
			    		} 
					} else if ($_POST['submit'] && $human != '4') {
			    		echo '<p>You answered the anti-spam question incorrectly!</p>';
					}
		    	} else {
		        	echo '<p>You need to fill in all required fields!!</p>';
		    	}
			}
		?>

    	</div>
    </section>

</body>

</html>
