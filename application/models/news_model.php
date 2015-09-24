<?php
class News_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	/**
	* Gets all news items in the table "news", or one news entry
	* by its $slug index
	*
	* @aparam 	string $slug 
	* @return  	array array of rows in news table, or array of columns of one row 
	*/
	public function get_news($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$query = $this->db->get('news');
			return $query->result_array();
		}
	}
}

/* End of file news_model.php */
/* Location: ./application/models/news_model.php */