<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>숫자야구</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="./css/index.css">

</head>
<body>
	<div class="wrap">
		<div class="content">
			<div class="top">
				<h1>숫자야구</h1>
				<p>0부터 9까지의 숫자를 적어 주세요. 중복은 안됩니다. </p>
			</div>
			<form>
				<input type="text" id="one" maxlength="1">
				<input type="text" id="two" maxlength="1">
				<input type="text" id="three" maxlength="1">
				<input type="text" id="four" maxlength="1">
			</form>
			<button onclick="check()">확인</button>
			<button onclick="location.reload()">새로시작</button>
			<table style="width: 100%" border="1">
				<thead>
					<tr><th colspan="3">Score</th></tr>
				</thead>
				<tbody>
					<tr><td style="width:60px">1회</td><td style="width:155px" >&nbsp;</td><td>&nbsp;</td></tr>
					<tr><td> 2회 </td><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr><td> 3회 </td><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr><td> 4회 </td><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr><td> 5회 </td><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr><td> 6회 </td><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr><td> 7회 </td><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr><td> 8회 </td><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr><td> 9회 </td><td>&nbsp;</td><td>&nbsp;</td></tr>
				</tbody>
			</table>
		</div>

	</div>
<!-- 자바스크립트 -->
	<script src="./js/index.js"></script>
</body>
</html>