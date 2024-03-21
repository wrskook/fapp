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

// 列出文件夹及子文件夹下所有的文件
function list_files($dir) {
    $files = array();
    if ($handle = opendir($dir)) {
        while (false !== ($file = readdir($handle))) {
            if (in_array($file, array('.', '..'))) continue;
            if (is_dir($dir . '/' . $file)) {
                $files = array_merge($files, list_files($dir . '/' . $file));
                continue;
            }
        }
    }
}


?>