<?php
//Viết một chương trình PHP giải phương trình.
	function to_f($e) {
		return (float)$e;
	} 
	$file = fopen("BAI49.txt","r");
	while($line = fgets($file)) {		//Hàm fgets() để trả về một dòng dữ liệu trong một tập tin đang được mở.
		$a = explode(" ", $line);		// Hàm explode() cho phép chuyển 1 chuỗi sang 1 mảng dựa trên các ký tự phân cách.
		$a = array_map("to_f", $a);		// Hàm array_map() lặp tất cả các ptu của mảng và truyền vào hàm callback định nghĩa trước đó của người dùng.
		$x = ($a[2]*$a[4]-$a[1]*$a[5])/($a[0]*$a[4]-$a[3]*$a[1]);
		$y = ($a[2]*$a[3]-$a[0]*$a[5])/($a[1]*$a[3]-$a[0]*$a[4]);
		print("Values of x and y:\n");
		printf("%.3f %.3f\n", $x, $y);
	}
?>