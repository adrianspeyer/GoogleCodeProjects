<?php require($_server['DOCUMENT_root']."../admin/settings.php");?>
<html>
<head>

</head>

<body>
<h1><span style="font-weight: bold;">Having trouble with YMMV web
stats...</span></h1>
Troubleshoot by clicking <a href="troubleshoot.php">here.</a>

<?php
$hostname=gethostbyaddr($_SERVER['REMOTE_ADDR']);
$QUERY_STRING = preg_replace("%[^/a-zA-Z0-9@,_]%", '', $_SERVER['QUERY_STRING']); 
//saves ip address and timestamp
$str="|".date("D dS M,Y h:i a") . "|". $_SERVER['REMOTE_ADDR'] ."|".$_SERVER['QUERY_STRING']."|".$hostname."|".$_SERVER['HTTP_USER_AGENT']."|".$_SERVER['HTTP_REFERER']."\n";

file_put_contents("TSlog.txt", $str, FILE_APPEND);
?>
<noscript><b>Please turn on javascript for this to work properly</b></noscript>
</body>
</html>

