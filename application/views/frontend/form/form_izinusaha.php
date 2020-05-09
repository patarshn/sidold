<!-- CONTENT -->
<div class="container mt-3">
    <div class="row" style="margin-left:0; margin-right:0;">
        <div class="col-lg-8 col-12 konten-form">
            <div class="row">
            <div class="row">
            <?php if($this->session->flashdata('success_message')): ?>
	            <div class="alert alert-success col" id="success-message"><?= $this->session->flashdata('success_message');?></div>
            <?php elseif($this->session->flashdata('error_message')): ?>
                <div class="alert alert-danger col" id="success-message"><?= $this->session->flashdata('error_message');?></div>
		    <?php endif;?>
            <form method="POST" action="<?=base_url('form_izinusaha/store')?>">
                <h3>Form Izin Usaha</h3>
                <div class="form-row">
                    <div class="col-lg-6">
                        <label for="nik">NIK</label>
                        <input type="text" name="nik" class="form-control" placeholder="NIK">
                    </div>
                    <div class="col-lg-6">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama">
                    </div>
                    <div class="col-lg-12">
                        <label for="jenis">Jenis Usaha</label>
                        <select name="jenis_usaha" class="form-control" id="jenis">
                            <option>--Pilih--</option>
                            <option>Peternakan</option>
                            <option>Perdagangan</option>
                            <option>Hiburan</option>
                        </select>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat_usaha" class="form-control" id="alamat" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label for="gambar_usaha">Gambar Usaha</label>
                        <input type="file" name="gambar_usaha" class="email form-control" name="gambar_usaha" required="" data-error="Foto Usaha tidak boleh kosong">
                    </div>
                    <div class="col-lg-6">
                        <label for="captcha">Masukkan Captcha</label><br>
                        <p class="btn btn-primary disabled" style="background-color:grey !important; border-color:grey !important;">ABCDEFG</p>
                        <input type="text" name="captcha" class="form-control" placeholder="Masukkan Captcha">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary active-button">Simpan</button>
            </form>
            
            </div>
        </div>
    </div>
</div>
<!-- END CONTENT -->