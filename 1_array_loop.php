<?php

$aplikasi[1] = 'gtAkademik';
$aplikasi[2] = 'gtFinansi';
$aplikasi[3] = 'gtPerizinan';
$aplikasi[4] = 'eCampuz';
$aplikasi[5] = 'eOviz';

// initiate index
$i = 1;

// check then loop
while (isset($aplikasi[$i])) {
    echo $aplikasi[$i] . "<br>";
    $i++;
}

?>