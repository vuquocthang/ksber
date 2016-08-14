<?php
require_once "db.php";
require_once "Elo.php";

// du lieu tu ajax gui sang
$link_1 = $_POST['image_link_1'];
$link_2 = $_POST['image_link_2'];
$win = $_POST['win'];

//truy van elo
$query = "SELECT elo FROM info WHERE image_link IN (?,?)";

$stmt = $conn->prepare($query);
$elo_arr = array();
if ($stmt) {
    $stmt->bind_param("ss", $link_1,$link_2);
    $stmt->execute();
    $stmt->bind_result($elo);

    while ($stmt->fetch()) {
        $elo_arr[] = $elo;
    }
    $stmt->close();

}
$elo_1 = $elo_arr[0];
$elo_2 = $elo_arr[1];



//calc elo 1, elo 2
$elo = array();
if($win == $link_1){
    $elo = elo($elo_1,$elo_2,1,0);
}else{
    $elo = elo($elo_1,$elo_2,0,1);
}

//update elo
$Ra = $elo['Ra'];
$Rb = $elo['Rb'];

//update elo 1
$sql = "UPDATE info SET elo = $Ra  WHERE image_link LIKE ?";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("s", $link_1);
    $stmt->execute();
    $stmt->close();
}

//update elo2
$sql = "UPDATE info SET elo = $Rb  WHERE image_link LIKE ?";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("s", $link_2);
    $stmt->execute();
    $stmt->close();
}


require_once "get_random_girl.php";
//result ajax

die (json_encode($info_girl));
?>