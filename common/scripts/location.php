<?php

function main($location, $thumbs_path, $full_images_path, $num_of_columns) {
	//$location="garden";
	//$thumbs_path = "./thumbs/";
	//$full_images_path = "./full_images/";
	//$num_of_columns = 5;
	
	$images = dirList($thumbs_path);
	//sort alphabetically
	sort($images);

	//$s1 = "<a><img src=\"" . $thumbs_path;
	//$s2 = "\" alt=\"\"></img></a>";
	$table_opts='border="0" cellpadding="0" cellspacing="4" width="204"';
	//to_table ($images, $num_of_columns, $s1, $s2, $table_opts);
	
	$p_holder="%hold%";
	$s1 = '<a href="../common/scripts/full_page.php?loc=' . $location . "&amp;name=" . $p_holder . '">';
	$s1 = $s1 . '<img src="' . $thumbs_path . $p_holder . '" alt="" border="0"></img></a>';
	to_table2($images, $num_of_columns, $s1, $p_holder, $table_opts);

}

//puts an array in a table
//in_array = the array to go through
//col = number of columns
//s1 = put inside <td> tag
//p_holder = text to replace with array value
//table_opt = added in <table> tag
function to_table2 ($in_array, $col, $s1, $p_holder, $table_opt){

	$count=0;
	
	print ("<table " . $table_opt . ">\n");
	print "<tr>\n";
	foreach($in_array as $ele){
		
		if (($count % $col) == 0 && $count != 0){
			print "</tr>\n";
			print "<tr>\n";
		}
		$count++;
		//replace all occurrances of $p_holder in $s1 with $ele
		$tds = str_replace($p_holder, $ele, $s1);
		print ("<td>" . $tds . "</td>\n");
	}
	print ("</tr>\n" . "</table>\n");
}


function dirList ($directory) 
{

    // create an array to hold directory list
    $results = array();

    // create a handler for the directory
    $handler = opendir($directory);

    // keep going until all files in directory have been read
    while ($file = readdir($handler)) {

        // if $file isn't this directory or its parent, 
        // add it to the results array
        if ($file != '.' && $file != '..')
            $results[] = $file;
    }

    // tidy up: close the handler
    closedir($handler);

    // done!
    return $results;

}

?>