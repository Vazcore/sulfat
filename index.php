<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf8">
	<title>Розрахунок прес-гранулятора сульфату аммонію</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/sulfat.js"></script>
</head>
<body>
	<div id="main">
		<h1>Розрахунок пресс-гранулятора сульфату аммонію</h1>
		<div id="input_values">
			<h3>Вхідні дані</h3>
			<label>Радіус матриці <i><u>rm</u></i>, <input type="text" name="rm"> м</label>
			<br>
			<label>Радіус ролика <i><u>rp</u></i>, <input type="text" name="rp"> м</label>
			<br>			
			<label>Шар продукту з мінімальною висотою <i><u>hb</u></i>, <input type="text" name="hb">м</label>
			<br>
			<label>кутовa координатa верхньої межі зони видавлювання <i><u>fv0</u></i>, <input type="text" name="fiv_0">рад</label>
			<br>
			<label>кутовa координатa нижньої межі зони видавлювання <i><u>fv1</u></i>, <input type="text" name="fiv_1">рад</label>
			<br>
			<label>Витрата сульфату амонію	<input type="text" name="g_sa"> кг/год</label>
			<br><br>
			<button id="start_calculate">Начать расчет</button>
		</div>

		<div id="result">
			<h3>Результати розрахунку</h3>
			<hr>
			<div id="result_place"></div>
		</div>
	</div>
</body>
</html>
