#include<stdio.h>

void nhap(int arr[], int *n ){
 	printf("Nhap phan tu n : ");
	scanf("%d", n);
	int i;
 	for(i = 0; i < *n; i++) {
 		printf("arr[%d] = ", i + 1);
 		scanf("%d", &arr[i]);
	}
}

void swap(int *x, int *y ) {
	int tg = *x;
	*x = *y;
	*y = tg;
}

void xuat(int arr[], int n ) {
	int i;
 	for(i = 0; i < n; i++) {
 		printf("%6d", arr[i]);
	 }
 	printf("\n");
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
 
 
int main() {
	int arr[20], n;
	
	nhap(arr, &n);
	printf("sap xep: \n");
	xuat(arr, n);
	
	selectionSort(arr, n);
 	return  0;
}
