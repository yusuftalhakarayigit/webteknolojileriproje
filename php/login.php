<?php

$kullanicilar = [
    [
        "email" => "b2412100001@sakarya.edu.tr",
        "sifre" => "b2412100001"
    ],
    [
        "email" => "yusuf@sakarya.edu.tr",
        "sifre" => "12345"
    ],
    [
        "email" => "admin@sakarya.edu.tr",
        "sifre" => "admin123"
    ]
];

$email = $_POST["email"] ?? "";
$sifre = $_POST["sifre"] ?? "";

$girisBasarili = false;
$ogrenciNo = "";

foreach ($kullanicilar as $kullanici) {
    if ($email == $kullanici["email"] && $sifre == $kullanici["sifre"]) {
        $girisBasarili = true;
        $ogrenciNo = explode("@", $email)[0];
        break;
    }
}

if ($girisBasarili) {
    header("Location: basarili.php?ogrenciNo=" . urlencode($ogrenciNo));
    exit();
} else {
    header("Location: ../login.html");
    exit();
}

?>