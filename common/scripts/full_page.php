<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Denny Grandle</title>
</head>

<body bgcolor="#000000">
<script language="JavaScript" src="nortclick.js" type="text/javascript"></script>
<div align="center">
<?php
	$location=$HTTP_GET_VARS[loc];
	$filename=$HTTP_GET_VARS[name];
	
//	print("location " . $location);
//	print ("filename " . $filename);
	
	print ('<img name="full_image_placeholder" src="');
	print ("../../" . $loc . "/full_images/" . $name);
	print('"></img>');

?>
</div>
<?php
include("./footer.php");
?>
</body>
</html>
