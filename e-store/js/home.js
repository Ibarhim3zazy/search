function GetXmlHttpObject()
{
	if (window.XMLHttpRequest)
		return new XMLHttpRequest();

	if (window.ActiveXObject)
		return new ActiveXObject("Microsoft.XMLHTTP");

	return null;
}
function buy(id)
{
	var id=document.getElementById(id+'id').value;
	var quantity=document.getElementById(id+'q').value;
	// var pic_path=document.getElementById("quantity").value;
	var url="add.php?id="+id+"&quantity="+quantity;
		var xmlhttp = GetXmlHttpObject();
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				document.getElementById("result").innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET",url,true);
		xmlhttp.send();
	}
