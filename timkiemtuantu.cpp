#include <iostream>
#include <conio.h>
#define max 100
using namespace std; 
//nhap day
void NhapDay(int a[],int n) 
{
  for(int i=0; i<n; i++) 
  	{
	 cout<<"\n a["<<i<<"] =";
	 cin>>a[i];
    }
}
//xuat day
void XuatDay(int a[],int n) 
{
  cout<<"\n IN DAY: ";
  for(int i=0; i<n; i++)
	 cout<<a[i]<<"\t";
}
// tim kiem tuan tu
int SequentialSearch(int x, int a[],int  n)
{
  int i =1;
  while (i <n){
  	if(a[i]==x){
  		cout<<"o vi tri i ="<<i;
  		return i;
	  }
	  i++;
  }
  return -1;
  	//neu giá tri tra ve là i<=n-1 (tìm thay), i=n (không tìm thay)
}
//chuong trinh chinh
int main() 
{
  int a[max],n;
  cout<<"Nhap so phan tu:";
  cin>>n;
  NhapDay(a,n);
  cout<<"\n Day vua nhap la:";
  XuatDay(a,n);
  cout<<endl;
  int x;
  cout<<"\n Nhap phan tu can tim:";
  cin>>x;
  SequentialSearch(x, a,n);


  getch();
}
