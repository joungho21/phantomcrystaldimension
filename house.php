<?php
ob_start();
$next = array("palsifal.html", "zol.html" , "zol.html");
while (ob_get_status()) {
	ob_end_clean();
}
$value = rand(0,2);
header( "Location: $next[$value]");
?>
		