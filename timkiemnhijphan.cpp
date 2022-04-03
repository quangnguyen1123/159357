#include <iostream>
#include <conio.h>
#define max 100
using namespace std;
 void nhap(int arr[], int *n ){
 	printf("Nhap phan tu n : ");
	scanf("%d", n);
	int i;
 	for(i = 0; i < *n; i++) {
 		printf("arr[%d] = ", i);
 		scanf("%d", &arr[i]);
	}
}
void xuat(int arr[], int n){
   int i;
   for (i=0; i < n; i++)
       printf("%4d ", arr[i]);
   printf("\n");
}
void swap(int *x, int *y ) {
	int tg = *x;
	*x = *y;
	*y = tg;
}
void selectionSort(int arr[], int n) {
	int i;
	int j;
	for(i = 0; i < n - 1; i++) {
		int min = i;
		for(j = i + 1; j < n; j++) {
			if(arr[j] < arr[min]) {
				min = j;
			}
		}	
		swap(&arr[min], &arr[i]);
		xuat(arr, n);
	}
}

int binarySearch(int arr[], int left, int right, int x) {
    int giua;
 
    while(left <= right) {
        
        giua = (left + right) / 2;
 
        if (arr[giua] == x){
            return giua;
 		}
       
        if (x > arr[giua]){
            left = giua + 1;
        }else{
           
            right = giua - 1;
    }
}
    return -1;
}

int main() {
   	int arr[20], n;	
	nhap(arr, &n);
	printf("sap xep: \n");
	xuat(arr, n);
	selectionSort(arr, n);
	int x;
  	cout<<"\n Nhap phan tu can tim:";
  	cin>>x;
    
    int i = binarySearch(arr, 0, n-1, x);
 
    cout <<"vi tri can tim i ="<< i;
}
