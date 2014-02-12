<?php
//The model of cms to get data from database
class Cms_model extends CI_Model {

	function __construct(){

		parent::__construct();
		//database
		$this->load->database();
	}

	function get_carousel(){

		$where['display'] = 1; 
		$query = $this->db->get_where('tb_carousel', $where);

		return $query;	
	}

}