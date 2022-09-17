<?php
/*Viết một chương trình PHP để in các giá trị chế độ từ một dãy số nguyên cho trước.  
Giá trị chế độ là yếu tố xảy ra thường xuyên nhất.  Nếu có một số giá trị chế độ, hãy in chúng theo thứ tự tăng dần.*/
	$file = fopen("BAI60.txt","r");
	$hoge = array();
	while($hoge[] = trim(fgets($file))){}	//Hàm trim() xóa những ký tự có tên trong danh sách ký tự do bạn chỉ định ra khỏi vị trí đầu tiên và cuối cùng của chuỗi.
	//Hàm fgets() để trả về một dòng dữ liệu trong một tập tin đang được mở.
	$hage = array_count_values($hoge);		//Hàm array_count_values() để đếm số lần trùng lặp giá trị của các phần tử trong mảng.
	$max = max($hage);
	$koge = array_keys($hage,$max);		//Hàm array_keys() trả về một hoặc một tập hợp các khóa của mảng.
	echo "Mode values (in ascending order):\n";
	sort($koge,SORT_ASC);		//Hàm sort() để sắp xếp các phần tử của một mảng theo thứ tự từ thấp đến cao.
	foreach ($koge as $val) {		//Vòng lặp foreach() tự động lặp qua các phần tử trong mảng, nó lặp cho khi nào tới phần tử cuối cùng thì thôi.
		echo $val.PHP_EOL;
	}
?>