<?php
//Viết chương trình PHP để kiểm tra xem hai đường thẳng PQ và RS có song song với nhau hay không.
	$file = fopen("BAI56.txt","r");
	fscanf($file, '%d', $n);		//Hàm fscanf() sẽ phân tích cú pháp đầu vào từ một tệp đang mở theo định dạng đã chỉ định.
	for ($i = 0; $i < $n; $i++) {
		fscanf($file, '%f %f %f %f %f %f %f %f', $x1, $y1, $x2, $y2, $x3, $y3, $x4, $y4);
		$pq = INF;
		if ($x2 - $x1 !== 0.0) {
			$pq = ($y2 - $y1) / ($x2 - $x1);
		}
		$rs = INF;
		if ($x4 - $x3 !== 0.0) {
			$rs = ($y4 - $y3) / ($x4 - $x3);
		} 
		echo $pq === $rs ? 'PQ and RS are parallel.' : 'PQ and RS are not parallel.';
		echo PHP_EOL;		
	}
?>