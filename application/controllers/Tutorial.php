<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutorial extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function index()
	{
		$result = $this->db->query('select * from member')->result();
		foreach ($result as $item) {
			echo $item->name.'  ';
			echo $item->id.'  ';
		}
	}

	public function second()
	{
		echo "Hello Second";
	}
}
?>
