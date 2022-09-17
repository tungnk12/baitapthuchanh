<?php
//Viết một chương trình PHP chấp nhận sáu số làm đầu vào và sắp xếp chúng theo thứ tự giảm dần.
	$file = fopen("BAI55.txt","r");
	$stdin = trim(fgets($file));	//Hàm trim() xóa những ký tự có tên trong danh sách ký tự do bạn chỉ định ra khỏi vị trí đầu tiên và cuối cùng của chuỗi.
	//Hàm fgets() để trả về một dòng dữ liệu trong một tập tin đang được mở.
	$nums = explode(" ", $stdin);	// Hàm explode() cho phép chuyển 1 chuỗi sang 1 mảng dựa trên các ký tự phân cách.
	rsort($nums);		//Hàm rsort() sắp xếp các ptu trong mảng theo thứ tự giảm dần theo bảng chữ cái hoặc chữ số.
	print("After sorting the said integers:\n");
	echo implode(' ', $nums);
?>