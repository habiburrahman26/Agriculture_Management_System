<?php

	if (isset($_POST['submit'])) {
		
		$categoryName = $_POST['category'];


		$category = [
						'categoryName' => $categoryName
					];

		$myfile = fopen('../model/category.json', 'r');
    	$data = fread($myfile, filesize('../model/tools.json'));
    	$json = json_decode($data, true);
    	array_push($json, $category);

    	$myfile = fopen('../model/category.json', 'w');
    	$write = json_encode($json, JSON_PRETTY_PRINT);
    	if(fwrite($myfile, $write))
    	{
    		echo "Tools add successfully";
    	}
    	else
    	{
    		echo "error";
    	}
	}
	else
	{
		echo "Invalid request";
	}

?>