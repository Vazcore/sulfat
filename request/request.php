<?php

	if(isset($_GET['type'])){
		require_once "../classes/Sulfat.php";

		$type = $_GET['type'];

		if($type == "calculate"){
			$sulfat = new Sulfat();
			$sulfat->calculate();
		}
	}