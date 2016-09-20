<div id="header">
<a href="index.php" ><img src="../images/lgo.jpg" alt="logo" class="pic" /></a>
<h1>Correy Winke Portfolio</h1>
    </div>
    <!-- don't rember why I have two navas-->

    <header>
		<a href="#" class="menu-toggle">Nav Manu</a>
		<nav class="menu-side">
			<ul>
				<li><a href="../index.php" class="current1">Home</a></li>
    	<li><a href="profile.php" class="current2">Profile</a></li>
    	<li><a href="about.php" class="current3">About</a></li>
    	<li><a href="contact.php" class="current4">Contact</a> </li>
        <li><a href="unity.php" class="current5">Unity</a></li>
        <li><a href="unity2.php" class="current6">Project 2</a></li>
                <li><a href="unity4.php" class="current8">Project 4</a></li>
			</ul>
		</nav>
	</header>
	<script src="../js/jquery-1.11.1.min.js"></script>
	<script>
	(function(){
		var body = $('body');
		$('.menu-toggle').bind('click', function(){
			body.toggleClass('menu-open');
			return false;
		});
	})();
	</script>
