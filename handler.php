<?php 
header("Access-Control-Allow-Origin: *");
$externalIp = file_get_contents('https://script.google.com/macros/s/AKfycbw4hn_cIASXSR29tM-Rv4r13ij-qnaZswfvK7XFRDdw2LbFEcc/exec');
echo $externalIp;
?>