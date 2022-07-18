<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ajax y PHP/MySQL</title>
	<link rel='stylesheet' href='./css/reset.css'>
	<link rel='stylesheet' href='./css/main.css'>
	<script src='./js/libs/jquery.js'></script>
	<script src='./js/main.js'></script>
</head>
<body>

	<form id='register-form' autocomplete="off">
		<table>
			<tr>
				<td>Entry:</td>
				<td><input type='text' name='entry' id='entry' size='5'></td>
			</tr>
			<tr>
				<td>New entry:</td>
				<td><input type='text' name='newEntry' id='newEntry' size='5'></td>
			</tr>
			<tr>
				<td>Display:</td>
				<td><input type='text' name='display' id='display' size='5'></td>
			</tr>
			<tr>
				<td>Item level:</td>
				<td><input type='text' name='itemLevel' id='itemLevel' size='5'></td>
			</tr>
			<tr>
				<td>Name:</td>
				<td><input type='text' name='name' id='name' size='40'></td>
			</tr>
			<tr>
				<td>Description:</td>
				<td><input type='text' name='description' id='description' size='40'></td>
			</tr>
		</table>
		<input type='button' id='clone' value='clonar'>
		<div id='result'></div>
	</form>

</body>
</html>