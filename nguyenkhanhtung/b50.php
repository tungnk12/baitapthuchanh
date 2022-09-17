<?php
/*Viết một chương trình PHP để tính số nợ trong n tháng.  
Số tiền vay là 100.000 đô la và khoản vay cộng thêm 5% lãi suất của khoản nợ và làm tròn đến 1.000 ở trên theo tháng.*/
	$file = fopen("BAI50.txt","r");
	fscanf($file, '%d', $n);		//Hàm fscanf() sẽ phân tích cú pháp đầu vào từ một tệp đang mở theo định dạng đã chỉ định.
	$debt = 100000;
 
	for($i=0; $i<$n; $i++){
		$debt = ceil(($debt * 1.05)/1000) * 1000;		//Hàm ceil() sẽ làm tròn số thành số nguyên theo chiều hướng tăng.
	}
	echo "\nAmount of debt: ";
	echo $debt. PHP_EOL;
?>