#include <iostream>
#include <vector>
#include <limits.h>
using namespace std;

int solve(int n,int w , vector<int> we,vector<int> v)
{
	if(w == 0 || n < 0)
	{
		return 0;
	}
	if(we[n] > w)
		return(solve(n - 1 , w,we,v));
	return max(solve(n - 1,w,we,v),v[n] + solve(n - 1,w - we[n],we,v));
}

int main()
{
	
	int n;
	int W;
	cin>>n>>W;
	vector<int> we(n) , v(n );
	for(int i = 0 ; i < n ; i++)
		cin>>we[i ]>>v[i];
	cout<<solve(n - 1 ,W,we,v);
}