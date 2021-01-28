<?php

class calendar_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function test()
	{
		$sql = 'select * from holiday';
		$query = $this->db->query($sql);
		return $query->result_array();
	}

}
