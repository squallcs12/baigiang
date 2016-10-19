<?php

if (isset($_POST['client'])) {
	$item = $_POST['client'];

	echo $item;
} else {
	$item = $_POST['server'];

	echo $item;
}