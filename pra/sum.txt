#include <iostream>
#include <vector>
#include <algorithm>
#include <limits.h>

using namespace std;
int k;
int c;
void subset(int p,int sum ,vector<int> a,vector<int > sub)
{
	

	if(p == a.size())
	{
		return ;
	}

	
	subset(p + 1,sum,a,sub);
	
	sub.push_back(a[p]);
	if(sum + a[p] == k)
	{
		c++;
		for(int i = 0 ; i < sub.size() ; i++ )
			cout<<sub[i]<<' ';
		cout<<endl;
	}


	subset(p + 1, sum + a[p],a,sub);

}

int main()
{
	int n;
	cin>>n;
	
	cin>>k;
	vector<int> a(n);
	vector<int> sub;

	for(int i = 0 ; i < n ; i++)
		cin>>a[i];
	c = 0;
	subset(0,0,a,sub);
	cout<<c<<endl;
}