<?php
class calendar extends CI_Controller {


	public function index(){
		$year =  date('Y');
		$month =  date('m');

		echo $year."-".$month;

		$max_day = date('t', mktime(0, 0, 0, $month, 1, $year)); // 해당월의 마지막 날짜
        echo '총요일수'.$max_day.'<br />';

	}


}
