<?php
//$conn = mysqli_connect("localhost","root","","ajax_form") or die("not connected database !");

//connect to database

// Lấy thông tin username và email
//$username = isset($_POST['username']) ? $_POST['username'] : false;
//$email = isset($_POST['email']) ? $_POST['email'] : false;

$username = "thangvq";
$email = "vuquocthang63@gmail.com";
// Nếu cả hai thông tin username và email đều không có thì dừng, thông báo lỗi
if ($username == false && $email == false){
    die (" chua nhap username va email");
}

$server = "localhost";
$dbname = "ajax_form";
$user = "root";
$password = "";

$error = array(
    'error' => 'success',
    'username' =>'',
    'email'=> ''
);


try{
    $conn = new PDO("mysql:host=$server; dbname = $dbname", $user, $password );
    //
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "ket noi CSDL thanh cong";


    $sql = "SELECT * FROM member ";

    //$stmt = $conn->prepare($query);
    //$stmt->bindParam(":username",$username,PDO::PARAM_STR);
    $stmt = $conn->query($sql);
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rows as $row){
        echo $row['username'];
    }
    //$stmt->execute();

    /*if ((int)$rows >= 1){
        $error['username'] = 'username da ton tai';
        echo $error['username'];
    }else{
        die("bad request");
    }*/

    }catch(PDOException $e){
        $e->getMessage();
    }



$conn = null;
//die($error);
