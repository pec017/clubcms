<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){

		parent::__construct();

		//model
		$this->load->model('cms_model', 'm_cms');

		//helper
		$this->load->helper('url');
	}

	//for testing anything
	function test(){

		$query = $this->m_cms->get_carousel();

		print_r($query);
		print_r($query->result());
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){

		$data['carousel'] = $this->m_cms->get_carousel();

		$this->load->view('index', $data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */