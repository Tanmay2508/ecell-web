#include <iostream>
#include <vector>
#include <algorithm>
#include <limits.h>

using namespace std;

int n,m;

bool safe(vector<int> path,int x,int pos)
{
	for(int i = 0 ; i < pos ; i++)
		if(path[i] == x)
			return false;
	return true;
}

void h(vector<vector<int> > g,vector<int> path, int pos)
{
	if(pos == n )
	{
		if(!g[path[pos - 1]][path[0]])
			return ;
		for(int i = 0 ; i < n ; i++)
			cout<<path[i]<< ' ';
		cout<<endl;
		return ;
	}
	for(int u : g[path[pos - 1]])
	{
		if(safe(path,u,pos))
		{
			path[pos] = u;
			h(g,path,pos + 1);
		}
	}
	return;


}
int main()
{
	cin>>n>>m;
	vector<vector<int> > g(n);
	for(int i = 0 ; i < m ; i++)
	{
		int a,b;
		cin>>a>>b;
		a--,b--;
		g[a].push_back(b);
		g[b].push_back(a);
	}
	vector<int> path(n);
	for(int i = 0 ; i < n ; i++)
	{
		path[0] = i;
		h(g,path,1);
		cout<<i<<endl;
		
	}
}