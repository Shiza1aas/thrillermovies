$(document).ready(function() 
{
	$('#home').addClass('active_nav');
	$.ajax({ 
			type: "POST",
			url: "home.php",
			dataType: "html",
			success: function(html){
			
			$('#caurasoul').load('home.php');
	}
 });

	$('#list').click(function(e) 
	{
		$('#contents').html("<h1> Waiting for PHP </h1>");
		$('#home').removeClass('active_nav');  
		$('#list').addClass('active_nav');
   	 	alert("List is clicked");
		$.ajax({ 
			type: "POST",
			url: "list.php",
			dataType: "html",
			success: function(html){
			
			$('#contents').load('list.php');
				}
			 });


	});
});