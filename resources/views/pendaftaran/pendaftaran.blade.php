<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Formulir Pendaftaran Siswa Baru</h1>
        <form method="post" action="proses_pendaftaran.php"> <div class="mb-3">
                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="agama" class="form-label">Agama</label>
                <input type="text" class="form-control" id="agama" name="agama" required>
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="warga indonesia">warga indonesia</option>
                    <option value="warga negara asing">warga negara asing</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="nik" class="form-label">Nomer Induk Kependudukan</label>
                <input type="text" class="form-control" id="nik" name="nik" required>
            </div>
            <div class="mb-3">
                <label for="nomer_kk" class="form-label">Nomer Kartu Keluarga</label>
                <input type="text" class="form-control" id="nomer_kk" name="nomer_kk" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Lengkap</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
            <div class="mb-3">
                <label for="no_telepon" class="form-label">Nomer Telepon</label>
                <input type="text" class="form-control" id="no_telepon" name="no_telepon" required>
            </div>
            <div class="mb-3">
                <label for="nama_orang_tua" class="form-label">Nama Orang Tua</label>
                <input type="text" class="form-control" id="nama_orang_tua" name="nama_orang_tua" required>
            </div>
            <div class="mb-3">
                <label for="pekerjaan_orang_tua" class="form-label">Pekerjaan Prang Tua</label>
                <input type="text" class="form-control" id="pekerjaan_orang_tua" name="pekerjaan_orang_tua" required>
            </div>
            <div class="mb-3">
                <label for="no_telepon_orang_tua" class="form-label">Nomer Telepon Orang Tua</label>
                <input type="text" class="form-control" id="no_telepon_orang_tua" name="no_telepon_orang_tua" required>
            </div>
            <div class="mb-3">
                <label for="email_orang_tua" class="form-label">Email Orang Tua</label>
                <input type="text" class="form-control" id="email_orang_tua" name="email_orang_tua" required>
            </div>
            <div class="mb-3">
                <label for="sekolah_asal" class="form-label">Sekolah Asal</label>
                <input type="text" class="form-control" id="sekolah_asal" name="sekolah_asal" required>
            </div>
            <div class="mb-3">
                <label for="alamat_sekolah_asal" class="form-label">Alamat Sekolah Asal</label>
                <input type="text" class="form-control" id="alamat_sekolah_asal" name="alamat_sekolah_asal" required>
            </div>
            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" class="form-control" id="nik" name="nik" required>
            </div>
             <div class="mb-3">
                <label for="rapot_semester_1" class="form-label">Rapot Semester 1</label>
                <input type="file" class="form-control" id="rapot_semester_1" name="rapot_semester_1" required>
            </div>
            <div class="mb-3">
                <label for="rapot_semester_2" class="form-label">Rapot Semester 2</label>
                <input type="file" class="form-control" id="rapot_semester_2" name="rapot_semester_2" required>
            </div>
            <div class="mb-3">
                <label for="rapot_semester_3" class="form-label">Rapot Semester 3</label>
                <input type="file" class="form-control" id="rapot_semester_3" name="rapot_semester_3" required>
            </div>
            <div class="mb-3">
                <label for="rapot_semester_4" class="form-label">Rapot Semester 4</label>
                <input type="file" class="form-control" id="rapot_semester_4" name="rapot_semester_4" required>
            </div>
            <div class="mb-3">
                <label for="rapot_semester_5" class="form-label">Rapot Semester 5</label>
                <input type="file" class="form-control" id="rapot_semester_5" name="rapot_semester_5" required>
            </div>
            <div class="mb-3">
                <label for="rapot_semester_6" class="form-label">Rapot Semester 6</label>
                <input type="file" class="form-control" id="rapot_semester_6" name="rapot_semester_6" required>
            </div>
            <button type="submit" class="btn btn-primary">Daftar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
