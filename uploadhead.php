<?php
	header("Content-Type: text/html;charset=utf-8");
    $imgname = $_FILES['myfile']['name'];
    $tmp = $_FILES['myfile']['tmp_name'];
    $filepath = 'uploaded/';
    if(move_uploaded_file($tmp,$filepath.$imgname)){
        echo "上传成功";
        echo "<br/> <a href='/img.php'>查看图片</a>";
    }else{
        echo "上传失败";
    }
    $txt = "helloworld"

?>
