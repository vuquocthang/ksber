<?php
//echo "this is data";
// Nhập giá trị number bằng phương thức post
$num = isset($_POST['num']) ? (int)$_POST['num'] : false;

// Kiểm tra number có lớn hơn không hay không
if (!$num){
    die ('<h1>Vui lòng nhập một số lớn hơn không (0)</h1>');
}

// Lặp từ 1 tới number để in ra màn hình
for ($i = 1; $i <= $num; $i++) {
    echo '<li>Số: ' . $i . '</li>';
}