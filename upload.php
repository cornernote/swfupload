<?php

// start swf session
if (isset($_POST[session_name()])) session_id($_POST[session_name()]);
session_start();

// check for file upload
if (!isset($_FILES['Filedata'])) {
	echo 'uploaded file not found';
	exit;
}

// move uploaded file
$target = "images/" . basename($_FILES['Filedata']['name']);
if (!move_uploaded_file($_FILES['Filedata']['tmp_name'], $target)) {
	echo 'uploaded file cannot be moved';
	exit;
}

?>