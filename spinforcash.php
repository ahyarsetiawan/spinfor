<?php
// Vj Rusmayana feat YarzCode Media
function earn($sgbcode, $sgbsecret, $user, $access) {
		$body = http_build_query(array("sgbcode" => $sgbcode, "sgbsecret" => $sgbsecret, "username" => $user, "access" => $access));
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://yarzc0de.com/api/spinfor.php");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($ch);
		curl_close($ch);
	return $result;
}
echo "Powered By Vj ft YarzCode\n";
echo "SGB Code  : ";
$sgbcode = trim(fgets(STDIN));
echo "SGB Secret : ";
$sgbsecret = trim(fgets(STDIN));
echo "Username  : ";
$user = trim(fgets(STDIN));
echo "Accesskey : ";
$access = trim(fgets(STDIN));
echo "Jumlah    : ";	
$jum = trim(fgets(STDIN));
echo "Delay     : ";
$delay = trim(fgets(STDIN));
for($a=0;$a<$jum;$a++){
	$data = earn($sgbcode, $sgbsecret, $user, $access);
	echo "".$data."\n";
    sleep($delay);
}
?>

