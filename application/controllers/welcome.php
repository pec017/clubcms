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

		$query = $this->m_cms->get_article(array('category_id' => 1));

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

		//the carousel
		$data['carousel'] = $this->m_cms->get_carousel(array('display' => 1));

		//category list
		$data['category'] = $this->m_cms->get_category(array('display' => 1));

		//articles display on the index
		foreach ($data['category']->result() as $key => $value) {
			$data['article'][$key] = $this->m_cms->get_article(array('category_id' => (int)$value->id, 'limit' => 5));	
		}

		$this->load->view('index', $data);
	}

	public function category($category_id){

		$category_id = (int)$category_id;

		//category list
		$data['category'] = $this->m_cms->get_category();

		//article of the category list
		$data['article'] = $this->m_cms->get_article(array('category_id' => $category_id));

		$this->load->view('category', $data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */