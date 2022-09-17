<?php
//Viết một chương trình PHP để tính tổng các chữ số của một số.
	function sum_of_digits($nums) {
		$digits_sum = 0;
		for ($i = 0; $i < strlen($nums); $i++) {		//Hàm strlen() là đếm độ dài của chuỗi.
			$digits_sum += $nums[$i];
        }
		return $digits_sum;
	}
	echo sum_of_digits("345")."\n";
	echo sum_of_digits("888")."\n";
?>