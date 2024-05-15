<?php

define('DB_HOST','localhost');
// define('DB_USER','interest');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','review_app');

//新建连接

$conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

//检查连接
if ($conn->connect_error) {
    die('连接失败！'. $conn->connect_error);
}else{
echo"连接成功！";
}
$sql = 'SELECT * FROM review';
        $result = mysqli_query($conn, $sql);
        $reviews = mysqli_fetch_all($result, MYSQLI_ASSOC);
        // echo $reviews;

?>