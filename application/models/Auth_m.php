<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class auth_m extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * 아이디 비밀번호 체크
	 *
	 * @param array $auth 폼 전송받은 아이디, 비밀번호
	 * @return array
	 */
	function login($auth)
	{
		$sql = "SELECT id FROM member WHERE usernaWme = '" . $auth['id'] . "' AND password = '" . $auth['pwd'] . "' ";

		$query = $this->db->query($sql);

		if ($query->num_rows() > 0) {
			return $query->row();
		} else {
			return FALSE;
		}
	}

}
