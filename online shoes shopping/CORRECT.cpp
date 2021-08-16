#include <iostream>
using namespace std;
void showMenu()
{
	cout<<"**********MENU**********"<<endl;
	cout<<"1.check balance"<<endl;
	cout<<"2.deposit"<<endl;
	cout<<"3.withdrow"<<endl;
	cout<<"4.exit"<<endl;
	cout<<"****************************"<<endl;
}
int main()
{
	 //check balance,deposit,withdrow,showmenu
int option;
double balance=500;
do{
	showMenu();
	cout<<"option:";
	cin>>option;
	system("cls");
	switch(option){
		case 1:cout<<"balance is:"<<balance<<"$"<<endl;
		break;
		case 2:cout<<"deposit amount:";
		     double depositAmount;
		     cin>>depositAmount;
		     balance+=depositAmount;
		     break;
		case 3:cout<<"withdrow amount:";
		     double withdrowAmount;
		     cin>>withdrowAmount;
		     if(withdrowAmount<=balance)
		     balance-=withdrowAmount;
		     else
		     cout<<"not enough money"<<endl;
		     break;
		     	}
		     	}
		     	while(option!=4);
		     	system("pause>0");
}

