<?php
$this->load->helper('html');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<?php 
			if (isset($description))
			{
		?>
		<meta name="description" content="<?=$description?>" />
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
				'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js',	
				'javascript/portal.js?' . filemtime(FCPATH . 'javascript/portal.js')
			);
			$cssTags = array(
				'stylesheets/screen.css?' . filemtime(FCPATH . 'stylesheets/screen.css')
			);
			foreach($jsTags as $tag)
			{
				echo link_tag($tag);
			}
			foreach($cssTags as $tag)
			{
				echo link_tag($tag);
			}
		?>
	</head>

	<body>
		<div class="container">
			<div class="sidebar">
				<nav>
					<ul class="navigation-list">
						<li class="navigation-list__title">Title</li>
						<li class="navigation-list__item"><a href="#">Item</a></li>
					</ul>
				</nav>
			</div>
			<?=$content_for_layout?>
		</div>
	</body>
</html>
