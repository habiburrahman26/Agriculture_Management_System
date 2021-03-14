<?php


    if(isset($_POST['submit']))
    {

    	$name = $_POST['name'];
    	$price = $_POST['price'];
    	$desc = $_POST['desc'];
    	//$img = $_POST['tool_img'];

    	$tools=[

    				'name' => $name,
    				'price' => $price,
    				'desc' => $desc
    			];

    	$myfile = fopen('../model/tools.json', 'r');
    	$data = fread($myfile, filesize('../model/tools.json'));
    	$json = json_decode($data, true);
    	array_push($json, $tools);

    	$myfile = fopen('../model/tools.json', 'w');
    	$write = json_encode($json, JSON_PRETTY_PRINT);
    	if(fwrite($myfile, $write))
    	{
    		echo "Tools add successfully";
    	}
    	else
    	{
    		echo "error";
    	}


	        $file_info = $_FILES['tool_img'];

    		$ext = explode('.', $file_info['name']);
    		$path = '../assets/tools/'.time().".".$ext[1];

    		if($ext[1] == 'png' || $ext[1] == 'jpg' || $ext[1] == 'jpge')
    		{
    			if ($file_info['size'] < 4000000) {
    				if (move_uploaded_file($file_info['tmp_name'], $path))
    				{
    					//echo "Success";
    				}
    				else{
    					echo "error";
    				}
    			}
    			else{
    				echo "file size less than 4MB";
    			}
    		}
    		else{
    			echo "png, jpg and jpge file are allow";
    		}
    	
    }
    else
    {
    	echo "Invalid request";
    }


?>