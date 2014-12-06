<div id="logo_div">
	<a href="<?php echo base_url(); ?>"><img src="/assets/img/logo_text_a.png" alt="The Creativity Co-Op"></a>
</div>
<div id="nav_bar">
	<?php echo anchor(base_url(), 'Home'); ?> <?php echo "     |     "; ?> <span id="about_span" onclick="init_about_dialog();">About</span> <?php echo "     |     "; ?> <span id="contact_span" onclick="init_contact_dialog();">Contact</span>
</div>