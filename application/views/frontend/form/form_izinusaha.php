<!-- CONTENT -->
<div class="container mt-3">
    <div class="row" style="margin-left:0; margin-right:0;">
        <div class="col-lg-8 col-12 konten-form">
            <div class="row">
            <form>
                <h3>Form Izin Usaha</h3>
                <div class="form-row">
                    <div class="col-lg-6">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" placeholder="NIK">
                    </div>
                    <div class="col-lg-6">
                        <label for="nama">Nama Pemilik Usaha</label>
                        <input type="text" class="form-control" placeholder="Nama Pemilik Usaha">
                    </div>
                    <div class="col-lg-12">
                        <label for="jenis">Jenis Usaha</label>
                        <select class="form-control" id="jenis">
                            <option>--Pilih--</option>
                            <option>Peternakan</option>
                            <option>Perdagangan</option>
                            <option>Hiburan</option>
                        </select>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label for="gambar_usaha">Gambar Usaha</label>
                        <input type="file" class="email form-control" name="gambar_usaha" required="" data-error="Foto Usaha tidak boleh kosong">
                    </div>
                    <div class="col-lg-6">
                        <label for="captcha">Masukkan Captcha</label><br>
                        <p class="btn btn-primary disabled" style="background-color:grey !important; border-color:grey !important;">ABCDEFG</p>
                        <input type="text" class="form-control" placeholder="Masukkan Captcha">
                    </div>
                </div>
            </form>
            <button type="submit" class="btn btn-primary active-button">Simpan</button>
            </div>
        </div>
    </div>
</div>
<!-- END CONTENT -->