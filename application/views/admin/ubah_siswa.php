 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="centered text-dark">UBAH DATA SISWA</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<div class="container">

    <div class="row mt-3">
        <div class="col-md-9">

        <div class="card">
            <div class="card-header text-bold text-center">
                FORM UBAH DATA Siswa
            </div>
            <div class="card-body">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $siswa['id']; ?>">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $siswa['nama']; ?>">
                <small class="form-text text-danger"><?= form_error('nama');    ?></small>
            </div>
            <div class="form-group">
                <label for="nisn">NISN</label>
                <input type="number" class="form-control" id="nisn" name="nisn" value="<?= $siswa['nisn']; ?>">
                <small class="form-text text-danger"><?= form_error('nisn');    ?></small>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $siswa['alamat']; ?>">
                <small class="form-text text-danger"><?= form_error('alamat');    ?></small>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $siswa['tanggal_lahir']; ?>">

            </div>
            <div class="form-group">
                <label for="kelas">Kelas</label>
                <select class="form-control" id="kelas" name="kelas">
                    <?php foreach($kelas as $kls) : ?>
                        <?php if( $kls == $siswa['kelas'] )  : ?>
                            <option value="<?= $kls; ?>" selected><?= "$kls" ?></option>
                        <?php else : ?>
                            <option value="<?= $kls; ?>"><?= "$kls" ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" name="ubah_siswa" class="btn btn-primary float-center ">Ubah siswa</button>
            <button type="reset" class="btn btn-danger float-center ml-3 mr-3" data-dissmmims="card">Reset Data</button>
            <a href="<?= base_url(); ?>admin/siswa" class="btn btn-secondary float-center ">Batalkan</a>
            </form>
            </div>
        </div>

            

        </div>
    </div>

</div>