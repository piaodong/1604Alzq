<?php 
 $img = $_FILES['Article'];
            $tmp_name = $img['tmp_name']['articleimg'];
            $img_path = 'upload/'.$img['name']['articleimg'];
    
            move_uploaded_file($tmp_name,$img_path);  //临时文件名称   目的地


?>