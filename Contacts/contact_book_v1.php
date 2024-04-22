<?php 
    //1.初始化联系人数组
    $contacts = ["xiaoming" => ["email" => "114@example.com", "phone" => "114514"],
                "xiaohua"=> ["email"=>"514@example.com","phone"=> "191980"]
            ];
    //2.定义显示所有联系人的函数
    function displayContact( $contacts) {
        foreach( $contacts as $name => $info){
            echo"Name: $name , Email: ".$info['email']." ,Phone :".$info['phone']."\n";
        }
    }
    //3.添加联系人
    $contacts['xiaoli'] = ["email" =>"115@example.com", "phone" => "1234321"];

    //4.删除联系人
    unset($contacts['xiaohua']);

    //5.显示所有联系人

    displayContact($contacts);
        
?>
<!-- <html></html> -->
<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<title>联系⼈簿</title>
</head>
<body>
<h2>添加联系⼈</h2>
<form action="contact_book.php" method="post">
<label for="name">姓名:</label><br>
<input type="text" id="name" name="name" required></
 
<label for="email">电⼦邮箱:</label><br>
<input type="email" id="email" name="email" required>
 
<label for="phone">电话:</label><br>
<input type="text" id="phone" name="phone" required>
 
<input type="submit" value="添加联系⼈">
</form>
</body>
</html>


