<?php require_once "atas.php" ?>
<form style="margin-bottom: 50px;">
    <label for="nama">Nama Lengkap:</label>
    <input type="text" id="nama" name="nama" required>

    <label for="alamat">Alamat Lengkap:</label>
    <input type="text" id="alamat" name="alamat" required>

    <label for="tanggal">Tanggal Pemesanan:</label>
    <input type="date" id="tanggal" name="tanggal" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="hp">No.HP:</label>
    <input type="email" id="hp" name="hp" required>

    <label for="catatan">Catatan:</label>
    <textarea id="catatan" name="catatan" rows="4"></textarea>

    <label for="produk">Produk:</label>
    <select id="produk" name="produk" required>
        <option value="">-- Pilih Produk --</option>
        <option value="produk1">Produk 1</option>
        <option value="produk2">Produk 2</option>
        <option value="produk3">Produk 3</option>
        <option value="produk4">Produk 4</option>
        <option value="produk5">Produk 5</option>
        <option value="produk6">Produk 6</option>
        <option value="produk7">Produk 7</option>
        <option value="produk8">Produk 8</option>
    </select>

    <label for="jumlah">Jumlah:</label>
    <input type="number" id="jumlah" name="jumlah" min="1" max="10" required>

    <button type="submit" onclick="location.href='thanks.php'">Pesan Sekarang</button>
</form>
<?php require_once "bawah.php" ?>