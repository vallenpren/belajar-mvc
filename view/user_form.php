<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User - Premium Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container" style="max-width: 500px;">
        <h2>Tambah Pengguna Baru</h2>
        <form method="post" action="index.php?action=store">
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="form-group">
                <label for="email">Alamat Email</label>
                <input type="email" id="email" name="email" placeholder="contoh@email.com" required>
            </div>
            <div class="actions">
                <button type="submit" class="btn btn-primary" style="flex: 1; justify-content: center;">Simpan Data</button>
                <a href="index.php" class="btn" style="background: #f1f5f9; color: var(--text-muted);">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>