<?php
class web_data extends CI_Model{
/* ------------------------------------------ POSTING -------------------*/
	function get_newest_news($total = 5) {
		$news_table		= 'news';
		$news_id_field  = 'id_news';
				
		$_query  = "SELECT * FROM $news_table";
		$_query .= " ORDER BY $news_id_field DESC LIMIT $total";
		$query = $this->db->query($_query);
        return $query->result();
	}
	function get_news_id($id) {
		$news_table		= 'news';
		$news_id_field  = 'id_news';
				
		$_query  = "SELECT * FROM $news_table WHERE id_news = $id";
		$query = $this->db->query($_query);
        return $query->row();
	}
}