<?php
function rss(){

}

rss();

// 生成 SHA1 哈希值
function sha1_file($filename) {
    $fp = fopen($filename, 'rb');
    $size = filesize($filename);
    $sha1 = sha1_file($filename);
    fclose($fp);
    return $sha1;
}


?>