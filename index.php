<?php
$url = "http://185.9.37.60:9832/currentsong";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
$response = curl_exec($ch);
if (curl_errno($ch)) {
    echo "cURL Hatası: " . curl_error($ch);
} else {
    echo "<span>" . htmlspecialchars($response) . "</span>";
}
curl_close($ch);
?>
