<?php

class calendar_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function holiday_date()
	{
		$sql = 'select * from holiday';
		$query = $this->db->query($sql);
		return $query->result_array();
	}

}
