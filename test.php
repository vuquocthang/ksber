<?php
/**
 * Created by PhpStorm.
 * User: quocthangvu
 * Date: 8/2/2016
 * Time: 6:43 PM
 */

require_once "db.php";
require_once "Elo.php";
require_once "get_random_girl.php";

/*$link_1 = "tran_ngoc_quynh.jpg";

//update
$sql = "UPDATE info SET elo = 700  WHERE image_link LIKE ?";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("s", $link_1);
    $stmt->execute();
}

//select
$query = "SELECT elo FROM info WHERE image_link LIKE ?";

$stmt = $conn->prepare($query);

if ($stmt) {
    $stmt->bind_param("s", $link_1);
    $stmt->execute();
    $stmt->bind_result($elo);

    while ($stmt->fetch()) {
        echo $elo;
    }

    $stmt->close();

}

$elo = elo(400,500,1,0);
echo "<br/>";
echo round($elo['Ra'], 0). "<br/>";
echo round($elo['Rb'], 0);*/

/*$query = "SELECT * FROM info ORDER BY elo DESC LIMIT 5";
$result = $conn->query($query);

// Kiểm tra số lượng record trả về có lơn hơn 0
// Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả
if ($result->num_rows > 0)
{
    // Sử dụng vòng lặp while để lặp kết quả
    while($row = $result->fetch_assoc()) {
        echo "name: " . $row["name"]. " - elo: " . $row["Elo"]."<br>";
    }
}
else {
    echo "Không có record nào";
}*/

//select elo1
/*$link_1 = "tran_ngoc_quynh.jpg";
$link_2 = "10320361_1739464726284894_235104512675349963_n.jpg";
$query = "SELECT elo FROM info WHERE image_link IN (?,?)";

$stmt = $conn->prepare($query);
$arr = array();
if ($stmt) {
    $stmt->bind_param("ss", $link_1,$link_2);
    $stmt->execute();
    $stmt->bind_result($elo);

    while ($stmt->fetch()) {
           $arr[] = $elo;
    }
    $stmt->close();
}

foreach ($arr as $key => $r){
    echo $key .'  '.$r ."<br/>";
}*/

// Câu SQL lấy danh sách

