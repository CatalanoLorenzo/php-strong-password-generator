<?php
session_start();
echo ($_SESSION["pass"]);
$_SESSION["pass"] = '';
