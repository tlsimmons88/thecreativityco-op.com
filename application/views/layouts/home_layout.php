<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html> <!--<![endif]-->
	<head>
		<?php echo $head; ?>
	</head>
	<body class="<?php echo $body_class; ?>">
		<header>
			<?php echo $header; ?>
		</header>
		<div class="container">
			<section class="row">
				<div> <!--class="span8"-->
					<?php echo $content; ?>
				</div>
				<!--<div class="span4">
					<?php echo $sidebar; ?>
				</div>-->
			</section>
		</div>
		<div id="about_dialog" style="display: none;">
			<?php echo $about; ?>
		</div>
		<div id="contact_dialog" style="display: none;">
			<?php echo $contact; ?>
		</div>
		<br>
		<footer class="container" style="text-align:center">
			<p>Copyright &copy; The Creativity Co-Op - All rights reserved</p>
		</footer>
	</body>
</html>
