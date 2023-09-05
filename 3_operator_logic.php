<?php
function pembagian($dividen, $pembagi) {
    // condition for not division by 0
    if ($pembagi == 0) {
        throw new Exception("Pembagian dengan nol tidak diperbolehkan.");
    }
    
    $hasilBagi = 0;
    $sisa = $dividen;
    
    while ($sisa >= $pembagi) {
        $sisa -= $pembagi;
        $hasilBagi++;
    }
    
    return $hasilBagi;
}

// Input angka
echo "Masukkan dividen: ";
$dividen = intval(readline());

echo "Masukkan pembagi: ";
$pembagi = intval(readline());

try {
    $hasil = pembagian($dividen, $pembagi);
    echo "Hasil pembagian: " . $hasil . PHP_EOL;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}
?>