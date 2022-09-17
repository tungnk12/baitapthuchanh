<?php
//Viết một chương trình PHP đọc một số nguyên n và tìm số kết hợp. Của a, b, c và d (0 ≤ a, b, c, d ≤ 9) trong đó (a + b + c + d) sẽ bằng n.
	$file = fopen("BAI51.txt","r");
	while (($input = trim(fgets($file))) !== '') {	//Hàm trim() xóa những ký tự có tên trong danh sách ký tự do bạn chỉ định ra khỏi vị trí đầu tiên và cuối cùng của chuỗi.
	$input = intval($input);	//Hàm intval() sẽ chuyển đổi giá trị của tham số var về một số nguyên (integer) với cơ số base, mặc định là cơ số 10.
		$count = 0;
		for ($i=0; $i < 10; $i++) { 
			for ($j=0; $j < 10; $j++) { 
				for ($k=0; $k < 10; $k++) { 
					for ($l=0; $l < 10; $l++) { 
						if ($i + $j + $k +$l === $input) {
							$count++;
						}
					}
				}
			}
    }
    echo "\nNumber of combinations of a,b,c and d: ";
    echo $count."\n";
	}
?>