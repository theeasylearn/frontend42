/*print following pattern 
55555
4444
333
22
1
*/
#include<stdio.h>
void main()
{
    int i,p;
    for (i=5;i>=1;i--)
    {
        for (p=i;p>=1;p--)
        {
            printf ("%d",i);
        }

        printf("\n");
    }


}


    

    