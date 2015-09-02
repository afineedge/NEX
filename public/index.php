<?php 
if(isset($_POST['submit'])){
	$to      = 'admin@newenergyx.com'; 
	$subject = 'NEX Coming Soon Email Submission'; 
	$message = "Coming Soon Email Submission:" . "\n\n" . $_POST['email']; 
	$headers = 'From: admin@newenergyx.com' . "\r\n" . 
	    'Reply-To: admin@newenergyx.com' . "\r\n" . 
	    'X-Mailer: PHP/' . phpversion(); 
	mail($to, $subject, $message, $headers); 

    echo "Mail Sent. Thank you.";
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1, maximum-scale=1, minimal-ui">

<meta property="og:title" content="New Energy Exchange" />
<meta property="og:site_name" content="New Energy Exchange" />
<meta property="og:image" content="" />
<meta property="og:description" content="Empowering You to Make Smart Energy Choices" />
<meta property="og:url" content="" />

<!-- Update your html tag to include the itemscope and itemtype attributes. -->
<html itemscope itemtype="http://schema.org/Organization">

<!-- Add the following three tags inside head. -->
<meta itemprop="name" content="New Energy Exchange">
<meta itemprop="description" content="Empowering You to Make Smart Energy Choices">
<meta itemprop="image" content="">

<title>New Energy Exchange</title>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- Google Web Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,800,600' rel='stylesheet' type='text/css'>
<!-- Styles -->
<link rel="stylesheet" href="css/styles.css" />
</head>
<body>
	<div id="coming-soon-content">
		<div class="fullscreen-bg">
			<video autoplay loop poster="video/coming-soon/lightbulb-poster.jpg" class="fullscreen-bg-video">
			    <source src="video/coming-soon/lightbulb.webm" type="video/webm">
			    <source src="video/coming-soon/lightbulb.mp4" type="video/mp4">
			</video>
		</div>
		<div class="overlay active">
		</div>
		<div id="content">
			<div id="logo-section">
				<div id="logo">
					<img src="img/nex-logo-white.png" />
				</div>
				<div id="logo-subhead">
					<!-- Empowering You To Make<br/>
					Smart Energy Choices -->
					<img src="img/nex-logo-subhead-white.png" />
				</div>
			</div>
			<div id="inform-section">
				<h1>Coming Soon</h1>
				<h3>Want to be notified when we&nbsp;launch?</h3>
				<form action="" method="post">
					<?php if(isset($_POST['submit'])){ ?>
					<div class="alert alert-success" role="alert">Thank you for your interest in NEX!</div>
					<?php } ?>
					<div class="form-group">
						<div class="col-sm-8">
							<input type="email" class="form-control" placeholder="Enter Your Email" name="email" />
						</div>
						<div class="col-sm-4">
							<button type="submit" class="btn btn-primary btn-block" name="submit" value="submit">Submit</button>
						</div>
						<div class="clearfix"></div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script>

		$(document).ready(function(){
		});

	</script>
</body>
</html>