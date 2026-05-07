<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar User - Premium Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
            <h2 style="margin-bottom: 0;">Daftar Pengguna</h2>
            <a href="index.php?action=create" class="btn btn-primary">+ Tambah User</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th style="text-align: right;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($users)): ?>
                    <tr>
                        <td colspan="4" style="text-align: center; color: var(--text-muted); padding: 2rem;">
                            Belum ada data user.
                        </td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><span style="font-weight: 600; color: var(--text-muted);">#<?= $user['id'] ?></span></td>
                            <td><span style="font-weight: 500;"><?= $user['name'] ?></span></td>
                            <td><?= $user['email'] ?></td>
                            <td style="text-align: right;">
                                <a href="index.php?action=edit&id=<?= $user['id'] ?>" class="btn btn-edit">Edit</a>
                                <a href="index.php?action=delete&id=<?= $user['id'] ?>" class="btn btn-delete" onclick="return confirm('Hapus user ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>