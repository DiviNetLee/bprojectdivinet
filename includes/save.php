<?php
if(!empty($_POST["submit"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];

	$conn = mysql_connect("127.0.1.1:**","****","*********");
	mysql_select_db("client_info",$conn);
	mysql_query("INSERT INTO clients (name, email, message) VALUES ('" . $name. "', '" . $email. "', '" . $message. "')");
	$insert_id = mysql_insert_id();
	if(!empty($insert_id)) {
	$notice = "Your contact information is saved successfully";
	}
}
?>
