<?php
//Viết một chương trình PHP để tìm chiều cao của ba tòa nhà trên cùng theo thứ tự giảm dần từ tám tòa nhà đã cho.
	$heights = array();
	$file = fopen("BAI46.txt","r");
	while($line = fgets($file)) {		//Hàm fgets() để trả về một dòng dữ liệu trong một tập tin đang được mở.
		rtrim($line, "\n");		//Hàm rtrim() giúp loại bỏ khoảng trắng (hoặc các kí tự bất kỳ được truyền vào bởi người dùng) dư thừa ở cuối chuỗi.
		array_push($heights, (int)$line);		//Hàm array_push() để thêm một phần tử mới vào cuối mảng.
	}
	rsort($heights);		//Hàm rsort() sắp xếp các ptu trong mảng theo thứ tự giảm dần theo bảng chữ cái hoặc chữ số.
	print("Heights of the top three buildings:\n");
	echo $heights[0]."\n";
	echo $heights[1]."\n";
	echo $heights[2]."\n";
?>