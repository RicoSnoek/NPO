<?php /* Smarty version Smarty-3.1.18, created on 2014-10-09 08:56:11
         compiled from "views\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30518541c651671cbe6-97936447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '765d62663ff840c30179c2633d916fc5606f6d1d' => 
    array (
      0 => 'views\\header.tpl',
      1 => 1412837769,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30518541c651671cbe6-97936447',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_541c6516774ee4_25089872',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541c6516774ee4_25089872')) {function content_541c6516774ee4_25089872($_smarty_tpl) {?><html>
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
						<<?php ?>?php 
						$i;
							for ($i = 2; $i < 25; $i++) { 
								echo $i; 
							} 
					?<?php ?>>
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
</html><?php }} ?>
