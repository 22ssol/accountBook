<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<title>My Calendar</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link type="text/css" rel='stylesheet' href="/bbs/include/css/bootstrap.css" />
</head>

<style>
	table{ border-collapse: collapse;float: left;}
	th,td{border: 1px solid #1f1d1d;padding:10px;}
</style>

<table>
	<tr>
		<th colspan="2" class="prev_btn">◀◀</th>
		<th colspan="3"><?php echo $thisyear .".".$thismonth;?></th>
		<th colspan="2" class="next_btn">▶▶</th>
	</tr>
	<tr>
		<th>Sun</th>
		<th>Mon</th>
		<th>Tue</th>
		<th>Wed</th>
		<th>Thu</th>
		<th>Fri</th>
		<th>Sat</th>
	</tr>
	<?php for($i=1;$i<=$total_week;$i++){?>
		<tr>
			<?php for($j=0;$j<7;$j++){?>
				<td>
					<?php

					if (!(($i == 1 && $j < $start_week) || ($i == $total_week && $j > $last_week))) {
						if ($j == 0) {
							// 9. $j가 0이면 일요일이므로 빨간색
							$style = "color:red;";
						} else if ($j == 6) {
							// 10. $j가 0이면 토요일이므로 파란색
							$style = "color:blue";
						} else {
							// 11. 그외는 평일이므로 검정색
							$style = "black";
						}

						// 12. 오늘 날짜면 굵은 글씨
						if ($day == date("j")) {
							// 13. 날짜 출력
							echo '<span style="font-weight:bold; '.$style.'">';
							echo $day;
							echo '</span>';
						} else {
							echo '<span style='.$style.'>';
							echo $day;
							echo '</span>';
						}
						// 14. 날짜 증가
						$day++;
					}

					?>

				</td>
			<?php }?>

		</tr>
	<?php }?>


</table>