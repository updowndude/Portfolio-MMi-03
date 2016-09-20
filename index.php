<!doctype html>
<html>
<head>
  <!-- links pages to toghter with content -->
<meta charset="UTF-8">       
<link href="css/desktop.css" rel="stylesheet" type="text/css">
<link href="css/mobile.css" rel="stylesheet" type="text/css">
<!--<link href="../slideout-0.1.9/index.css" rel="stylesheet" type="text/css">-->
<link href="css/reset.css" rel="stylesheet" type="text/css">
<meta name="description" content=" correy winke profile">
<meta name="author" content="Correy Winke">
 <!--<meta http-equiv="refresh" content="3"> -->
<!-- <script type="text/javascript" src="../js/html5shiv.js"></script> -->
<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'><!-- head -->
<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'> <!-- headers -->
<link rel="icon" type="image/gif" href="../images/favicon.ico" />
<link rel="shortcut icon" href="../images/favicon.ico" />
<script src="js/contact-validator.js" language="javascript" type="text/javascript"></script>

<title>Home</title>
</head>

<body class="b1">
<div id="stuff">
<div id="container">

  <div id="header">
  <a href="index.php" ><img src="images/lgo.jpg" alt="logo" class="pic" /></a>
  <a href="index.php" ><img src="images/logo.jpg" alt="logo" class="pic2" /></a>
  <h1>Correy Winke Portfolio</h1>
      </div>

      <!-- nav menu-->
      <header>
  		<a href="#" class="menu-toggle">Nav Manu</a>
  		<nav class="menu-side">
  			<ul>
  				<li><a href="index.php" class="current1">Home</a></li>
      			<li><a href="php/profile.php" class="current2">Profile</a></li>
      			<li><a href="php/about.php" class="current3">About</a></li>
      			<li><a href="php/contact.php" class="current4">Contact</a> </li>
          		<li><a href="php/unity.php" class="current5">Unity</a></li>
          		<li><a href="php/unity2.php" class="current6">Project 2</a></li>
                  <li><a href="php/unity4.php" class="current8">Project 4</a></li>
  			</ul>
  		</nav>
  	</header>
  	<script src="js/jquery-1.11.1.min.js"></script>
    <!-- need it's own file-->
  	<script>
  	(function(){
  		var body = $('body');
  		$('.menu-toggle').bind('click', function(){
  			body.toggleClass('menu-open');
  			return false;
  		});
  	})();
  	</script>


    <!-- hover content on page that on left  --->
    <div id="links">
    <a href="https://www.facebook.com/profile.php?id=100009007188851" ><img src="images/facebook.png" alt="facebook" class="pic3" /></a>
    <a href="https://www.youtube.com/user/upwedude" ><img src="images/youtube.png" alt="youtube" class="pic32" /></a>
    </div>


    <div id="content">

    <h2>portfolio</h2>
    <img src="images/aboutme.jpg" alt="aboutme" class="images" />
    <p>I am Correy Winke.  I am attending Minneapolis Media Institute. I am working on my Mobile Applications certificate.  I will complete that this summer.  I am enrolled at Blackhawk Technical College starting in the fall.  I will be working to obtain my associates degree in the IT area. </p>
	<br>
<p>I completed my first semester at MMI with honors.  I also obtained honors each semester during high school.  My biggest challenge is my dyslexia.  Math and computers are my areas that I excel  in.  Writing is difficult for me, and my reading rate is slow, but I work very hard to succeed.   I use a variety of tools to assist me with learning.  I am very driven to complete my tasks in a timely manner.  This is demonstrated by my ability to excel in the online learning environment.  I am able prioritize my time on a daily basis to complete all assignments on time.</p>
<br>
<p>In looking at the future, my goal is to be working in the IT environment and utilizing the education that I have received.
</p>
   </div>

    </div>
<?php include 'includes/footer.php'; ?>
