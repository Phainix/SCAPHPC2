<?php
include_once './autoload.php';

session_unset();
session_destroy();

header('Location: login.php');
?>