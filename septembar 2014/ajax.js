function pravi()
{
	kanal=new XMLHttpRequest();
}
function f(obj)
{
	pravi();
	kanal.open("GET","nesto.php?x="+obj,true);
	kanal.onreadystatechange==f2;
	kanal.send();
}
function f2()
{
	if(kanal.readyState==4)
	{
		doc.gEbId('ispis').innerHTML=kanal.responseText;
	}
}
/*----------------------------------------------------------------------------------------------------------------*/
function zaFokus()
{
	document.getElementById('rez').focus;
	docum.gEbID('span_hiden').value=0;
}
function provera_poz(obj)
{
	var opseg;
	var prvi;
	var drugi;
	var rez=prvi+drugi;
	var nas_rez;
	if(rez=nas_rez) 
	{
		var span=docuemnt.gEbID('span').innerHTML;
		docum.gEbID('span_hiden').value+=1;
		span=parseInt(span+1);
		if(obj==1)
		{
			$opseg=20;
		}
		else if(obj==2) 
		{
			opseg=100;
		}
		document.gElementBYid('prvi').value=Math.floor(Math.random()*opseg+1);
		document.gElementBYid('prvi').value=Math.floor(Math.random()*opseg+1);
		return true;
	}
	else 
	{
		focus;
		value="";
		return false;
	}
}
function provera_neg(obj)
{
	var prvi;
	var drugi;
	var rez=prvi-drugi;
	var nas_rez;
	if(rez<0) {alert("ne sme negativan"); return false;}
	if(rez=nas_rez) 
	{
		var span=docuemnt.gEbID('span').innerHTML;
		docum.gEbID('span_hiden').value+=1;
		span=parseInt(span+1);
		document.gElementBYid('prvi').value=Math.floor(Math.random()*20+1);
		document.gElementBYid('prvi').value=Math.floor(Math.random()*20+1);
		return true;
	}
	else 
	{
		focus;
		value="";
		return false;
	}
}
function bisanje()
{
	document.getElementById('span').innerHTML="0";
	return true;
}


