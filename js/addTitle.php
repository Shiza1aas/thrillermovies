<?php 
	header('Content-type: text/html; charset=utf-8');
	$json  = array('success' => false, 
					'result' => 0
					);


	if (isset($_POST['title']))
	{
		$json['success'] = "true";
	
		$json['result'] = 1;
	}
	echo json_encode($json);
 ?>