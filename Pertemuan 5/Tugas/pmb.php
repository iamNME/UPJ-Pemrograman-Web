<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style>
        *{
            padding: 0;
            margin: 0;
        }
        .content{
            padding-bottom: 100px;
        }
        .judul{
            position: relative;
            border-bottom: 4px solid #c4c4c4;
            margin: 20px 0;
        }
        .judul h2{
            letter-spacing: 1px;
        }
        .judul h2:after{
            content: "";
            position: absolute;
            left: 0;
            width: 40%;
            height: 4px;
            background-color: #19ff19;
            bottom: -4px;
        }
        p.info, .form-group label{
            font-weight: 700;
            font-size: 14px;
        }
        .require{
            color: red;
        }
    </style>
</head>
<body>
    <div class="container-fluid" style="background: white;">
        <div class="content">
            <div class="row justify-content-center">
                <div class="col-sm-8 align-self-center">
                    <div class="judul pl-2">
                        <h2>Pendaftaran Online</h2>
                    </div>
                    <form action="konfirmasipmb.php" method="post">
                        <div class="mt-4 row">
                            <div class="col">
                                <div class="alert alert-danger fade show" role="alert">
                                    <strong style="color: red;">*</strong> Wajib Diisi!!!
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <label for="jalur">Jalur Penerimaan Mahasiswa Baru<span class="require">*</span></label>
                            <select name="jalur" id="jalur" class="form-control" required>
                                <optgroup label="--- Reguler ---">
                                    <option selected value="Rata-Rata Rapor">TA 2022/2023 Rata-Rata Rapor</option>
                                    <option value="Peringkat Kelas">Ta 2022/2023 Peringkat Kelas</option>
                                    <option value="USM">TA 2022/2023 Ujian Saringan Masuk (USM)</option>
                                </optgroup>
                                <optgroup label="--- Beasiswa Prestasi Jaya ---">
                                    <option value="Akademik">TA 2022/2023 Akademik</option>
                                    <option value="Olahraga">TA 2022/2023 Olahraga</option>
                                    <option value="Seni dan Budaya">TA 2022/2023 Seni Dan Budaya</option>
                                    <option value="Sains">TA 2022/2023 Sains</option>
                                </optgroup>
                                <optgroup label="--- Beasiswa UP Untuk Negeri ---">
                                    <option value="ASAK">TA 2022/2023 ASAK</option>
                                    <option value="OSIS/MPK">TA 2022/2023 OSIS/MPK</option>
                                </optgroup>                            
                                <optgroup label="--- Beasiswa Desain Produk ---">
                                    <option value="DEsain Produk">TA 2022/2023 Desain Produk</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Calon Mahasiswa (Sesuai Akte Kelahiran)<span class="require">*</span></label>
                            <input type="text" name="nama" placeholder="Silahkan Masukkan Nama Lengkap..." class="form-control" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ttl">Tempat & Tanggal Lahir<span class="require">*</span></label>
                                    <input class="form-control" type="text" name="ttl" id="ttl" required placeholder="Silahkan masukkan tempat, tanggal/bulan/tahun lahir...">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nik">NIK (Nomor Induk Kependudukan KTP / KK)<span class="require">*</span></label>
                                    <input class="form-control" type="text" name="nik" id="nik" required placeholder="Silahkan masukkan Nomor Induk Kependudukan...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="jk">Jenis Kelamin<span class="require">*</span></label>
                                    <select class="form-control" name="jk" id="jk" required>
                                        <optgroup label="--- Pilih ---">
                                            <option value="pria">Pria</option>
                                            <option value="wanita">Wanita</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="agama">Agama<span class="require">*</span></label>
                                    <select class="form-control" name="agama" id="agama" required>
                                        <optgroup label="--- Pilih ---">
                                            <option value="islam">Islam</option>
                                            <option value="katolik">Katolik</option>
                                            <option value="kristen">Kristen</option>
                                            <option value="hindu">Hindu</option>
                                            <option value="budha">Budha</option>
                                            <option value="lainnya">Lainnya</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="status">Status<span class="require">*</span></label>
                                    <select class="form-control" name="status" id="status" required>
                                        <optgroup label="--- Pilih ---">
                                            <option value="belum menikah">Belum Menikah</option>
                                            <option value="menikah">Menikah</option>
                                            <option value="janda">Janda</option>
                                            <option value="duda">Duda</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="kp">Kode Pos<span class="require">*</span></label>
                                    <input type="text" class="form-control" name="kp" id="kp" required placeholder="Silahkan masukkan kode pos...">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nh">No Handphone<span class="require">*</span></label>
                                    <input type="text" class="form-control" name="nh" id="nh" required placeholder="Silahkan masukkan no. handphone...">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email">Email<span class="require">*</span></label>
                                    <input type="email" class="form-control" name="email" id="email" required placeholder="Silahkan masukkan email...">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat<span class="require">*</span></label>
                            <textarea class="form-control" name="alamat" id="alamat" rows="4" placeholder="Silahkan masukkan alamat lengkap..."></textarea>
                        </div>
                        <div class="sekolah_asal mt-4">
                            <h3 style="text-align: center;">DATA SEKOLAH ASAL CALON MAHASISWA</h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="asal_sekolah">Asal Sekolah (SMA/SMK/MA)<span class="require">*</span></label>
                                        <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control" required placeholder="Silahkan masukkan asal sekolah...">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="kota_sekolah">Kota Sekolah<span class="require">*</span></label>
                                        <input type="text" name="kota_sekolah" id="kota_sekolah" class="form-control" required placeholder="Silahkan masukkan kota asal sekolah...">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="provinsi_sekolah">Provinsi Sekolah<span class="require">*</span></label>
                                        <select id="provinsi_sekolah" name="provinsi_sekolah" class="form-control" required>
                                            <optgroup label="--- Pilih ---">
                                                <option value="Aceh">Aceh</option>
                                                <option value="Bali">Bali</option>
                                                <option value="Banten">Banten</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="jurusan_sekolah">Jurusan Sekolah<span class="require">*</span></label>
                                        <input type="text" name="jurusan_sekolah" id="jurusan_sekolah" class="form-control" required placeholder="Silahkan masukkan jurusan sekolah...">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="tahun_lulus">Tahun Lulus<span class="require">*</span></label>
                                        <input type="text" name="tahun_lulus" id="tahun_lulus" class="form-control" required placeholder="Silahkan masukkan tahun lulus...">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="biaya_kuliah">Biaya Kuliah Dibiayai Oleh<span class="require">*</span></label>
                                        <select id="biaya_kuliah" name="biaya_kuliah" class="form-control" required>
                                            <optgroup label="--- Pilih ---">
                                                <option value="Beasiswa">Beasiswa</option>
                                                <option value="Ikatan Dinas">Ikatan Dinas</option>
                                                <option value="Orangtua">Orangtua</option>
                                                <option value="Wali">Wali</option>
                                                <option value="Sendiri">Sendiri</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="orang_tua mt-4">
                            <h3 style="text-align: center;">DATA ORANG TUA CALON MAHASISWA</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama_ayah">Nama Ayah<span class="require">*</span></label>
                                        <input class="form-control" type="text" name="nama_ayah" id="nama_ayah" required placeholder="Silahkan masukkan nama ayah...">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama_ibu">Nama Ibu<span class="require">*</span></label>
                                        <input class="form-control" type="text" name="nama_ibu" id="nama_ibu" required placeholder="Silahkan masukkan nama ibu...">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat_ortu">Alamat<span class="require">*</span></label>
                                <textarea class="form-control" name="alamat_ortu" id="alamat_ortu" rows="4" placeholder="Silahkan masukkan alamat lengkap..."></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kp_ortu">Kode Pos<span class="require">*</span></label>
                                        <input class="form-control" type="text" name="kp_ortu" id="kp_ortu" required placeholder="Silahkan masukkan kode pos...">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nh_ortu">No. Handphone<span class="require">*</span></label>
                                        <input class="form-control" type="text" name="nh_ortu" id="nh_ortu" required placeholder="Silahkan masukkan no. handphone...">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pt_ayah">Pendidikan Terakhir Ayah<span class="require">*</span></label>
                                        <select name="pt_ayah" id="pt_ayah" class="form-control">
                                            <optgroup label="--- Pilih ---">
                                                <option value="A - Tidak Tamat SD">A - Tidak Tamat SD</option>
                                                <option value="B - Tamat SD">B - Tamat SD</option>
                                                <option value="C - Tamat SMP">C - Tamat SMP</option>
                                                <option value="D - Tamat SMA">D - Tamat SMA</option>
                                                <option value="E - Diploma(D1 - D2)">E - Diploma(D1 - D2)</option>
                                                <option value="F - Sarjana (D3)">F - Sarjana (D3)</option>
                                                <option value="G - Sarjana (D4 - S1)">G - Sarjana (D4 - S1)</option>
                                                <option value="H - Pascasarjana (S2)">H - Pascasarjana (S2)</option>
                                                <option value="I - Doktor (S3)">I - Doktor (S3)</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pt_ibu">Pendidikan Terakhir Ibu<span class="require">*</span></label>
                                        <select name="pt_ibu" id="pt_ibu" class="form-control">
                                            <optgroup label="--- Pilih ---">
                                                <option value="A - Tidak Tamat SD">A - Tidak Tamat SD</option>
                                                <option value="B - Tamat SD">B - Tamat SD</option>
                                                <option value="C - Tamat SMP">C - Tamat SMP</option>
                                                <option value="D - Tamat SMA">D - Tamat SMA</option>
                                                <option value="E - Diploma(D1 - D2)">E - Diploma(D1 - D2)</option>
                                                <option value="F - Sarjana (D3)">F - Sarjana (D3)</option>
                                                <option value="G - Sarjana (D4 - S1)">G - Sarjana (D4 - S1)</option>
                                                <option value="H - Pascasarjana (S2)">H - Pascasarjana (S2)</option>
                                                <option value="I - Doktor (S3)">I - Doktor (S3)</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="st_ayah">Status Ayah<span class="require">*</span></label>
                                        <select name="st_ayah" id="st_ayah" class="form-control">
                                            <optgroup label="--- Pilih ---">
                                                <option value="Masih Hidup">Masih Hidup</option>
                                                <option value="Sudah Meninggal">Sudah Meninggal</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="st_ibu">Status Ibu<span class="require">*</span></label>
                                        <select name="st_ibu" id="st_ibu" class="form-control">
                                            <optgroup label="--- Pilih ---">
                                                <option value="Masih Hidup">Masih Hidup</option>
                                                <option value="Sudah Meninggal">Sudah Meninggal</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pk_ayah">Pekerjaan Ayah<span class="require">*</span></label>
                                        <select name="pk_ayah" id="pk_ayah" class="form-control">
                                            <optgroup label="--- Pilih ---">
                                                <option value="Pegawai Negeri">Pegawai Negeri</option>
                                                <option value="TNI/POLRI">TNI/POLRI</option>
                                                <option value="Pegawai Swasta">Pegawai Swasta</option>
                                                <option value="Wiraswasta">Wiraswasta</option>
                                                <option value="Tidak Bekerja">Tidak Bekerja</option>
                                                <option value="Pensiun">Pensiun</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pk_ibu">Pekerjaan Ibu<span class="require">*</span></label>
                                        <select name="pk_ibu" id="pk_ibu" class="form-control">
                                            <optgroup label="--- Pilih ---">
                                                <option value="Pegawai Negeri">Pegawai Negeri</option>
                                                <option value="TNI/POLRI">TNI/POLRI</option>
                                                <option value="Pegawai Swasta">Pegawai Swasta</option>
                                                <option value="Wiraswasta">Wiraswasta</option>
                                                <option value="Tidak Bekerja">Tidak Bekerja</option>
                                                <option value="Pensiun">Pensiun</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ph_ayah">Penghasilan Ayah<span class="require">*</span></label>
                                        <select name="ph_ayah" id="ph_ayah" class="form-control">
                                            <optgroup label="--- Pilih ---">
                                                <option value="< Rp 1.000.000">< Rp 1.000.000</option>
                                                <option value="Rp 1.000.000 - Rp 5.000.000">Rp 1.000.000 - Rp 5.000.000</option>
                                                <option value="Rp 5.000.000 - Rp 10.000.000">Rp 5.000.000 - Rp 10.000.000</option>
                                                <option value="> Rp 10.000.000">> Rp 10.000.000</option>
                                                <option value="Pensiun">Pensiun</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ph_ibu">Penghasilan Ibu<span class="require">*</span></label>
                                        <select name="ph_ibu" id="ph_ibu" class="form-control">
                                            <optgroup label="--- Pilih ---">
                                                <option value="< Rp 1.000.000">< Rp 1.000.000</option>
                                                <option value="Rp 1.000.000 - Rp 5.000.000">Rp 1.000.000 - Rp 5.000.000</option>
                                                <option value="Rp 5.000.000 - Rp 10.000.000">Rp 5.000.000 - Rp 10.000.000</option>
                                                <option value="> Rp 10.000.000">> Rp 10.000.000</option>
                                                <option value="Pensiun">Pensiun</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="peminatan mt-4">
                            <h3 style="text-align: center;">PEMINATAN PROGRAMA STUDI</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="program_studi">Pilihan Program Studi<span class="require">*</span></label>
                                        <select class="form-control" name="prrogram_studi" id="program_studi">
                                            <optgroup label="--- Pilih ---">
                                                <option value="Akuntansi">Akuntansi</option>
                                                <option value="Manajemen">Manajemen</option>
                                                <option value="Psikologi">Psikologi</option>
                                                <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                                                <option value="Desain Produk">Desain Produk</option>
                                                <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                                                <option value="Informatika">Informatika</option>
                                                <option value="Sistem Informasi">Sistem Informasi</option>
                                                <option value="Teknik Sipil">Teknik Sipil</option>
                                                <option value="Arsitektur">Arsitektur</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="info">Informasi UPJ diperoleh dari : <span class="require">*</span></p>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="informasi" id="website" value="Website" required>
                                        <label for="website" class="form-check-label">Website</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="informasi" id="instagram" value="Instagram">
                                        <label for="instagram" class="form-check-label">Instagram</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="informasi" id="facebook" value="Facebook">
                                        <label for="facebook" class="form-check-label">Facebook</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="informasi" id="brosur" value="Brosur">
                                        <label for="brosur" class="form-check-label">Brosur dan Flyer UPJ</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="informasi" id="wa_blast" value="WA_blast">
                                        <label for="wa_blast" class="form-check-label">WA Blast</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="informasi" id="sekolah" value="Sekolah">
                                                <label for="sekolah" class="form-check-label">Sekolah</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="informasi" id="event_eexpo" value="Event_EExpo">
                                                <label for="event_eexpo" class="form-check-label">Event Education Expo</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="informasia" id="keluarga" value="Keluarga">
                                                <label for="keluarga" class="form-check-label">Keluarga</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="informasi" id="email_blast" value="Email_Blast">
                                                <label for="email_blast" class="form-check-label">E-mail Blast</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="informasi" id="lainnya" value="Lainnya">
                                                <label for="lainnya" class="form-check-label">Lainnya</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="info mt-4">Direkomendasikan Oleh : </p>
                                            <p class="info">PRODI/UNIT</p>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="rekomendasi" id="karyawanUPJ" value="KaryawanUPJ" required>
                                                <label for="karyawanUPJ" class="form-check-label">Karyawan UPJ</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="rekomendasi" id="mahasiswaUPJ" value="MahasiswaUPJ">
                                                <label for="mahasiswaUPJ" class="form-check-label">Mahasiswa UPJ</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="rekomendasi" id="phk_sklh" value="Pihak_Sekolah">
                                                <label for="phk_sklh" class="form-check-label">Pihak Sekolah</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4" style="text-align: center">
                            <div class="col">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                <input type="reset" nama="reset" class="btn btn-danger" value="Reset">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>