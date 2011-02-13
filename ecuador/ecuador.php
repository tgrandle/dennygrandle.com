<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<!-- change 1 -->
<title>Denny Grandle - Ecuador</title>

<script language="JavaScript" src="../common/scripts/pop.js" type="text/javascript"></script>
<script language="JavaScript" src="../common/scripts/nortclick.js" type="text/javascript"></script>
<!--
This website and all images are copyright Denny Grandle and may not be used without permission
For futher information contact webmaster@dennygrandle.com
-->
</head>

<body bgcolor="#000000">
<!-- change 2 -->
<p align="center"><img src="components/ecuador_label.jpg" alt="Burma" name="Burma" width="190" height="62" /></p>
<p align="center"><font color="#c05c02" face="Enviro">click on a thumbnail for a larger picture</font> </p>
<div align="center">
<!-- change 3 -->
<?php
	$location="ecuador";
	$thumbs_path = "./thumbs/";
	$full_images_path = "./full_images/";
	$num_of_columns = 5;
	
	include("../common/scripts/location.php");
	
main($location, $thumbs_path, $full_images_path, $num_of_columns);

?>
</div>
<div align="center">
<!-- change 4 -->
<p><a href="javascript:;" onclick="MM_openBrWindow('ecuador_slideshow.php','','width=500,height=600')" type="text/javascript">
<img src="../common/components/slideshow.jpg" width="168" height="66" border="0" alt="slideshow"/></a></p>
<p><a href="../index.php"><img src="../common/components/home.jpg" width="117" height="58" border="0" alt="home"/></a></p>
<p>&nbsp;</p>
<p><font color="#c05c02" face="Enviro" size="-1">All images on 
  this site are copywritten by Denny Grandle and may not be used without written 
  permission.</font></p>
</div>
<?php
include("../common/scripts/footer.php");
?>
</body>
</html>
