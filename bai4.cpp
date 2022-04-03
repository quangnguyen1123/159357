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

void bubbleSort(int arr[], int n){
    int i, j; 
    int temp;
    for (i = 1; i < n; i++){
    	printf("sap xep : \n");
        for (j = 0; j < n-i; j++){
            if (arr[j] > arr[j+1]){
            	temp = arr[j];
            	arr[j]=arr[j+1];
            	arr[j+1]=temp;
                
            }
            xuat(arr,n);
        }
        
        }
    }

int main(){
   	int arr[20], n;	
	nhap(arr, &n);	
    bubbleSort(arr, n);
    printf("da sap xep: \n");
  	xuat(arr, n);
    return 0;
}
