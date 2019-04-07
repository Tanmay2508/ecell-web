#include <bits/stdc++.h>
using namespace std;

int main()
{
	int n;
	cin>>n;
	vector<vector<int> > g(n,vector<int> (n,INT_MAX));
	vector<int> c(n,INT_MAX);
	int k ;
	cin>>k;
	int e;
	cin>>e;
	for(int i = 0 ; i < e ; i++)
	{
		int a,b,temp;
		cin>>a>>b>>temp;
		a--,b--;
		g[a][b] = temp;

	}
	vector<int> d(n);
	c[n - 1] = 0;	
	for(int i = n - 2; i >= 0 ; i --)
	{
		for(int j = i; j < n; j++)
		{

			if(g[i][j] < INT_MAX && c[j] < INT_MAX && g[i][j] + c[j] < c[i])
			{
				c[i] = g[i][j] + c[j];
				d[i] = j;
				cout<<i << ' '<<c[i]<<endl;
			}
		}
	}
	cout<<c[0]<<endl;
	vector<int> p(k);
	p[0] = 0;
	p[k - 1] = n - 1;
	for(int i = 1;  i < k - 1; i++)
	{
		p[i] = d[p[i - 1]];
	}
	for(int i = 0 ;i < k ; i++)
		cout<<p[i]<<' ';
	cout<<endl;

}