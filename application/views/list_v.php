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
	a{text-decoration:none;color:black;}
	.list{border-collapse: collapse;border: 1px solid #1f1d1d;padding:10px;float: left;}
	.list th{width:200px;height: 50px;border-bottom: 1px solid #1f1d1d;padding:10px;}
	.list td{text-align: center;border-bottom: 1px solid #1f1d1d;padding:10px;}

	.list_div{margin:10px;float:left}
	.btn_list{padding: 10px; border:1px solid #CCCCCC;}
	.btn_list:hover{background-color: #FF9999; border:1px solid #FF9999;color:#fff;}
</style>

<div style="width: 100%;float: left;">
	<table class="list">
		<tr>
			<th>날짜</th>
			<th>이름</th>
			<th>금액</th>
			<th>기타</th>
		</tr>
		<?php foreach ($list as $item){ ?>
			<tr>
				<td><?php echo $item['date']?></td>
				<td><?php echo $item['name']?></td>
				<td><?php echo $item['price']?></td>
				<td><?php echo $item['etc']?></td>
			</tr>
		<?php } ?>
	</table>

	<div class="list_div"><a class="btn_list" href="/calendar">달력보기</a></div>
</div>

