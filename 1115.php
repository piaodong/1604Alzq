<?php
 class Solution {
function  ArrayList FindNumbersWithSum(int [] array,int sum) {
ArrayList<Integer> list = new ArrayList<>();
if (array == null || array.length < 2) {
return list;
}
int i = 0;
        int j = array.length - 1;
        while (i < j) {
            if(array[i] + array[j] == sum){ //先取数组的第一个和最后一个数字相加
                list.add(array[i]);
                list.add(array[j]);
                return list;
            }
            else if(array[i] + array[j] > sum) //根据sum调整i和j
                j--;
            else
                i++;
        }
        return list;
    }
}