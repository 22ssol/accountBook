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

	function price_list()
	{
		$sql = 'select * from price_tb';
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	function price_insert()
	{ // 입력
		$sql = "INSERT INTO price_tb (name, date, price) VALUES ('이름','2021-02-17', '5000');";

		$query = $this->db->query($sql);
		return $query;

	}

	function price_delete()
	{ // 삭제
		$sql = "delete from price_tb where name='이름';";

		$query = $this->db->query($sql);
		return $query;

	}

}
