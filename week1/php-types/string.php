<?php
echo 'this is a simple string';

echo 'You can also have embedded newlines in
strings this way as it is
okay to do';

// Outputs: Arnold once said: "I'll be back"
echo 'Arnold once said: "I\'ll be back"';

echo "Arnold once said: \"I'll be back\"";

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\\*.*?';

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\*.*?';

// Outputs: This will not expand: \n a newline
echo 'This will not expand: \n a newline';


$expand = "hi";

$either = "hello";

$array = array(
    0 => "me", 
    1 => "mine", 
    2 => array(
        0 => "yours"
    )
);

// Outputs: Variables do not $expand $either
echo 'Variables do not $expand $either';

echo "Variables do not $expand $either $array[0] {$array[2][0]}";

$bar = <<<EOT
$expand $either
barber user
EOT;

$bar2 = <<<'EOT'
$expand $either
barber user
EOT;

var_dump($bar, $bar2);

?>