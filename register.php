<?php


$name=$_POST['name'];
$secname=$_POST['secname'];

if (empty($name)) {
	$name_error='please enter your name';
	}
if (empty($secname)) {
	$telephone_error='please enter your contact number';
}

if (empty($name_error) && empty($telephone_error)) {
	include('index.php');
} else{
include('f.php');
}
?>