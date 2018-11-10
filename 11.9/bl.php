<?php
/**
 * Created by PhpStorm.
 * User: lzq
 * Date: 2018/11/10
 * Time: 9:16
 */

/**
 * 定义遍历指定路径下文件与文件夹,通过递归的方法
 * @param  $dir string
 */
function dirs($dir,$level=0){
    //列出指定路径中的文件和目录
    $files=scandir($dir);

    //遍历所有的目录
    foreach($files as $file){

        //重复一个字符串
        echo str_repeat('&nbsp;',$level*4);

        //拼接路径
        $tmpdir=$dir.'/'.$file;

        //判断是否是一个目录，文件夹
        if(is_dir($tmpdir)){
            //让文件夹变成红色
            echo "<font style='color:red;'>$tmpdir</font><br/>";
            //目录下有两个隐藏文件.和..，排除掉
//            if($file !='.' && $file !='..'){
//                //通过递归的方法，调用自己，进行遍历
//                dirs($tmpdir,$level+1);//递归点
//            }
//        }else{
            //如果不是一个目录就直接显示这个文件
//            echo $file.'<br/>';
        }

    }
}

dirs('d:');
