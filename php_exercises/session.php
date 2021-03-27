<?php
session_start();
$_SESSION["name"]="abc";
echo $_SESSION["name"];
?>