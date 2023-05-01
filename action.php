<?php
// Check if data was sent via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Process login
	// ...
	echo "Data was sent via POST method";
}
// Check if data was sent via GET
else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	$email = $_GET['email'];
	$password = $_GET['password'];

	// Process login
	// ...
	echo "Data was sent via GET method";
}
// No data was sent
else {
	echo "No data was sent";
}
