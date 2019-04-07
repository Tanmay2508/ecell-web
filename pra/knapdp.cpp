#include <iostream>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
	int n;
	int W;
	cin>>n>>W;
	vector<int> we(n + 1 ) , v(n + 1);
	for(int i = 0 ; i < n ; i++)
		cin>>we[i +1]>>v[i+1];
	vector<vector<int> > k(n+1,vector<int>(W + 1,0));
	for(int i = 1; i <= n ; i++)
	{
		for(int w = 0 ; w <= W; w++)
		{
			if(we[i] <= w)
			{
				k[i][w] = max(k[i - 1][w],k[i - 1][w-we[i]] + v[i]);
			}	
			else
				k[i][w] = k[i - 1][w];
		}
	}
	for(int i = 0 ; i <= n ; i++)
	{
		for(int j = 0 ; j <= W ; j++)
			cout<<k[i][j]<<" ";
		cout<<endl;
	}
	cout<<k[n][W]<<endl;

}