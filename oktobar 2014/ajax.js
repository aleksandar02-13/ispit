function pravi()
{
	kanal=new XMLHttpRequest();
}
function f1(obj)
{
	pravi();
	kanal.open("GET","nesto1.php?kor="+obj,true);
	kanal.onreadystatechange=f3;
	kanal.send();
}
function f3()
{
	if(kanal.readyState==4)
	{
		doc.gebi('kor').inhtml=k.re.t;
	}
}
function f2(obj)
{
	pravi();
	kanal.open("GET","nesto2.php?knj="+obj,true);
	kanal.onreadystatechange=f4;
	kanal.send();
}
function f4()
{
	if(kanal.readyState==4)
	{
		doc.gebi('knj').inhtml=k.re.t;
	}
}

function f6(obj)
{
	document.getE('kor').value=obj;
}


