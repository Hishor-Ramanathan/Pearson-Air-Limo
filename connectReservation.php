<?php

$date = $_POST['date'];
$time = $_POST['time'];
$pick = $_POST['pick'];
$drop = $_POST['drop'];
$info = $_POST['info'];
$conn = new mysqli('localhost', 'root', '', 'reservationdata');
if ($conn->connect_error) {
	echo "$conn->connect_error";
	die("Connection Failed : " . $conn->connect_error);
}
$stmt = $conn->prepare("insert into registration(date, time, pick, drop, info) values(?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $date, $time, $pick, $drop, $info);
$execval = $stmt->execute();
if (!($execval == 1)) {
	echo $execval;
} else {
	header("Location: index.php");
	die();
}