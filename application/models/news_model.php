<?php
class News_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	/**
	* Gets all news items in the table "news", sorted by date
	*
	* @return  	array array of rows in news table 
	*/
	public function get_news(){	
		$this->db->order_by('ts','desc');
		$query = $this->db->get('news');
		return $query->result_array();
	}
}

/* End of file news_model.php */
/* Location: ./application/models/news_model.php */