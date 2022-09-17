<?php
//Viết một chương trình PHP để tính số chữ số của tổng của hai số nguyên đã cho.
	$file = fopen("BAI47.txt","r");
	while(true) {
		$inputs = explode(' ', trim(fgets($file)));		// Hàm explode() cho phép chuyển 1 chuỗi sang 1 mảng dựa trên các ký tự phân cách.
		if (!is_array($inputs) || count($inputs) < 2) {		// Hàm is_array() kiểm tra 1 biến có phải thuộc KDL mảng hay không.
			exit;		//Hàm count() sẽ đếm số phần tử trong mảng.
		} 
		$a = $inputs[0];
		$b = $inputs[1]; 
		$d = numDigits($a + $b);
		echo("Digit number of sum of two given integers: ");
		echo $d . "\n";
	} 
	function numDigits($n) {
		return (int)(log10($n) + 1);
	}
?>