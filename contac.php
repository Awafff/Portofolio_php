<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Portofolio Saya</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="about.php">Tentang Saya</a></li>
                <li><a href="projects.php">Proyek</a></li>
                <li><a href="contact.php">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <section class="contact">
        <h2>Kontak Saya</h2>
        <p>Jika Anda tertarik untuk bekerja sama atau memiliki pertanyaan, silakan isi formulir di bawah ini.</p>
        <form action="contact.php" method="POST">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Pesan:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Kirim Pesan</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Portofolio Saya. Semua hak dilindungi.</p>
    </footer>
</body>
</html>
