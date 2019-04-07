#include <iostream>
#include <vector>
#include <algorithm>
#include <iomanip>
using namespace std;




int main()
{
	int n; 
	cin>>n;
	vector<vector<int> > a(n,vector<int> (n));
	int i = 0;
	int j = n / 2;
	a[i][j] = 1;
	for(int k = 2 ; k <= n * n ; k++)
	{
		int pi = i, pj = j;
		i--;
		j++;
		if(i < 0)
			i = n - 1;
		if(j == n)
			j = 0;
		if(a[i][j])
		{
			i = pi + 1;
			j = pj;
			if(i == n)
				i = 0;
		}
		a[i][j] = k;

	}
	for(int i = 0 ; i < n ; i ++)
	{
		for(int j = 0 ; j < n ; j++)
		{
			cout.setf(ios::adjustfield,ios::left);
			cout<<setw(8)<<a[i][j];
		}
		cout<<endl;
	}
}
