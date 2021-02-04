<?php

class calendar_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function holiday_date() //저장된 공휴일 불러오기
	{
		$sql = 'select * from holiday';
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	//function price_insert($name,$date,$price,$etc)

	function price_list(){
		$sql = 'select * from price_tb';
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	function price_insert()
	{ // 입력
		$sql = 'INSERT INTO `price_tb` (`name`, `date`, `price`) VALUES ('ho', '2021-02-03', '4000');';

		$query = $this->db->query($sql);
		return $query;

	}

}
