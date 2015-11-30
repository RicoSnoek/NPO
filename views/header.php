<html>
<head>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>

	<h1 id="logo"></h1>

	<h2 id="tourTitel"></h2>

	<img src="Images/Radio.png" id="Live">

	<nav class="main">
        <ul>
	        <li><a href="?action=newsarticles">RADIO1.NL</a></li>
	        <li><a href="?action=information">TOUR TOP 100</a></li>
	    <li>
		    <form method="post" action="?action=search">
				<input type="search" name="searchstring">			
			</form>
		</li>
		</ul>
	</nav>

	<section id="content">
			<div class="calender">
				<ul>
					<li class="month">Juli</li>
						<?php 
							for ($i = 2; $i < 25; $i++) { 
								echo '<li>' . $i . '</li>'; 
							} 
					?>
				</ul>
			</div>
			<section id="banners">
				<img src="Images/Banner_Top_100.png">
				<img src="Images/Banner_Prijsvraag.png">
				<img src="Images/Banner_Titel.png">
				<img src="Images/Banner_Testimonials.png">
				<img src="Images/Twitter.png">
			</section>
	</section>

</body>
</html>