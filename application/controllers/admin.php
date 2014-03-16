<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){

		parent::__construct();

		//model
		$this->load->model('cms_model', 'm_cms');
		$this->load->model('adm_model', 'm_adm');


		//helper
		$this->load->helper('url');
		$this->load->helper('date');

		//library
		$this->load->library('typography');
		$this->load->library('session');
	}

	private function get_page($page, $data){

		return $this->load->view($page, $data, true);
	}

	private function js_redirect($str, $path = 'admin/info'){

		echo "<script>"."alert(\"$str\");"."location.href=\"".site_url($path)."\";"."</script>";
	}

	private function check_log(){

		if(!$this->session->userdata('user_id'))
			redirect('admin/index');
	}


	//***************************************************

	function test(){

		$data = $this->m_cms->get_carousel()->result();

		print_r($data);
	}

	//log in
	function index(){

		$this->load->view('admin/login');
	}

	function do_login(){
		
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');

		$query = $this->m_adm->get_user($data);
		if(!$query || 0==$query->num_rows){
			$this->js_redirect('用户名密码错误！', 'admin/index');
			return;
		}

		$result = $query->result()[0];

		$session['user_id'] = $result->user_id;
		$session['true_name'] = $result->true_name;
		$this->session->set_userdata($session);

		redirect('admin/info');
	}

	function do_logout(){

		$this->session->unset_userdata('user_id');
		redirect('admin/index');
	}

	//account information
	function info(){

		$this->check_log();

		$data['category'] = $this->m_cms->get_category();

		$data['title'] = '个人设置';

		date_default_timezone_set('PRC');
		$data['content'] = '欢迎回来，管理员！<br><br>'.'现在时间是：'.date('l dS \of F Y h:i:s A').'<br><br>'.'祝您工作学习愉快！';

		$this->load->view('admin/info', $data);
	}

	//carousel
	function carousel(){

		$this->check_log();

		$data['carousel'] = $this->m_cms->get_carousel();

		$data['title'] = '轮播管理';

		$data['content'] = $this->get_page('admin/carousel', $data);

		$this->load->view('admin/info', $data);
	}

	function do_carousel_add(){

		$this->check_log();

		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '2000';
		$config['encrypt_name'] = true;

		$this->load->library('upload', $config);

		if(!$this->upload->do_upload('c_img')){
			$this->js_redirect($this->upload->display_errors());
			return;
		}

		$img_data = $this->upload->data();

		$data['img_src'] = $img_data['file_name'];
		$data['content_h'] = $this->input->post('c_head');
		$data['content_p'] = $this->input->post('c_para');
		$data['content_btn'] = $this->input->post('c_btn');

		$query = $this->m_adm->add_carousel($data);

		$this->js_redirect($query?'成功':'失败');
	}

	function do_carousel_del($carousel_id){

		$this->check_log();

		$carousel_id = (int)$carousel_id;

		$data['carousel_id'] = $carousel_id;

		$query = $this->m_adm->del_carousel($data);

		$this->js_redirect($query?'成功':'失败');
	}


	//manage category
	function category(){

		$this->check_log();

		$data['category'] = $this->m_cms->get_category();

		$data['title'] = '类别管理';

		$data['content'] = $this->get_page('admin/category', $data);

		$this->load->view('admin/info', $data);
	}

	function do_category_add(){

		$this->check_log();

		$category_name = $this->input->post('category_name');

		$query = $this->m_adm->add_category(array('category_name' => $category_name));

		$this->js_redirect($query?'成功':'失败');
	}

	function do_category_del($category_id){

		$this->check_log();

		$category_id = (int)$category_id;

		$query = $this->m_adm->del_category(array('category_id' => $category_id));

		$this->js_redirect($query?'成功':'失败');
	}

	//article add
	function article_add(){

		$this->check_log();

		$data['category'] = $this->m_cms->get_category();

		$data['title'] = '新增文章';

		$data['content'] = $this->get_page('admin/article_add', $data);

		$this->load->view('admin/info', $data);
	}

	function do_article_add(){

		$this->check_log();

		$data['title'] = $this->input->post('title');

		$content = $this->input->post('content');
		$data['content'] = $this->typography->auto_typography($content);

		$data['category_id'] = (int)$this->input->post('category_id');

		$query = $this->m_adm->add_article($data);

		$this->js_redirect($query?'成功':'失败');
	}

	//article del
	function article_del(){

		$this->check_log();

		$data['article'] = $this->m_cms->get_article();

		$data['title'] = '删除文章';

		$data['content'] = $this->get_page('admin/article_del', $data);

		$this->load->view('admin/info', $data);
	}

	function do_article_del($article_id){

		$this->check_log();

		$data['article_id'] = (int)$article_id;

		$query = $this->m_adm->del_article($data);

		$this->js_redirect($query?'成功':'失败');
	}

}