<?php
// 文件名
$filename = 'chat.txt';

// 检查文件是否存在
if (file_exists($filename)) {
    // 读取文件内容并输出
    $content = file_get_contents($filename);
    echo nl2br($content);
} else {
    echo "No messages yet.";
}
?>
