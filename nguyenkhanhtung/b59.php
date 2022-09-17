<?php
/*Viết một chương trình PHP để đọc một ngày (từ 2016/1/1 đến 2016/12/31) và in ngày của ngày đó.  
Ngày 1 tháng 1 năm 2016, là Thứ Sáu.  Lưu ý rằng năm 2016 là một năm nhuận.*/
	$file = fopen("BAI59.txt","r");
	$days = explode(',', '0,31,60,91,121,152,182,213,244,274,305,335');		// Hàm explode() cho phép chuyển 1 chuỗi sang 1 mảng dựa trên các ký tự phân cách.
	$format = explode(',', 'Wednesday,Thursday,Friday,Saturday,Sunday,Monday,Tuesday');
	while (($line = trim(fgets($file))) !== '') {	//Hàm trim() xóa những ký tự có tên trong danh sách ký tự do bạn chỉ định ra khỏi vị trí đầu tiên và cuối cùng của chuỗi.
	//Hàm fgets() để trả về một dòng dữ liệu trong một tập tin đang được mở.
	sscanf($line, '%d %d', $m, $d);
    if ($m === 0) {
        break;
    }
    $n = $days[$m - 1] + $d;
    $today = $format[$n % 7];
    echo "The day is: ".$today, PHP_EOL;
}
?>