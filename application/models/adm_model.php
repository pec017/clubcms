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
			echo 'category';
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
}