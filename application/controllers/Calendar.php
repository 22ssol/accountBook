<?php

class calendar extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('calendar_model');
	}


	public function index()
	{
		$this->cal();
	}

	private function holiday()
	{ // private 함수 선언해서 내가 일반적으로 생각하는 함수.
		$result['list'] = $this->calendar_model->holiday_date(); //model에서 결과값을 배열로 보냄

		return $result;

	}

	public function cal($year = 0, $month = 0)
	{

		$result['list'] = $this->holiday();

		$thisyear = date('Y');
		$thismonth = date('m');
		$today = date('j');

		//------ $year, $month 값이 없으면 현재 날짜
		if (empty($year)) $year = $thisyear;
		if (empty($month)) $month = $thismonth;

		//$year = isset($year) ? $year : $thisyear;
		//$month = isset($_GET['month']) ? $_GET['month'] : $thismonth;
		$day = isset($_GET['day']) ? $_GET['day'] : $today;

		$prev_month = sprintf('%02d', $month - 1);
		$next_month = sprintf('%02d', $month + 1);;
		$prev_year = $next_year = $year;


		if ($month == 01) {
			$prev_month = 12;
			$prev_year = $year - 1;
		} else if ($month == 12) {
			$next_month = 01;
			$next_year = $year + 1;
		}

		$preyear = $year - 1;
		$nextyear = $year + 1;

		$predate = date("Y-m-d", mktime(0, 0, 0, $month - 1, 1, $year));
		$nextdate = date("Y-m-d", mktime(0, 0, 0, $month + 1, 1, $year));

		$max_day = date('t', mktime(0, 0, 0, $month, 1, $year)); // 해당월의 마지막 날짜
		// 2. 시작요일 구하기
		$start_week = date("w", mktime(0, 0, 0, $month, 1, $year)); // 일요일 0, 토요일 6

		// 3. 총 몇 주인지 구하기
		$total_week = ceil(($max_day + $start_week) / 7);

		// 4. 마지막 요일 구하기
		$last_week = date('w', mktime(0, 0, 0, $month, $max_day, $year));
		$day = 1;

		$calendar_data = array(
			'year' => $year,
			'month' => $month,
			'today' => $today,
			'max_day' => $max_day,
			'start_week' => $start_week,
			'total_week' => $total_week,
			'last_week' => $last_week,
			'day' => $day,
			'thisyear' => $thisyear,
			'thismonth' => $thismonth,
			'prev_month' => $prev_month,
			'next_month' => $next_month,
			'prev_year' => $prev_year,
			'next_year' => $next_year,
			'holiday_list' => $result['list']
		);

		$this->load->view('calendar_v', $calendar_data);

	}

	public function priceList()
	{
		$result['list'] = $this->calendar_model->price_list();

		$this->load->view('list', $result);
	}

	public function insert()
	{ // 내용 추가

		$this->calendar_model->price_insert();

//		$result = $this->calendar_model->price_list();
//		print_r($result2);

	}

	public function delete()
	{ // 내용 삭제

		$this->calendar_model->price_delete();

	}


}
