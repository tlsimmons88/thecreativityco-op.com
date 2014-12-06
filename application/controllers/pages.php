<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->stencil->slice(array('head', 'header', 'sidebar'));
		$this->stencil->layout('home_layout');
	}

  	function index()
 	{
		switch ($this->uri->segment(1)) 
		{
			// This is used for quick static pages without having to deal with routing (see routes.php and the docs for more info)
			// Just make the "case" look exactly like the URL you want
			case 'coming-soon' :
				$this->stencil->title('Coming Soon');
				$data['subpage_text'] = 'This page is coming soon!';
				$this->stencil->data($data);
				$this->stencil->paint('coming_soon_view');
				break;
			
			default :
				$this->output->set_status_header('404');
				
				$this->stencil->title('404 Page Not Found');
				$data['subpage_text'] = '404 Page Does not Exist!';
				$this->stencil->data($data);
				$this->stencil->paint('404_view');
				break;
		}
	}
}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */