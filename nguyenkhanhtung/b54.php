<?php
/*Viết một chương trình PHP để tính và in ra tổng của hai số nguyên đã cho (lớn hơn hoặc bằng 0).  
Nếu số nguyên đã cho hoặc tổng có nhiều hơn 80 chữ số, hãy in "tràn".*/
	$file = fopen("BAI54.txt","r");
	fscanf($file, '%d', $N);		//Hàm fscanf() sẽ phân tích cú pháp đầu vào từ một tệp đang mở theo định dạng đã chỉ định.
	for ($i = 0; $i < $N; $i++) {
		fscanf($file, '%s', $a);
		fscanf($file, '%s', $b);
		if (max(strlen($a), strlen($b)) > 80) {		//Hàm strlen() là đếm độ dài của chuỗi.
			echo "overflow\n";
			continue;
    }
    $arr = array_fill(0, 81, 0);	//Hàm array_fill() tạo ra một mảng mới có số lượng phần tử tương ứng khi truyền vào, và gán toàn bộ giá trị của phần tử trong mảng đó là VALUE được truyền vào.
    $a = sprintf('%081s', $a);		//Hàm sprintf() sẽ ghi một chuỗi được định dạng vào một biến.
    $b = sprintf('%081s', $b);
    for ($j = 80; $j > 0; $j--) {
        $n = $arr[$j] + $a[$j] + $b[$j];
        if ($n >= 10) {
            $arr[$j] = substr($n, 1);	//Hàm substr() sẽ trích xuất 1 phần tử của chuỗi.
            $arr[$j - 1] += 1;
        } else {
            $arr[$j] = $n;
        }
    }		//Hàm preg_replace() trả về chuỗi hoặc mảng các chuỗi để tìm kiếm và thay thế.
    $result = preg_replace('/^0+(\d+)$/', '$1', implode('', $arr));		// Hàm implode() sẽ nối các phân tử của mảng lại thành 1 chuỗi, ngăn cách nhau bằng dấu cách.
    if (strlen($result) > 80) {		//Hàm strlen() là đếm độ dài của chuỗi.
        echo "overflow\n";
    } else {
        echo $result, PHP_EOL;
    }
}
?>