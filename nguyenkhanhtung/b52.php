<?php
//Viết chương trình PHP để in ra một số các số nguyên tố nhỏ hơn hoặc bằng một số nguyên cho trước.
	$file = fopen("BAI52.txt","r");
	$a = array_fill(0, 1000000, true);		//Hàm array_fill() tạo ra một mảng mới có số lượng phần tử tương ứng khi truyền vào, và gán toàn bộ giá trị của phần tử trong mảng đó là VALUE được truyền vào.
	$a[0] = $a[1] = false;
	 
	for($i = 2; $i * $i < 1000000; $i++){
		if(!$a[$i]) continue;
		for($j = $i * $i; $j < 1000000; $j += $i){
			$a[$j] = false;
		}
	}
	 
	$sum = array_fill(0, 1000000, 0);
	 
	for($i = 1; $i < 1000000; $i++){
		$sum[$i] += $sum[$i - 1];
		if($a[$i]) $sum[$i]++;
	}
	 
	while(fscanf($file, "%d", $n)){		//Hàm fscanf() sẽ phân tích cú pháp đầu vào từ một tệp đang mở theo định dạng đã chỉ định.
		echo "Number of prime numbers which are less than or equal to n: ";
		echo $sum[$n] . "\n";
	}
?>