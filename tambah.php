<html>
<head>
</head>
<body>
    <h1>Peminjaman </h1>
    <form action="proses_tambah.php" method="POST">
        <fieldset>
            <p>
                <label for="nama_peminjam">Nama Peminjam :</label>
                <input type="text" name="nama_peminjam" />
            </p>
            <p>
                <label for="alamat">Alamat :</label><br>
                <textarea name="alamat" id="" cols="30" rows="S"></textarea>
            </p>
            <p>
                <label for="umur">Umur :</label>
                <input type="number" name="umur" /> 

            </p>
            <p>
                <label for="keperluan">Keperluan :</label>
                <input type="text" name="keperluan" />
            </p>
            <p>
                <label for="jaminan">Jaminan :</label>
                <input type="text" name="jaminan" />
            </p>
            <p>
                <label for="nomor_rangka">Nomor_Rangka :</label>
                <input type="number" name="nomor_rangka" />
            </p>
            <p>
                <label for="merek">Merek :</label>
                <input type="text" name="merek" />
            </p>
            <p>
                <label for="jenis_motor">Jenis_Motor :</label>
                <input type="text" name="jenis_motor" />
            </p>
            <p>
                <label for="tahun_motor">Tahun_Motor :</label>
                <input type="number" name="tahun_motor" />
            </p>
            <p>
                <label for="tanggal_pinjam">Tanggal_Pinjam :</label>
                <input type="date" name="tanggal_pinjam" />
            </p>
            <p>
                <label for="tanggal_kembali">Tanggal_Kembali :</label>
                <input type="date" name="tanggal_kembali" />
            </p>
            <p>
                <input type="submit" value="kirim" name="kirim" />
            </p>
        </fieldset>
</form>
</center>
</body>
</html>