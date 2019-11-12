
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Siswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active ">Data Siswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <section class="content mt-4 ">
    <?php if($this->session->flashdata('flash')) :?>
        <div class="row mt-3">
          <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Data Siswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <a href="<?= base_url();?>admin/siswa/tambah_siswa" class="btn btn-primary"><i class="fas fa-plus"></i> tambah data siswa</a>
      <div class="row ">
        <div class="col-md-3">
            <form action="" method="post">
            <div class="input-group mb-3 mt-3">
              <input type="text" class="form-control" placeholder="Cari data Siswa..." name="keyword">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit" >Cari</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <table class="table">
        <tr>
          <th>NO</th>
          <th>Aksi</th>
          <th>Nama</th>
          <th>NISN</th>
          <th>Alamat</th>
          <th>Tanggal Lahir</th>
          <th>Kelas</th>
        </tr>
        <tr>
          <td>
            <?php if(empty($siswa)) : ?>
              <div class="alert alert-danger" role="alert">
                Data siswa tidak ditemukan.
              </div>
              <?php endif; ?>
          </td>
        </tr>
          <?php 
          $no = 1;
          foreach($siswa as $sw) : ?>
           <tr>
                <td><?= $no++ ?></td>
                <td>
                  <a href="<?= base_url(); ?>admin/siswa/ubah_siswa/<?= $sw['id']; ?>" class="btn btn-success"><i class="fas fa-pen-square"></i></a>
                  <a href="<?= base_url(); ?>admin/siswa/hapus_siswa/<?= $sw['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?');"><i class="fas fa-trash-alt"></i> </a>
                </td>
                <td><?= $sw['nama'] ?></td>
                <td><?= $sw['nisn'] ?></td>
                <td><?= $sw['alamat'] ?></td>
                <td><?= $sw['tanggal_lahir'] ?></td>
                <td><?= $sw['kelas'] ?></td>
            </tr>
          <?php endforeach; ?>
      </table>
    </section>
</div>