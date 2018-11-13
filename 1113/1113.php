<?php
/**
 * Created by PhpStorm.
 * User: lzq
 * Date: 2018/11/13
 * Time: 8:38
 */

//
//public class Solution {
//public int Sum_Solution(int n) {
//int sum=(int)(Math.pow(n,2)+n);
//return sum>>1;
//}
//}
//public class Solution {
//public int Sum_Solution(int n) {
//int sum=n;
//boolean a=(n>0)&&((sum+=Sum_Solution(n-1))>0);//如果n=0,则返sum=n=0；
//return sum;
//}
//}

public class Solution {
    public int Sum_Solution(int n) {
           int sum = n;
         boolean t = (n > 0) && (sum += Sum_Solution(n-1))>0;
            return sum;
                                  }
                       }

