#include <iostream>
#include <vector>
#include <algorithm>
#include <limits.h>

using namespace std;
int n;

bool safe(vector<vector<int> > g , vector<int> c , int v,int col)
{
	for(auto u : g[v])
	{
		if(c[u] == col)
		{
			//cout<<v<<' '<<u<<' '<<c[u]<<' '<<col<<endl;
			return false;
			
		}
	}
	return true;
}

void color(vector<vector<int> > g, vector<int> c,int v)
{

	if(v == n - 1)
	{
		for(int i = 0 ; i < n ; i++)
			cout<<c[i]<<' ';
		cout<<endl;
		return ;
	}
	else
	{
		int col = 0;
		while(!safe(g,c,v,col))
			col++;
		c[v] = col;
		color(g,c,v+1);
	}
}
int main()
{
	int m;
	cin>>n>>m;
	vector<vector<int> > g(n);
	vector<int> c(n);
	
	for(int i = 0  ; i < m ; i++)
	{
		int a,b;
		cin>>a>>b;
		a--;b--;
		g[a].push_back(b);
		g[b].push_back(a);
	}
	/*for(int i = 0 ; i < n ;i++)
	{
		for(int u : g[i])
			cout<<u<<' ';
		cout<<endl;
	}*/
	color(g,c,0);
}