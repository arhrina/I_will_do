#include<stdio.h>

int main()
{
  int n;
  printf("NO:");
  scanf("%d", &n);

  for (int i = 1; i <= n; i++)
  {
    for (int j = i; j < n; j++)
    {
    printf(" ");
    }
    for (int j = 1; j <= i * 2 - 1; j++)
    {
    if ( j == 1 || j == i * 2 - 1)
      {
      printf("*");
      }
    else
      {
      printf(" ");
      }
    }
    printf("\n");
  }
  for (int i = 1; i < n; i++)
  {
    for (int j = 1; j <= i ; j++)
    {
    printf(" ");
    }
    for ( int j = n * 2-1 ; j >= i * 2 +1; j --)
    {
      if (j == n * 2-1 || j == i * 2 +1 )
      {
      printf("*");
      }
      else
      {
      printf(" ");
      } 
    }
  printf("\n");
  }
}
