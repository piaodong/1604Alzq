<?php 


#include<stdio.h>
#include<string.h>
//  Palindrome(char * s1)//判断是否是回文
// {
// char str[50];
// int k,i,j;
// k=strlen(s1);
// for(i=k-1,j=0;i>=0;i--,j++)
// {
// str[j]=s1[i];
// }
// str[j]='\\0';
// if(strcmp(s1,str)==0)
// return 1;
// else
// return 0;
// }
// void main()
// {
// char s[50];
// printf("请输入一个字符串:\
// ");
// scanf("%s",s);
// int flag=Palindrome(s);
// if(flag==1)
// printf("字符串%s是回文\
// ",s);
// else
// printf("字符串%s不是回文\
// ",s);
// }
// 测试：
// 请输入一个字符串:
// jkasjdkf
// 字符串jkasjdkf不是回文
// Press any key to continue
// 请输入一个字符串:
// aabaa
// 字符串aabaa是回文
// Press any key to continue



#include <stdio.h>
#include <string.h>

int main()
{
char a[100]= {0};
int i = 0;
int len = 0;

printf("please input character string:\n");
gets(a);

len = strlen(a); //计算输入字符串的长度；

for(i = 0; i < (len / 2); i++) //只需要判断前一半（len/2）长度就好了
{ 
if(a[i] != a[len - 1 - i]) //判断是否为回文数；
{
printf("不是回文数\n");
return 0;
}
}

printf("是回文数\n");

return 0;
}

?>