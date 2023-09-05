<?php 
    // looping with ternary condition
    for ($angka = 1; $angka <= 50; $angka++) {
        $output = ($angka % 3 == 0 && $angka % 5 == 0) ? "FooBar" : (($angka % 3 == 0) ? "Foo" : (($angka % 5 == 0) ? "Bar" : $angka));
        echo $output . "\n";
    }
?>