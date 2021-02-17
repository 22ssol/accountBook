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
	.list{border-collapse: collapse;border: 1px solid #1f1d1d;padding:10px;}
	.list th{width:200px;height: 50px;border-bottom: 1px solid #1f1d1d;padding:10px;}
	.list td{text-align: center;border-bottom: 1px solid #1f1d1d;padding:10px;}
</style>

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


<a href="/calendar">달력보기</a>
