<?php
/*Có hai đường tròn C1 với bán kính r1, tọa độ trung tâm (x1, y1) và C2 với bán kính r2 và tọa độ trung tâm (x2, y2) Chuyển đến trình chỉnh sửa. 
Các số đầu vào (số thực) được phân tách bằng dấu cách. Viết một chương trình PHP để kiểm tra những điều sau: 
"C2 ở C1" nếu C2 ở C1. 
"C1 nằm trong C2" nếu C1 ở C2. 
"Chu vi của C1 và C2 cắt nhau" nếu chu vi của C1 và C2 cắt nhau, và "C1 và C2 không trùng nhau" nếu C1 và C2 không trùng nhau*/
	$file = fopen("BAI58.txt","r");
	$n = intval(fgets($file));		//Hàm intval() sẽ chuyển đổi giá trị của tham số var về một số nguyên (integer) với cơ số base, mặc định là cơ số 10.
	//Hàm fgets() để trả về một dòng dữ liệu trong một tập tin đang được mở.
	for($i = 0; $i < $n; $i++){		//Hàm fgets() để trả về một dòng dữ liệu trong một tập tin đang được mở.
    fscanf($file, "%lf %lf %lf %lf %lf %lf", $xa, $ya, $ra, $xb, $yb, $rb);	//Hàm fscanf() sẽ phân tích cú pháp đầu vào từ một tệp đang mở theo định dạng đã chỉ định.
     
    $r = sqrt(($xb - $xa)*($xb - $xa) + ($yb - $ya)*($yb - $ya));		//Trả về căn bậc 2
    if($r + $ra < $rb){
        echo "C1  is in C2\n";
        continue;
    }
    if($r + $rb < $ra){
        echo "C2  is in C1.\n";
        continue;
    }
     
    if($r <= $ra + $rb){
        echo "Circumference of C1  and C2  intersect.";
        continue;
    }
    echo "C1 and C2 do not overlap.\n";
}
?>