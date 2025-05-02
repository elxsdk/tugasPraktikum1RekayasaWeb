<?php
// Membuat variabel array
$data = [
  "nama" => "Andi",
  "umur" => 25,
  "kota" => "Jakarta"
];

// Encode ke format JSON
$jsonData = json_encode($data);

// Menampilkan hasil JSON
echo $jsonData;
