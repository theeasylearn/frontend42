/*string input */
#include<stdio.h> 
void main()
{
    char name[50];
    int n;
    printf ("enter your name :");
    for (int i=0;i<50;i++)
    {
        scanf ("%c",&name[i]);
        if (name[i]=='\n')
        {
            break;
        }
    }

    for (int i=0;i<50;i++)
    {
        printf ("%c",name[i]);
        if (name[i]=='\n')
        {   
            n=i;
            break;
        }
    }

    for (int i=n-1;i>=0;i--)
    {
        printf ("%c",name[i]);
    }
 
    
}