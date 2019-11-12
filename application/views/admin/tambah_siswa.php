 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="centered text-dark">TAMBAH SISWA</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<div class="container">
    <div class="row ">
        <div class="col-md-9 col-centered">

        <div class="card">
            <div class="card-header text-bold text-center">
                FORM TAMBAH DATA SISWA
            </div>
            <div class="card-body">
            <form action="" method="post">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama siswa...">
                <small class="form-text text-danger"><?= form_error('nama');    ?></small>
            </div>
            <div class="form-group">
                <label for="nisn">NISN</label>
                <input type="number" class="form-control" id="nisn" name="nisn" placeholder="Masukkan NISN siswa...">
                <small class="form-text text-danger"><?= form_error('nisn');    ?></small>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat siswa...">
                <small class="form-text text-danger"><?= form_error('alamat');    ?></small>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir siswa...">

            </div>
            <div class="form-group">
                <label for="kelas">Kelas</label>
                <select class="form-control" id="kelas" name="kelas">
                <option>MIA 1</option>
                    <option>MIA 2</option>
                    <option>MIA 3</option>
                    <option>MIA 4</option>
                    <option>MIA 5</option>
                    <option>MIA 6</option>
                    <option>IIS 1</option>
                    <option>IIS 2</option>
                    <option>IIS 3</option>
                    <option>IIS 4</option>
                    <option>IIS 5</option>

                </select>
            </div>
            <button type="submit" name="tambah_siswa" class="btn btn-primary float-right mr-3 ml-4">Tambah Siswa</button>
            <button type="reset" class="btn btn-danger float-right" data-dissmmims="card mr-3 ml-4">Reset Data</button>
            <a href="<?= base_url(); ?>admin/siswa" class="btn btn-secondary float-right mr-3 ml-4">Batalkan</a>
            </form>
            </div>
        </div>
        </div>
    </div>
</div>
</div>
