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
       printf("%4d ", arr[i]);
   printf("\n");
}
void heapify(int arr[], int n, int i) { //thuat toan vun dong
    int root = i; 
    int l = 2*i + 1;  
    int r = 2*i + 2; 
    if (l < n && arr[l] > arr[root]) 
        root = l; 
  
    if (r < n && arr[r] > arr[root]) 
        root = r; 
  
    if (root != i) 
    { 
        int temp = arr[i];
		arr[i]=arr[root];
		arr[root]=temp;        
       heapify(arr, n, root); 
    } 
} 

void heapSort(int arr[], int n) { //thuat toan sap xep

 
    for (int i = n / 2 - 1; i >= 0; i--) 
        heapify(arr, n, i); 
  
    for (int i=n-1; i>=0; i--) { 
      
        int temp = arr[0];
        arr[0]=arr[i];
        arr[i]=temp;
  
        heapify(arr, i, 0); 
        printf("mang sau khi xep :");
    	xuat(arr,n);
    } 
    
} 

int main(){
   	int arr[20], n;	
	nhap(arr, &n);
	heapSort(arr,n);
    printf("da sap xep: \n");
  	xuat(arr, n);
    return 0;
}
