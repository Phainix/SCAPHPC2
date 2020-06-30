<?php

$age = 60;

$result = $aminat_age > $age ? "give her the benefits" : "no benefits";

$is_old = $aminat_age > $age ? true : false;

$name = isset($_GET['name']) ? $_GET['name'] : 'anonymous';

$name = $_GET['name'] ?? 'anonymous';
