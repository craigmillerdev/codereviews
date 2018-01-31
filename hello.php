<?php

$hour = date('G');

if ( $hour >= 5 && $hour <= 11 ) {
    $greeting = "Good Morning";
} else if ( $hour >= 12 && $hour <= 18 ) {
    $greeting = "Good Afternoon";
} else if ( $hour >= 19 || $hour <= 4 ) {
    $greeting = "Good Evening";
}

$string = "$s %s\n";

echo sprintf($string, $greeting, $argv[1]);

exit(0);
