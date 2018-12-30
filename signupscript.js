i=0;
j=0;
function call1()
{       
      if(i==0)
      {alert("Password Must Contain the following:\n A Lowercase Alphabet\n An Uppercase Alphabet\n A Number\n It should be Minimum of 8 Characters");}
       i=1;
}
function call()
{
        pwd=document.getElementById('pwd');
	cpwd=document.getElementById('cpwd');
	result=document.getElementById('result');
	if(pwd.value==cpwd.value)
	{
		result.src='tick.png';
	}
	else
	{
		result.src='crs.png';
	}
}

function call2()
{
       
        if(pwd.value==cpwd.value)
	{
		return true;
	}
	else
	{
                alert("Password Not Matched");
		return false;
               
	}
}
function call3()
{       
      if(j==0)
      {alert("UserName must contain atleast four characters");}
       j=1;
}