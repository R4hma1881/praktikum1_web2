<?php
$profileArray = [
    "nama" => "Moyy" ,
     "kelas" => "TI11"
];

echo $profileArray["nama"] . "<br>";
echo $profileArray["kelas"];


echo "----";
$profileMultiArray = [
    [
        "nama" => "Moyy",
        "semester" => 2
    ] , [
        "nama" => "ola",
        "semester" => 8
    ] , [
        "nama" => "upi",
        "semester" => 6
    ]


    ];

foreach($profileMultiArray as $profile){
    echo $profile['nama'] . "<br>";
    echo $profile['semester'] . "<br>";
}