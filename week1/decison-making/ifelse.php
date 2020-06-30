<?php

"10" == 10;
"10" === 10;

// ==
// ===
// >
// <=
// >
// <=
// !=
// &&
// ||

$age = 60;

if($aminat_age > $age) {
    // give her the benefits
    $is_old = true;
} else {
    // no benefits
    $is_old = false;
}


if($aminat_age > $age) {
    // is true
    // give her the benefits
} elseif($aminat_age > 40) {
    // give her some benefits
} else {
    // is false
    // no benefits
}

$aminat_age = 10;
switch ($aminat_age * 7) {
    case 6:
        # give her sweet
        break;
    case "7":
        # give her milo
        break;
    case 8:
        # give her milk
        break;
    case 9:
        # give her water
        break;
    default:
        # go home
        break;
}

// username password
// check database for records
// user -> role



switch ($role) {
    case 'mentees':
        # code...
        break;
    case 'mentors':
        # code...
        break;
    case 'poc':
        # code...
        break;
    default:
        # code...
        break;
}



