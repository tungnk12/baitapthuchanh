<?php
	/* Viết chương trình PHP để in ra bảng cửu chương 6 * 6.*/
	for ($i = 1; $i < 7; $i++) {
		for ($j = 1; $j < 7; $j++) {
			if ($j == 1) {
				echo str_pad($i*$j, 2, " ", STR_PAD_LEFT) ;		
				//Hàm str_pad() sẽ thêm vào chuỗi một chuỗi nào sao cho chuỗi nguồn đạt đến độ dài nhất định. Hàm trả về chuỗi mới.
			} else {
				echo str_pad($i*$j, 4, " ", STR_PAD_LEFT) ;
			}
		}
	echo "\n";
	}
?>
 