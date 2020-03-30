<!-- CONTENT -->
<div class="container mt-3">
    <div class="row" style="margin-left:0; margin-right:0;">
        <div class="col-lg-8 col-12 konten-form">
            <div class="row">
            <form>
                <h3>Form Kelahiran</h3>
                <div class="form-row">
                    <div class="col-lg-6">
                        <label for="kk">Nomor KK</label>
                        <input type="text" name="no_kk" class="form-control" placeholder="Nomor KK">
                    </div>
                    <div class="col-lg-6">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama">
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" class="form-control" id="alamat" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="rw">RW</label>
                        <select name="id_rw" class="form-control" id="rw">
                            <option>--Pilih--</option>
                            <option>001</option>
                            <option>002</option>
                            <option>003</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <label for="rt">RT</label>
                        <select name="id_rt" class="form-control" id="rt">
                            <option>--Pilih--</option>
                            <option>001</option>
                            <option>002</option>
                            <option>003</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
                    </div>
                    <div class="col-lg-6">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" placeholder="mm/dd/yy">
                    </div>
                    <div class="col-lg-6">
                        <label for="jk">Jenis Kelamin</label>
                        <select name="jk" class="form-control" id="jk">
                            <option>--Pilih--</option>
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <label for="nama_ayah">Nama Ayah</label>
                        <input type="text" name="nama_ayah" class="form-control" placeholder="Nama Ayah">
                    </div>
                    <div class="col-lg-6">
                        <label for="nama_ibu">Nama Ibu</label>
                        <input type="text" name="nama_ibu" class="form-control" placeholder="Nama Ibu">
                    </div>
                    <div class="col-lg-6">
                        <label for="anak">Anak Ke</label>
                        <input type="text" name="anak_ke" class="form-control" placeholder="Anak Ke">
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