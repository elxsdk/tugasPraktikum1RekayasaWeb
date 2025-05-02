<?php
// Variabel yang berisi JSON
$jsonString = '{"nama":"Andi","umur":25,"kota":"Jakarta"}';

// Decode ke bentuk PHP Object
$obj = json_decode($jsonString);

// Decode ke bentuk PHP Array
$arr = json_decode($jsonString, true);

// Akses nilai dari PHP Object
echo "Dari Object:<br>";
echo "Nama: " . $obj->nama . "<br>";
echo "Umur: " . $obj->umur . "<br>";
echo "Kota: " . $obj->kota . "<br>";

// Akses nilai dari PHP Array
echo "<br>Dari Array:<br>";
echo "Nama: " . $arr["nama"] . "<br>";
echo "Umur: " . $arr["umur"] . "<br>";
echo "Kota: " . $arr["kota"] . "<br>";
