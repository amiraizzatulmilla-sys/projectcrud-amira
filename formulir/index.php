<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
</head>
<body>

    <h1>Formulir Pendaftaran</h1>
    <p>Silahkan isi data dibawah ini dengan benar</p>

    <form method="POST" action="submit.php">
        <label>Nama:</label><br>
        <input type="text" name="nama" placeholder="Isi dengan nama" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" placeholder="Isi dengan email" required><br><br>

        <label>Nomor Handphone:</label><br>
        <input type="text" name="handphone" placeholder="Isi dengan handphone" required><br><br>

        <!-- Tambahan Kolom Alamat -->
        <label>Alamat:</label><br>
        <textarea name="alamat" placeholder="Isi dengan alamat" required></textarea><br><br>

        <button type="submit">Submit</button>
    </form>

</body>
</html>