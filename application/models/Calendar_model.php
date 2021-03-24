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
	{ //목록보기
		$sql = 'select * from price_tb';
		$query = $this->db->query($sql);
		return $query->result_array();
	}

/*	function price_insert($name,$date,$price,$etc=null)
	{ // 정보 입력
		$sql = "INSERT INTO price_tb (name, date, price, etc) VALUES ($name,$date, $price,$etc);";

		$query = $this->db->query($sql);
		return $query;

	}*/

	function price_insert($name,$insertdate,$price,$etc=null){
		$table = "price_tb";
		$sql = "INSERT INTO " . $table . " (name, insertdate, price, etc) VALUE (?, ?, ?, ?)";

		return $this->db->query($sql, [$name, $price, $etc, date("Y-m-d", $insertdate)]);
	}


}
