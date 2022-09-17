<?php
//Viết chương trình PHP nhân các phần tử tương ứng của hai danh sách đã cho.
	function multiply_two_lists($x, $y)
	{
		$a = explode(' ',trim($x));		// Hàm explode() cho phép chuyển 1 chuỗi sang 1 mảng dựa trên các ký tự phân cách.
		$b = explode(' ',trim($y));		//Hàm trim() xóa những ký tự có tên trong danh sách ký tự do bạn chỉ định ra khỏi vị trí đầu tiên và cuối cùng của chuỗi.
		foreach($a as $key=>$value){		// Hàm foreach() sử dụng để duyệt các phần tử của mảng.
        $output[$key] = $a[$key]*$b[$key];
    }
    return implode(' ',$output);		// Hàm implode() sẽ nối các phân tử của mảng lại thành 1 chuỗi, ngăn cách nhau bằng dấu cách.
	}
	echo multiply_two_lists(("2 2 3"), ("1 4 3"))."\n";
?>