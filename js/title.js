$('#addTitleStatus').addClass('hide');


$('#addTitle').on('submit',
	function (e) {
		$('#addTitleStatus').addClass('show');
		e.preventDefault();
		var contents = $(this).serialize();	
		// alert("hello in success");

		$.ajax(
		{
			url:'addTitle.php',
			dataType: 'json',
			type:'post',
			data:contents,
			success:function(data)
			{
				$('#addTitleStatus').removeClass('show alert-success alert-danger');
				
				if(data.success)
				{
					
					$('#addTitleStatus').addClass('alert-success');
					$('#addTitleStatus').html(data.result);
					$('#addTitleStatus').addClass('show');
				}
				else
				{
					$('#addTitleStatus').addClass('alert-danger');
					$('#addTitleStatus').html(data.result);
					$('#addTitleStatus').addClass('show');
				}
			},
		}
			);
		// alert("Wfah");
	});