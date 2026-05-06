<?php
$ad = $_POST["ad"] ?? "";
$soyad = $_POST["soyad"] ?? "";
$email = $_POST["email"] ?? "";
$telefon = $_POST["telefon"] ?? "";
$konu = $_POST["konu"] ?? "";
$cinsiyet = $_POST["cinsiyet"] ?? "";
$mesaj = $_POST["mesaj"] ?? "";
$onay = $_POST["onay"] ?? "";
$ilgiler = $_POST["ilgi"] ?? [];
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Form Sonucu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card p-4 shadow">
        <h1 class="mb-4">Gönderilen Form Bilgileri</h1>

        <table class="table table-bordered">
            <tr><th>Ad</th><td><?php echo htmlspecialchars($ad); ?></td></tr>
            <tr><th>Soyad</th><td><?php echo htmlspecialchars($soyad); ?></td></tr>
            <tr><th>E-posta</th><td><?php echo htmlspecialchars($email); ?></td></tr>
            <tr><th>Telefon</th><td><?php echo htmlspecialchars($telefon); ?></td></tr>
            <tr><th>Konu</th><td><?php echo htmlspecialchars($konu); ?></td></tr>
            <tr><th>Cinsiyet</th><td><?php echo htmlspecialchars($cinsiyet); ?></td></tr>
            <tr><th>İlgi Alanları</th><td><?php echo htmlspecialchars(implode(", ", $ilgiler)); ?></td></tr>
            <tr><th>Mesaj</th><td><?php echo htmlspecialchars($mesaj); ?></td></tr>
            <tr><th>Onay</th><td><?php echo htmlspecialchars($onay); ?></td></tr>
        </table>

        <a href="../iletisim.html" class="btn btn-dark">Forma Geri Dön</a>
    </div>
</div>

</body>
</html>