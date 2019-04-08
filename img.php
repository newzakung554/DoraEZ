<?php

function response($src, $alt, $doTitle) {
	echo "<img src=\"$src\" alt=\"$alt\" " . ($doTitle ? "title=\"$alt\" " : "") . "style=\"width: 120px;height: 120px;\">";
	exit(0);
}

if (isset($_POST["access_token"])) {
	$ch = curl_init("https://graph.facebook.com/me");
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		"Authorization: Bearer " . $_POST["access_token"]
	));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$resp = curl_exec($ch);
	if (curl_getinfo($ch, CURLINFO_HTTP_CODE) == 200) {
		curl_close($ch);
		$resp = json_decode($resp);
		response("https://graph.facebook.com/" . $resp->id . "/picture?width=650", "Name : " . $resp->name . " ID : " . $resp->id, true);
	}
	curl_close($ch);
	response("img/fb-profile.png", "User Image", false);
}
response("img/fb-profile.png", "User Image", false);

?>