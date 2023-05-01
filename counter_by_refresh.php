<?php

session_start();

if (isset($_SESSION['counts'])) {
	$_SESSION['counts'] = $_SESSION['counts'] + 1;
} else {
	$_SESSION['counts'] = 1;
}
echo "counts = " . $_SESSION['counts'];
