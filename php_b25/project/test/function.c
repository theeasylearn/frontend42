/*write a function that print multiplication table for n */
#include<stdio.h>
void printtable(int number)

{
    for (int i=1;i<=10;i++)
    {
        printf ("%dx%d=%d\n",number,i,number*i);
    }
}

int main()
{
    printtable(10);
    return 0;
}
    