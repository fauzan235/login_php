<?php
session_start();


if (!isset($_SESSION['user_id'])) {
    echo "Anda belum login";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow p-4">
        <h3>Selamat datang, <?= $_SESSION['nama']; ?> 👋</h3>
        <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
    </div>
</div>

</body>
</html>
