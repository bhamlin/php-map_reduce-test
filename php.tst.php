<?php

function comma_collect( $u, $v ) {
    return "$u,$v";
}

$data = array( "lol", "this", "should", 9, "work\r" );

$dt = array_map( "trim", $data );

$output = array_reduce( array_slice( $dt, 1 ), "comma_collect", $dt[0] );
print( $output );
print( "\n" );

 ?>