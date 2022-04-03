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

void merge(int arr[], int l, int m, int r)
{
    int i, j, k;
    int n1 = m - l + 1;
    int n2 =  r - m;
    //tao mang tam thoi
    int L[n1], R[n2];
 
    //chia du lieu vao mang
    for (i = 0; i < n1; i++)
        L[i] = arr[l + i];
    for (j = 0; j < n2; j++)
        R[j] = arr[m + 1+ j];
 
    //gop 2 mang vua tao vao arr
    i = 0; 
    j = 0; 
    k = l; 
    while (i < n1 && j < n2)
    {
        if (L[i] <= R[j])
        {
            arr[k] = L[i];
            i++;
        }
        else
        {
            arr[k] = R[j];
            j++;
        }
        k++;
    }
    //copy cac phan tu con lai cua mang l vao arr
    while (i < n1)
    {
        arr[k] = L[i];
        i++;
        k++;
    }
   //copy cac phan tu con lai cua mang r vao arr
    while (j < n2)
    {
        arr[k] = R[j];
        j++;
        k++;
    }
}
void mergeSort(int arr[], int l, int r,int n)
{
    if (l < r)
    {    
        int m = l+(r-l)/2; 
        mergeSort(arr, l, m,n);
        mergeSort(arr, m+1, r,n);
 
        merge(arr, l, m, r);
        xuat(arr,n);
    }
}
int main(){
   	int arr[20], n;	
	nhap(arr, &n);	
	mergeSort(arr, 0, n-1,n);
    printf("da sap xep: \n");
  	xuat(arr, n);
    return 0;
}
