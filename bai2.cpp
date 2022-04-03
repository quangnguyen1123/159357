#include<stdio.h>

void nhap(int a[], int *n ){
 	printf("Nhap X = ");
	scanf("%d", n);
	int i;
 	for(i = 0; i < *n; i++) {
 		printf("X[%d] = ", i + 1);
 		scanf("%d", &a[i]);
	}
}

void swap(int *x, int *y ) {
	int tg = *x;
	*x = *y;
	*y = tg;
}

void xuat(int a[], int n ) {
	int i;
 	for(i = 0; i < n; i++) {
 		printf("%5d", a[i]);
	 }
 	printf("\n");
}

void insertionSort(int arr[], int n)
{
   int i, key, j;
   for (i = 1; i < n; i++)
   {
       key = arr[i];
       j = i-1;
 
      
       while (j >= 0 && arr[j] > key)
       {
           arr[j+1] = arr[j];
           j = j-1;
       }
       arr[j+1] = key;
   }
}
 
int main() {
	int a[20], n;
	
	nhap(a, &n);
	printf(" Mang dang sap xep: \n");
	xuat(a, n);
	
insertionSort(a, n);
	printf("Mang da sap xep: \n");
	xuat(a, n);
	
 	return  0;
}
