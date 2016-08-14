<?php
// Câu SQL lấy danh sách
$sql = "SELECT * FROM info";

// Thực thi câu truy vấn và gán vào $result
$result = $conn->query($sql);

//lay so hang ket qua
$num_rows = $result->num_rows;

$random_id_1 = rand(1, $num_rows); //lay ngau nhien 1 so tu so hang ket qua 

$random_id_2 = rand(1, $num_rows); //lay ngau nhien so con lai khac voi so truoc
while ($random_id_1 == $random_id_2){
    $random_id_2 = rand(1,$num_rows);
};

//truy van ket qua theo 2 id vua lay ngau nhien
$sql = "SELECT * FROM info WHERE id IN ($random_id_1, $random_id_2)";

$result = $conn->query($sql);

$info_girl = array(); //luu thong tin cua 2 nguoi lay random

//luu thong tin vao $info_girl
while($row = $result->fetch_assoc()) {
   $info_girl[] = $row;
}


?>