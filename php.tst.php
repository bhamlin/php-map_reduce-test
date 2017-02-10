<?php

function comma_collect( $u, $v ) {
    return "$u,$v";
}

$data = array( "lol", "this", "should", 9, "work\r");

$output = array_reduce(array_map("trim", $data), "comma_collect");
print(ltrim("$output", ","));
print("\n");

 ?>