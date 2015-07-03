<?php
class web_admin extends CI_Model{
/* ------------------------------------------ POSTING -------------------*/
	function user_authenticate($_username, $_md5pass) {
		$query = $this->db->query("SELECT * FROM user WHERE (username = ?) AND (password = ?)", array($_username, $_md5pass));
		return $query->row();
	}
}