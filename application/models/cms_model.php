<?php
//The model of cms to get data from database
class Cms_model extends CI_Model {

	function __construct(){

		parent::__construct();

		//database
		$this->load->database();
	}

	function get_carousel($condition = array()){

		$where = array();

		//carousel display on the index
		if(isset($condition['display']))
			$where['display'] = $condition['display'];

		$query = $this->db->get_where('tb_carousel', $where);

		return $query;
	}

	function get_category($condition = array()){

		$where = array();

		//category display on the index
		if(isset($condition['display']))
			$where['display'] = $condition['display'];

		$query = $this->db->get_where('tb_category', $where);

		return $query;
	}

}