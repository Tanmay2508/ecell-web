#include <iostream>
#include <vector>
#include <algorithm>
#include <limits.h>
using namespace std;

bool check(int n ,vector<vector<bool> >b,int p)
{
	for(int i = 0 ; i < b.size() ; i++)
	{
		for(int j = 0 ;j < b.size() ; j++)
		{
			if(b[i][j] && j == p)
				return false;
			if(b[i][j] && p + n == i + j)
				return false;
			if(b[i][j] && p - n == j - i)
				return false;
		}
	}
	return true;
}


void q(int n,vector<vector<bool> > b)
{
	if(n < 0 )
	{
		for(int i = 0 ; i < b.size() ; i ++)
		{
			for(int j = 0 ; j < b.size() ; j++)
				cout<<b[i][j]<<' ';
			cout<<endl;
		}
		cout<<endl<<endl;
	}
	else
	{
		for(int i = 0 ; i < b.size(); i++)
		{
			if(check(n , b,i))
			{
				b[n][i] = 1;
				q(n - 1, b);
			}
			b[n][i] = 0;

		}
	}
}

int main()
{
	int n;
	cin>>n;
	vector<vector<bool> > b(n,vector<bool>(n));
	q(n - 1,b);	
		
}