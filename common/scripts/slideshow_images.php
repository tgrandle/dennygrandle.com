<?php
Header("content-type: application/x-javascript");

//echo 'document.write("hi");';

//point $dirname to directory relative to this script
$dirname=$HTTP_GET_VARS[path];
$img_path=".." . $dirname;
$dirname = "../.." . $dirname;
//echo 'document.write("' . $dirname . '");';


echo 'var fadeimages=new Array();'; //Define array in JavaScript

//echo 'fadeimages[1]="a";';
//echo 'fadeimages[2]="b";';

return_images_to_js($dirname, $img_path); //Output the array elements containing the image file names

//$path is relative to this script
//$img_path is relative to javascript page
function return_images_to_js($path, $img_path){

	//$img_path sets path relative to javascript slideshow page
	//$img_path = "../garden/full_images/";

//	echo 'document.write("hello");';
	//$dirname=$HTTP_GET_VARS[path];
	//echo 'document.write("' . $dirname . '");'
//	echo 'document.write("' . $path . '");';
	$pattern="(\.jpg$)|(\.jpeg$)"; //valid image extensions
	$files = array();
	//$foo = array();
	$curimage=0;
	if($handle = opendir($path)) {
		while(false !== ($file = readdir($handle))){
			if(eregi($pattern, $file)){ //if this file is a valid image
				//Output it as a JavaScript array element
				//echo 'document.write("' . $file . '");';
				
				//echo 'fadeimages['.$curimage.']="'.$file .'";';
				
				$files[$curimage]=$img_path . $file;
				$curimage++;
			}
		}
	closedir($handle);
	sort($files);
	$count=0;
	foreach ($files as $a){
		echo 'fadeimages['.$count.']="'.$a .'";';
		$count++;
	}
	}
	return($files);
}


?>
