<?php
$arrayBuah = ["Jeruk" , "Mangga" , "Pisang" , "Apel"];

// mengurutkan nilai suatu array
sort($arrayBuah);

// menghapus nilai array yang paling akhir
array_pop($arrayBuah);

// menghapus keseluruhan isi variabel
// bisa juga menghapus spesifik nilai array tertentu
// unset($arrayBuah);

// untuk menambahkan variabel di paling akhir
array_push($arrayBuah, "Durian");

// menghapus nilai array di paling depan/awal
array_shift($arrayBuah);

// menambahkan nilai awal di apaling depan
array_unsift($arrayBuah, "semangka")


// mengubah spesifik nilai array tertentu 
$arrayBuah[0] = "manggis"; 


foreach($arrayBuah as $buah) {
    echo $buah . "<br>";
}