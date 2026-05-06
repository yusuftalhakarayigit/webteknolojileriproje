<?php
$ogrenciNo = $_GET["ogrenciNo"] ?? "Kullanıcı";
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Başarılı Giriş</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card p-5 shadow text-center">
        <h1>Hoşgeldiniz <?php echo htmlspecialchars($ogrenciNo); ?></h1>
        <p>Giriş işlemi başarıyla tamamlandı.</p>

        <a href="../index.html" class="btn btn-dark mt-3">Ana Sayfaya Git</a>
    </div>
</div>

</body>
</html>