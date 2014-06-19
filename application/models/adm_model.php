<?php 
class Adm_model extends CI_Model {

	function __construct(){

		parent::__construct();

		$this->load->database();
	}

	//category

	function add_category($condition = array()){

		$where = array();

		if(!isset($condition['category_name']) || empty($condition['category_name'])){
			return false;
		}

		$where['name'] = $condition['category_name'];
		$where['display'] = 0;

		return $query = $this->db->insert('tb_category', $where);
	}

	function del_category($condition = array()){

		$where = array();

		if(!isset($condition['category_id']) || empty($condition['category_id']) ){
			return false;
		}

		$where['id'] = (int)$condition['category_id'];

		return $query = $this->db->delete('tb_category', $where);
	}


	//article 

	function add_article($condition = array()){

		$where = array();

		if(!isset($condition['title']) || empty($condition['title'])){
			return false;
		}

		if(!isset($condition['category_id']) || empty($condition['category_id'])){
			return false;
		}

		if(!isset($condition['content']) || empty($condition['content'])){
			return false;
		}

		$where['title'] = $condition['title'];
		$where['category_id'] = (int)$condition['category_id'];
		$where['content'] = $condition['content'];

		return $query = $this->db->insert('tb_article', $where);
	}

	function del_article($condition = array()){

		$where = array();

		if(!isset($condition['article_id']) || empty($condition['article_id'])){
			return false;
		}

		$where['id'] = (int)$condition['article_id'];

		return $query = $this->db->delete('tb_article', $where);
	}


	//user 
	function get_user($condition = array()){

		$where = array();

		if(!isset($condition['username']) || empty($condition['username'])){
			return false;
		}

		if(!isset($condition['password']) || empty($condition['password'])){
			return false;
		}

		$where['username'] = $condition['username'];
		$where['password'] = $condition['password'];

		return $query = $this->db->get_where('tb_user', $where);
	}


	//carousel
	function add_carousel($condition = array()){

		$where = array();

		if(!isset($condition['content_h']) || empty($condition['content_h'])){
			return false;
		}

		if(!isset($condition['content_p']) || empty($condition['content_p'])){
			return false;
		}

		if(!isset($condition['content_btn']) || empty($condition['content_btn'])){
			return false;
		}

		if(!isset($condition['img_src']) || empty($condition['img_src'])){
			return false;
		}

		$where['content_h'] = $condition['content_h'];
		$where['content_p'] = $condition['content_p'];
		$where['content_btn'] = $condition['content_btn'];
		$where['img_src'] = $condition['img_src'];

		return $query = $this->db->insert('tb_carousel', $where);
	}

	function del_carousel($condition = array()){

		$where = array();

		if(!isset($condition['carousel_id']) || empty($condition['carousel_id'])){
			return false;
		}

		$where['id'] = (int)$condition['carousel_id'];

		return $query = $this->db->delete('tb_carousel', $where);
	}

}