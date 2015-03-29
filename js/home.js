window.onload = initialize;
$.ajaxSetup({ cache: false });
function initialize () 
{
	
	request = createRequest();

	if ( request == null )
	{
		alert('Unable to process');
		return;
	}	
	else
	{
		request.onreadystatechange = showTabContent;
		request.open("GET","list.html",true);
		request.send(null);
	}

	
}

function showTabContent () {
	// alert(curId);
	if ( request.readyState == 4 )
	{
		if ( request.status == 200 )
		{
   
			document.getElementById("listContent").innerHTML = request.responseText;
		}
	}
}


// create ajax request


function createRequest() {
  try {
    request = new XMLHttpRequest();
  } catch (tryMS) {
    try {
      request = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (otherMS) {
      try {
        request = new ActiveXObject("Microsoft.XMLHTTP");
      } catch (failed) {
        request = null;
      }
    }
  } 
  return request;
}
        


        // window.onload = takeElement;
