        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">
                  <?php
                  $segment = $this->uri->segment_array();
                  $uri = base_url();
                  $uriCount = count($segment);
                  $i = 1;
                  foreach ($segment as $s)
                  {
                    //echo $s;
                    //echo '<br />';
                    $uri = $uri.$s.'/';
                    echo '<a href="'.$uri.'">'.ucfirst($s).'</a>';
                    if($i != $uriCount){
                      echo " » ";
                    }
                    $i++;
                  }
                  ?>
                  </h6>
                </div>
              </div>
            </div>
          </div>
        

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Pengajuan Form Kartu Tanda Penduduk</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>RT</th>
                      <th>RW</th>
                      <th width="10%">Verif RT</th>
                      <th width="10%">Verif RW</th>
                      <th width="10%">Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>RT</th>
                      <th>RW</th>
                      <th>Verif RT</th>
                      <th>Verif RW</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  
                  <?php foreach ($ktp as $k): ?>
                    <tr>
                      <td><?=$k->nik?></td>
                      <td><?=$k->nama?></td>
                      <td><?=$k->alamat?></td>
                      <td><?=$k->id_rt?></td>
                      <td><?=$k->id_rw?></td>
                      <td>
                        <?php if($k->verifikasi_rt == 'Menunggu'):?>
                            <div class="card bg-gradient-warning text-white text-center">Menunggu</div>
                        <?php elseif($k->verifikasi_rt == 'Disetujui'):?>
                            <div class="card bg-gradient-success text-white text-center">Disetujui</div>
                        <?php elseif($k->verifikasi_rt == 'Ditolak'):?>
                            <div class="card bg-gradient-danger text-white text-center">Ditolak</div>
                        <?php endif;?>
                      </td>
                      <td>
                        <?php if($k->verifikasi_rw == 'Menunggu'):?>
                            <div class="card bg-gradient-warning text-white text-center">Menunggu</div>
                        <?php elseif($k->verifikasi_rw == 'Disetujui'):?>
                            <div class="card bg-gradient-success text-white text-center">Disetujui</div>
                        <?php elseif($k->verifikasi_rw == 'Ditolak'):?>
                            <div class="card bg-gradient-danger text-white text-center">Ditolak</div>
                        <?php endif;?>
                      </td>
                      <td>
                        <div class="card bg-gradient-info text-white text-center">Detail</div>
                      </td>
                    </tr>
                  <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->