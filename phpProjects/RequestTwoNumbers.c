#include <stdio.h>

int main()
{
    int numbers[2];
    int sum = 0;
   printf("Enter two numbers\n");
   for (int i =0; i<2; i++){
       scanf("%d",&numbers[i]);
   }
   for (int j = 0; j<2; j++){
        sum += numbers[j];
   }
   printf(" The sum is %d", sum);
   
   

    return 0;
}