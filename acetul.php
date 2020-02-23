<?php
ob_start();
$next = array("palsifal.html", "barouki.html");
while (ob_get_status()) {
	ob_end_clean();
}
$value = rand(0,1);
header( "Location: $next[$value]");
?>
		