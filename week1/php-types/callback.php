<?php

function name() {

}


$func = function () {
    
};

$func();

call_user_func('func');


function eat($food, callable $play) {
    $play();
}

$jump = function() {
    echo "Food";
};

eat("rice", function() {
    echo "Jump";
});

eat("beans", function() {
    echo "Run";
});

eat("bread", function() {
    echo "Sleep";
});