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

    //
        
?>