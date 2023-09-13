<?php
class Language_model extends CI_Model {
 
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	function orders_count(){
		 $this->db->where('status', 1);
		 return $this->db->count_all("order");
	}
	function languages(){
		$query = $this->db->order_by('default', 'desc')->get('language');
        return $query->result();
    }
	
	function get_language($language_id){
		$query = $this->db->query("SELECT * FROM language WHERE id = '".$language_id."'");
		return  $query->row('language_name');
	}
}