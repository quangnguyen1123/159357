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
void PartitionSort(int arr[], int left, int right,int n)
        {
        
   			int i = left;
            int j = right;
            int k = (left + right) / 2;
            int chot = arr[k];
            if (left < right)
            {
                while (i <= j)
                {
                    while (arr[i] < chot) i = i + 1;
                    while (arr[j] > chot) j = j - 1;
                    if (i <= j)
                    {
                        int tmp = arr[i];
                   
					if (i <= j)
                    {
                        int tmp = arr[i];
                        arr[i] = arr[j];
                        arr[j] = tmp;
                        i++;
                        j--;
                        printf("doi cho:  ");
                        xuat(arr, n);
                    }
                }
                PartitionSort(arr, left, j,n);
                PartitionSort(arr, i, right,n);
            }
        }
}

int main(){
   	int arr[20], n;	
	nhap(arr, &n);
	int right = n - 1;
    int left = 0;	
    PartitionSort(arr, left, right,n);
    printf("da sap xep: \n");
  	xuat(arr, n);
    return 0;
}
