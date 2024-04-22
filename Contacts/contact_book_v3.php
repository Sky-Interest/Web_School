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
    //4.删除联系人的处理
    if (isset($_GET['delete'])) {
        $name = $_GET['delete'];
        unset($_SESSION['contacts'][$name]);
    }

    
?>

<!-- HTML表单优化 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>联系人簿</title>
</head>
<body>
    <h2>添加联系人</h2>
    <form method="POST">
        <label for="name">姓名:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">电子邮件:</label>
        <input type="email" id="email" name="email" required>
        <label for="phone">电话:</label>
        <input type="text" id="phone" name="phone" required>
        <button type="submit" name="addContact">添加联系人</button>
    </form>
</body>
</html>