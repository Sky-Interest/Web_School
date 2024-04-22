<?php
    // 1.启动会话和初始化联系人数组
    session_start();
    // 如果会话中尚未初始化联系⼈数组，则进⾏初始化
    if (!isset($_SESSION['contacts'])) {
        $_SESSION['contacts'] = [
            "John Doe" => ["email" => "john@example.com", "phone" => "123-456-7890"],
            "Jane Doe" => ["email" => "jane@example.com", "phone" => "098-765-4321"]
        ];
    }
    //2.显示联系人的函数
    function displayContacts($contacts) {
        foreach ($contacts as $name => $info) {
            echo "<p>姓名: $name, 电子邮件: ".$info['email'].", 电话: ".$info['phone'];
            echo " <a href='?delete=" . urlencode($name) . "'>删除</a></p>";
        }
    }
    //3.处理添加联系人的信息
    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['addContact'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        if (!empty($name) && !empty($email) && !empty($phone)) {
            $_SESSION['contacts'][$name] = ['email' => $email, 'phone' => $phone];
        }
    }
?>