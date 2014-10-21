<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Layout
{
	protected $data = array();
	protected $view = null;
	protected $viewFolder = null;
	protected $layoutsFodler = 'layouts';
	protected $layout = 'default';
	protected $title = null;
	protected $description = null;
	
	protected $obj;

	function __construct()
	{
		$this->obj =& get_instance();
	}

	function setLayout($layout)
        {
	        $this->layout = $layout;
	}

	function setLayoutFolder($layoutFolder)
	{
		$this->layoutsFodler = $layoutFolder;
	}

	function setTitle($title)
	{
		$this->title = (string) $title;
	}

	function setDescription($description)
	{
		$this->description = (string) $description;
	}

	function render($data = array())
	{
	        $controller = $this->obj->router->fetch_class();
		$method = $this->obj->router->fetch_method();
		$viewFolder = !($this->viewFolder) ? $controller : $this->viewFolder;
		$view = !($this->view) ? $method : $this->view;
		
		$loadedData = array();
		$loadedData['title_for_layout'] = !($this->title) ? $controller . '-' . $method : $this->title;
		$loadedData['description_for_layout'] = !($this->description) ? null : $this->description;
		$loadedData['view'] = $viewFolder.'/'.$view;
		$loadedData['data'] = $this->data;
	        $layoutPath = '/'.$this->layoutsFodler.'/'.$this->layout;
	        $this->obj->load->view($layoutPath, $loadedData);
	}
}
