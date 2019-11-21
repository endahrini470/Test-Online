#include <conio.h>
#include <iostream.h>

main(){
int i,a,d,max,min;
float jml=0,rata;


cout<<"Ada Berapa Data?";
cin>>a;

for(i=1;i<=a;i++){
	cout<<"Data Ke-"<<i<<":";
   cin>>d;
   jml+=d;
   if(i==1) //untuk mengetahui max dan min dari data yg dimasukkan dipercabangan
   {max=min=d;}
   if(d>max){
   max=d;}
   else if(d<min){
   min=d;}
   }
rata=jml/a;
cout<<"================"<<endl;
cout<<"Rata-rata :"<<rata;
cout<<"\nMin:"<<min;
cout<<"\nMax:"<<max;
getch();
}

