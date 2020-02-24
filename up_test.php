<?php

include_once "./vendor/autoload.php";

$upload = new \Dj\Upload();
$filelist = $upload->save();
if(is_array($filelist)){
    # 返回数组，文件就上传成功了
    print_r($filelist);
    echo $filelist['url'];
}else{
    # 如果返回负整数(int)就是发生错误了
    $error_msg = [-1=>'上传失败',-2=>'文件存储路径不合法',-3=>'上传非法格式文件',-4=>'文件大小不合符规定',-5=>'token验证错误'];
    echo $error_msg[$filelist];
}