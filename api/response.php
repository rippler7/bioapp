<?php
	include('links.php');
	if(isset($_POST['nav'])){
		$link = trim($_POST['theLink']);
		$theID = $_POST['idli'];
		$theTitle = $_POST['liTitle'];
		$response = "{'theLink':'$link','theID':'$theID','theTitle':'$theTitle'}";
		echo json_encode($response);
		/*
		$newArr = array();
		function recursive_array_search($needle,$haystack) {
		    foreach($haystack as $key=>$value) {
		        if(is_array($value)){
		        	foreach($value as $subkey => $subvalue){
		        		if(is_array($subvalue)){
		        			foreach($subvalue as $xsubkey => $xsubvalue){
		        				if(is_array($xsubvalue)){
		        					foreach($xsubvalue as $ysubkey => $ysubvalue){
		        						if($needle == $ysubvalue){
		        							return $ysubkey;
		        						}
		        					}
		        				} else {
		        					if($needle == $xsubvalue){
		        						return $xsubkey;
		        					}
		        				}
		        			}
		        		} else {
		        			if($needle == $subvalue){
		        				return $subkey;
		        			}
		        		}
		        	}
		        } else {
		        	if($needle == $value){
		        		return $key;
		        	}
		        }
		    }
		    return false;
		}
		$resp = recursive_array_search($link,$navlinks);
		function flatten_array($array, &$result) {
		    foreach($array as $key => $value) {
		        if(is_array($value)) {
		            flatten_array($value, $result);
		        } else {
		            $result[$key] = $value;
		        }
		    }
		}
		flatten_array($navlinks, $newArr);
		*/	
	}
	if(isset($_POST['submit'])){
		$ans1 = $_POST['a1'];
		$to      = 'rippler7@msn.com';
		$subject = 'BIO 103N Mail Test';
		$message = $ans1;
		$headers = 'From: webmaster@example.com' . "\r\n" .
		    'Reply-To: webmaster@example.com' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();

		mail($to, $subject, $ans1."\nasd\n", null, "-freturn@mydomain.com");
		echo json_encode("Email sent.");
	}
?>