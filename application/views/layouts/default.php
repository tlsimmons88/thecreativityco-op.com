<?php
$this->load->helper('html');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<?php 
			if (isset($description_for_layout))
			{
		?>
		<meta name="description" content="<?=$description_for_layout?>" />
		<?php
			}
			else
			{
		?>
		<meta name="description" content="@TODO Default Descrtiption." />
		<?php
			}
		?>
		<title><?=$title_for_layout?></title>
		<?php
			$jsTags = array(
				'//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js',
				'/javascript/bootstrap.min.js',
				'/javascript/scripts.js?' . filemtime(FCPATH . 'javascript/scripts.js')
			);
			$cssTags = array(
				'/stylesheets/font-awesome.css',
				'/stylesheets/bootstrap.css',
				'/stylesheets/bootstrap-responsive.css',
				'/stylesheets/screen.css?' . filemtime(FCPATH . 'stylesheets/screen.css')
			);
			foreach($jsTags as $tag)
			{
				?>
		<script src="<?=$tag?>"></script>
			<?php
			}
			foreach($cssTags as $tag)
			{
				?>
		<link href="<?=$tag?>" rel="stylesheet">
			<?php
			}
		?>
	</head>

	<body>
		<header>
			Lets fill this with a header
		</header>

		<div class="container">
			<div class="sidebar">
				<nav>
					<ul class="navigation-list">
						<li class="navigation-list__title">Title</li>
						<li class="navigation-list__item"><a href="#">Item</a></li>
					</ul>
				</nav>
			</div>
			<div class="content">
				<?= $this->load->view($view , $data) ?>
			</div>
		</div>

		<footer>
			<p>Copyright &copy; The Creativity Co-Op - All rights reserved</p>
		</footer>
	</body>
</html>
