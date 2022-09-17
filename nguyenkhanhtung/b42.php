<?php
	//Viết một chương trình PHP để tìm ký tự không lặp lại đầu tiên trong một chuỗi đã cho.
	function find_non_repeat($word) {
		$chr = null;
		for ($i = 0; $i <= strlen($word); $i++) {		//Hàm strlen() là đếm độ dài của chuỗi.
			if (substr_count($word, substr($word, $i, 1)) == 1) {		//Hàm substr_count() sẽ đếm số lần xuất hiện của chuỗi con trong chuỗi word.
				return substr($word, $i, 1);		//Hàm substr() sẽ trích xuất 1 phần tử của chuỗi.
				}
		}
	}
	echo find_non_repeat("Red")."\n";
	echo find_non_repeat("rzxcdre")."\n";
?>
 