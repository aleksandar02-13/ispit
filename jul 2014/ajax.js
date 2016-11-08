function pravi()
{
	kanal=new XMLHttpRequest();
}
function f1,f2,f3(obj)
{
	var otkucano=obj.value;
	kanal.open("GET","nesto1,2,3.php?mjau="+otkucano,true);
	kanal.onreadystatechange=f4,f5,f6;
	kanal.send();
}

function f4,f5,f6()
{
	if(kanal.readyState==4)
	{
		document.getElementById('ispis').innerHTML=kanal.responseText;
	}
}