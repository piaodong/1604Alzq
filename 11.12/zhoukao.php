<?php

//第一题
#include "stdio.h"
// int  main(int argc,char *argv[]){
//    int 1,2,3,4;
//    printf("A total of %d no repeat number 3-digits, they are as follows:\n",4*3*2);
//    for(t=0,i=1;i<=4;i++)//百位数字有4种选择
//        for(j=1;j<=4;j++)//十位数字有3种选择
//            if(j!=i)//遇到十位数字等于百位数字时跳过
//                for(k=1;k<=4;k++)//个位数字只有2种选择了
//                    if(k!=i && k!=j)//个位数字与十位或百位数字相等时跳过
//                        printf(++t%10 ? "%4d" : "%4d\n",i*100+j*10+k);//输出该三位数
//    if(t%10)
//        printf("\n");
//    return 0;
//}

//function dirs($dir,$level=0){
//    //列出指定路径中的文件和目录
//    $files=scandir($dir);
//
//    //遍历所有的目录
//    foreach($files as $file){
//
//        //重复一个字符串
//        echo str_repeat('&nbsp;',$level*4);
//
//        //拼接路径
//        $tmpdir=$dir.'/'.$file;
//
//        //判断是否是一个目录，文件夹
//        if(is_dir($tmpdir)){
//            //让文件夹变成红色
//            echo "<font style='color:red;'>$tmpdir</font><br/>";
//
//        }
//
//    }
//}
//
//dirs('d:');

?>