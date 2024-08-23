<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 获取表单数据
    $username = htmlspecialchars($_POST['username']);
    $message = htmlspecialchars($_POST['message']);

    // 文件名
    $filename = 'chat.txt';

    // 准备要写入的内容
    $content = "[" . date("Y-m-d H:i:s") . "] " . $username . ": " . $message . "\n";

    // 一行代码将内容写入文件（追加模式）
    file_put_contents($filename, $content, FILE_APPEND);

    // 重定向回聊天页面
    header("Location: index.html");
    exit;
}
?>
