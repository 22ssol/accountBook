<?php
class calendar extends CI_Controller {


	public function index(){



	}

	function test(){

		echo  date('j');;

		
	}

	function cal($year=0,$month=0){

		$thisyear =  date('Y');
		$thismonth =  date('m');
		$today = date('j');

		//------ $year, $month 값이 없으면 현재 날짜
		if($year){
			$year = $year;
		}else{
			$year = $thisyear;
		}

		if($month){
			$month = $month;
		}else{
			$month = $thismonth;
		}
		
		//$year = isset($year) ? $year : $thisyear;
		//$month = isset($_GET['month']) ? $_GET['month'] : $thismonth;
		$day = isset($_GET['day']) ? $_GET['day'] : $today;

		$prev_month = $month - 1;
		$next_month = $month + 1;
		$prev_year = $next_year = $year;
		if ($month == 1) {
			$prev_month = 12;
			$prev_year = $year - 1;
		} else if ($month == 12) {
			$next_month = 1;
			$next_year = $year + 1;
		}
		$preyear = $year - 1;
		$nextyear = $year + 1;




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
			'next_month' => $next_month
		);
		$this->load->view('calendar_v',$calendar_data);

	}


}
