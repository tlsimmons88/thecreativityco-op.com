<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Sets the variable $head to use the slice head (/views/slices/head.php)
		$this->stencil->slice('head');

		//Sets the variable $header to use the slice header (/views/slices/header.php)
		$this->stencil->slice('header');
	}

	public function index()
	{
		//Sets the variable $title to be used in your views
		$this->stencil->title('The Creativity Co-Op');

		//Sets the layout to be home_layout (/views/layouts/home_layout.php)
		$this->stencil->layout('home_layout');

		//Add Sidebar slice
		//$this->stencil->slice('sidebar');

		//Add About div slice
		$this->stencil->slice('about');

		//Add Contact div slice
		$this->stencil->slice('contact');

		//Adds Font-Awesome to the homepage (/assets/css/font-awesome.css)
		$this->stencil->css('font-awesome');

		//About Slice
		$data['about_message_data'] = "<p>The Creativity Co-Op is a growing crafting business serving Maricopa and its surrounding areas.  We currently offer ceramics, but will expand to offer paper crafting, beading and canvas painting as well.  If you are looking for a fun, creative and affordable activity for you and your family we can help!</p>
									   <br>
									   <p>Tanya Alvarado, the owner of The Creativity Co-Op, continues to expand her knowledge in the area of ceramics through Duncan University training.  She is a Certified Duncan Ceramics Teacher who enjoys working with painters of all ages and skill levels.<p>";

		//Contact Slice
		$data['contact_name_lable'] = "Owner:  ";
		$data['contact_name_data'] = "Tanya Alvarado";

		$data['contact_phone_lable'] = "Phone:  ";
		$data['contact_phone_data'] = "(520) 705-8895";

		$data['contact_email_lable'] = "E-mail:  ";
		$data['contact_email_data'] = "contact@thecreativityco-op.com";

		$data['contact_external_site_lable'] = "Facebook:  ";
		$data['contact_external_site_data'] = "https://www.facebook.com/thecreativityco.op";

		//Mixes everything together and loads the home_view as the $content variable in the layout
		//home_view is located here: /views/pages/home_view.php
		$this->stencil->paint('home_view', $data);
	}

	//Example of using a different Layout
	public function subpage()
	{
		$this->stencil->title('Subpage Example');
		$this->stencil->layout('subpage_layout');

		//Slices are view snippets that can be reused over and over again.
		//They can either be simple and basic or very robust and powerful.
		//For full explanation of what they can do, please visit the docs.
		$this->stencil->slice('sidebar');

		$data['subpage_text'] = 'A Subpage Example!';
		$this->stencil->paint('example_view', $data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */