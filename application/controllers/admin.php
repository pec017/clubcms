<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){


		parent::__construct();

		//model
		$this->load->model('cms_model', 'm_cms');
		$this->load->model('adm_model', 'm_adm');


		//helper
		$this->load->helper('url');

		//library
		$this->load->library('typography');
	}

	private function get_page($page, $data){

		return $this->load->view($page, $data, true);
	}

	private function js_redirect($str, $path = 'admin/info'){

		echo "<script>"."alert(\"$str\");"."location.href=\"".site_url($path)."\";"."</script>";
	}


	//***************************************************

	//todo 
	//for logging in
	function index(){


	}

	//account information
	function info(){

		$data['category'] = $this->m_cms->get_category();

		$data['title'] = '个人设置';

		date_default_timezone_set('PRC');
		$data['content'] = '欢迎回来，管理员！<br><br>'.'现在时间是：'.date('l dS \of F Y h:i:s A').'<br><br>'.'祝您工作学习愉快！';

		$this->load->view('admin/info', $data);
	}

	//manage category
	function category(){

		$data['category'] = $this->m_cms->get_category();

		$data['title'] = '类别管理';

		$data['content'] = $this->get_page('admin/category', $data);

		$this->load->view('admin/info', $data);
	}

	function do_category_add(){

		$category_name = $this->input->post('category_name');

		$query = $this->m_adm->add_category(array('category_name' => $category_name));

		$this->js_redirect($query?'成功':'失败');
	}

	function do_category_del($category_id){

		$category_id = (int)$category_id;

		$query = $this->m_adm->del_category(array('category_id' => $category_id));

		$this->js_redirect($query?'成功':'失败');
	}

	//article add
	function article_add(){

		$data['category'] = $this->m_cms->get_category();

		$data['title'] = '新增文章';

		$data['content'] = $this->get_page('admin/article_add', $data);

		$this->load->view('admin/info', $data);
	}

	function do_article_add(){

		$data['title'] = $this->input->post('title');

		$content = $this->input->post('content');
		$data['content'] = $this->typography->auto_typography($content);

		$data['category_id'] = (int)$this->input->post('category_id');

		$query = $this->m_adm->add_article($data);

		$this->js_redirect($query?'成功':'失败');
	}

	//article del
	function article_del(){

		$data['article'] = $this->m_cms->get_article();

		$data['title'] = '删除文章';

		$data['content'] = $this->get_page('admin/article_del', $data);

		$this->load->view('admin/info', $data);
	}

	function do_article_del($article_id){

		$data['article_id'] = (int)$article_id;

		$query = $this->m_adm->del_article($data);

		$this->js_redirect($query?'成功':'失败');
	}

}