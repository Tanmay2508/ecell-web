#include <bits/stdc++.h>
using namespace std;

int cost = INT_MAX;
vector<int> ans ;

void solve(vector<vector<int> > g,int s)
{
	int n = g.size();
	vector<int> v;
	for(int i = 0 ; i < n ; i++)
		if(s != i)
			v.push_back(i);
	do{
		int k = s;
		int curr = 0;
		for(int i = 0 ; i < n ; i++)
		{
			curr += g[k][v[i]];
			k = v[i];
		}
		k += g[k][s];
		if(curr < cost)
		{
			cost = curr;
			ans = v;
		}	
	}while(next_permutation(v.begin(),v.end()));
}



int main()
{
	int n;
	cin>>n;
	vector<vector<int> > g(n , vector<int> (n));
	for(int i = 0 ; i < n ; i++)
	{
		for(int j = 0 ; j < n ; j++)
			cin>>g[i][j];
	}
	int s = 0;
	solve(g,s);
	cout<<s<<' ';
	for(int i = 0 ; i < ans.size() ; i ++)
	{
		cout<<ans[i]<<' ';

	}
	cout<<s<<endl;

}
