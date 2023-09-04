<div class="container mt-3">

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-sm tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
          Tambah Data Mahasiswa
        </button>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6">
      <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Cari mahasiswa.." name="keyword" id="keyword" autocomplete="off">
          <button class="btn btn-primary" type="submit" id="tombol-cari">Cari</button>
        </div>
      </form>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
        <h3>Daftar Mahasiswa</h3>
        <ul class="list-group">
          <?php foreach($data['mhs'] as $mhs) : ?>

          <li class="list-group-item">
              <?= $mhs['nama']; ?>
              <a href="<?= BASEURL;?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="float-end badge badge text-bg-danger text-decoration-none ms-1" onclick="return confirm('yakin ?');">hapus</a>
              <a href="<?= BASEURL;?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="float-end badge badge text-bg-warning text-decoration-none ms-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?=$mhs['id']; ?>">edit</a>
              <a href="<?= BASEURL;?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="float-end badge badge text-bg-primary text-decoration-none ms-1">detail</a>
          </li>

          <?php endforeach; ?>
        </ul>

    </div>
  </div>
    
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModalLabel">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <!-- nama -->
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama">
          </div>

          <!-- nrp -->
          <div class="mb-3">
            <label for="nrp" class="form-label">NRP</label>
            <input type="number" name="nrp" class="form-control" id="nrp">
          </div>

          <!-- email -->
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email">
          </div>

          <!-- jurusan -->
          <div class="form-group">
            <label for="jurusan" class="form-label">Jurusan</label>
            <select class="form-select" name="jurusan" id="jurusan" aria-label="Default select example">
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Sistem Informasi">Sistem Informasi</option>
              <option value="Matematika">Matematika</option>
              <option value="Teknik Mesin">Teknik Mesin</option>
              <option value="Bahasa Arab">Bahasa Arab</option>
              <option value="Kimia">Kimia</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
