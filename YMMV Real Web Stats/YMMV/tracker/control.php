<?


$hostname=gethostbyaddr($_SERVER['REMOTE_ADDR']);
$QUERY_STRING = preg_replace("%[^/a-zA-Z0-9@,_]%", '', $_SERVER['QUERY_STRING']); 
//saves ip address and timestamp
$str="|".date("D dS M,Y h:i a") . "|". $_SERVER['REMOTE_ADDR'] ."|".$_SERVER['QUERY_STRING']."|".$hostname."|".$_SERVER['HTTP_USER_AGENT']."|".$_SERVER['HTTP_REFERER']."\n";

file_put_contents("./log.txt", $str, FILE_APPEND);
?>