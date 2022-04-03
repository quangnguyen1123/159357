#include <stdio.h>
#include <math.h>
void nhap(int arr[], int *n ){
 	printf("Nhap phan tu n : ");
	scanf("%d", n);
	int i;
 	for(i = 0; i < *n; i++) {
 		printf("arr[%d] = ", i + 1);
 		scanf("%d", &arr[i]);
	}
}
void xuat(int arr[], int n){
   int i;
   for (i=0; i < n; i++)
       printf("%d ", arr[i]);
   printf("\n");
}

void insertionSort(int arr[], int n){
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
       xuat(arr,n);
   }
}
 


int main(){
   	int arr[20], n;
	
	nhap(arr, &n);
	printf("sap xep: \n");
	
    insertionSort(arr, n);
    printf("Sorted array: \n");
  	xuat(arr, n);
 
    return 0;
}
