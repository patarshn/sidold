<!-- CONTENT -->
<div class="container mt-3">
    <div class="row" style="margin-left:0; margin-right:0;">
        <div class="col-lg-8 col-12 konten-form">
            <div class="row">
            <form>
                <h3>Form Keterangan Sudah Menikah</h3>
                <div class="form-row">
                    <div class="col-lg-6">
                        <label for="nik">NIK</label>
                        <input type="text" name="nik" class="form-control" placeholder="NIK">
                    </div>
                    <div class="col-lg-6">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama" readonly>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" class="form-control" id="alamat" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="rw">RW</label>
                        <input type="text" name="id_rw" class="form-control" placeholder="RW" readonly>
                    </div>
                    <div class="col-lg-3">
                        <label for="rw">RT</label>
                        <input type="text" name="id_rt" class="form-control" placeholder="RT" readonly>
                    </div>
                    <div class="col-lg-6">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" readonly>
                    </div>
                    <div class="col-lg-6">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" placeholder="mm/dd/yy" readonly>
                    </div>
                    <div class="col-lg-6">
                        <label for="agama">Agama</label>
                        <input type="text" name="agama" class="form-control" placeholder="Agama" readonly>
                    </div>
                    <div class="col-lg-6">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" readonly>
                    </div>
                    <div class="col-lg-6">
                        <label for="nama_lkpr">Nama Laki/Perempuan</label>
                        <input type="text" name="nama_perempuan" class="form-control" placeholder="Nama">
                    </div>
                    <div class="col-lg-6">
                        <label for="tempat_lahirlkpr">Tempat Lahir Laki/Perempuan</label>
                        <input type="text" name="tempat_lahirpr" class="form-control" placeholder="Tempat Lahir">
                    </div>
                    <div class="col-lg-6">
                        <label for="tanggal_lahirlkpr">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahirlkpr" class="form-control" placeholder="Tempat Lahir">
                    </div>
                    <div class="col-lg-6">
                        <label for="agama">Agama</label>
                        <select name="agama" class="form-control" id="agama">
                            <option>--Pilih--</option>
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Katolik</option>
                            <option>Buddha</option>
                            <option>Hindu</option>
                            <option>Kong Hu Cu</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" name="pekerjaanpr" class="form-control" placeholder="Pekerjaan">
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="alamat">Alamat Laki/Perempuan</label>
                            <textarea name="alamat_lkpr" class="form-control" id="alamat_lkpr" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="captcha">Masukkan Captcha</label><br>
                        <p class="btn btn-primary disabled" style="background-color:grey !important; border-color:grey !important;">ABCDEFG</p>
                        <input type="text" name="captcha" class="form-control" placeholder="Masukkan Captcha">
                    </div>
                </div>
            </form>
            <button type="submit" class="btn btn-primary active-button">Simpan</button>
            </div>
        </div>
    </div>
</div>
<!-- END CONTENT -->