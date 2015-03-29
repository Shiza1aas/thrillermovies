<?php 

	require_once('connectvars.php');

	header('Content-type: text/html; charset=utf-8');
	$json  = array('success' => false, 
					'result' => 0
					);


	if (isset($_POST['title']))
	{

		
		$title = $_POST['title'];

		$result=mysqli_query($dbc,"select * from slide_show where slide_title = '$title'"); 
		// $row = mysqli_fetch_array($result);

		if ( mysqli_num_rows($result))
		{

			$json['result'] = "The title $title is already present in the database.";
		}
		else
		{
			$result=mysqli_query($dbc,"insert into slide_show (slide_title) values(
				'$title')"); 
			$json['result'] = "The title $title is added successfully to the database.";
			$json['success'] = "true";
		}
		
	}
	echo json_encode($json);
 ?>