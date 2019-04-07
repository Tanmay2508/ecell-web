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
	c[0] = 0;
	for(int i = 1 ; i < n ; i++)
	{
		for(int j = i ; j >= 0 ; j--)
		{
			if(c[i] > g[j][i] + c[j] && g[j][i] < INT_MAX && c[j] < INT_MAX)
			{
				c[i] = g[j][i] + c[j];
				d[i] = j;
			}
		}
	}
	cout<<c[n - 1]<<endl;
	vector<int> p(k);
	p[ 0] = 0;
	p[k] = n - 1;
	for(int i = k - 1; i > 0 ; i--)
		p[i] = d[p[i + 1]];
	for(int i = 1 ; i <= k ; i++)
		cout<<p[i]<<' ';
}