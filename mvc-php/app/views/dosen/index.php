<div class="container mt-5">

<div class="row">
    <div class="col-5">
        <?php Flasher::flash(); ?>
    </div>
</div>

<div class="row mb-6">
  <div class="col-5">
    <form action="<?=BASEURL;?>/dosen/cari" method="post">
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="cari Dokter" name="keyword" id="keyword"  aria-describedby="button-addon2" autocomplete="off" required>
      <button class="btn btn-primary" type="submit" id="tombolCari"><i class="bi bi-search"></i>
      cari</button>
    </div>
    </form>
  </div>
</div>


<div class="row">
    <div class="col-5">
        <h3>DOKTER DOSEN</h3>
       
            <ul class="list-group">
            <?php foreach($data['dsn'] as $dsn) : ?>
                <li class="list-group-item"> <?= $dsn['nama'] ?>
                <a href="<?=BASEURL;?>/dosen/hapus/<?= $dsn['id']?>" class="badge text-bg-danger float-end ms-1" onclick="return confirm('Apakah anda ingin menghapus data ini?');">Hapus</a>
                <a href="<?=BASEURL;?>/dosen/ubah/<?= $dsn['id']?>" class="badge text-bg-warning float-end ms-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#forModal">Ubah</a>
                <a href="<?=BASEURL;?>/dosen/detail/<?= $dsn['id']?>" class="badge text-bg-primary float-end ms-1">Detail</a>
            </li>

                <!-- <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A fourth item</li>
                <li class="list-group-item">And a fifth one</li> -->
                <?php endforeach; ?>
            </ul>
        
    </div>
</div>

<!-- Button trigger modal --> 
<button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#forModal">
    <i class="bi bi-plus-lg"></i>
  Tambah data dokter
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="forModal" tabindex="-1" aria-labelledby="judulModal" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="forModalLabel">Tambah Data Dokter</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?=BASEURL; ?>/dosen/tambah" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama dokter dengan gelar" name="nama" autocomplete="off" required>
            </div>
        <div class="mb-3">
            <label for="spesialis" class="form-label">Spesialis</label>
            <input type="text" class="form-control" id="spesialis" placeholder="Masukkan Spesialis" name="spesialis" autocomplete="off" required>
            </div>
        <div class="mb-3">
            <label for="jam" class="form-label">Jam Praktek</label>
            <input type="text" class="form-control" id="jam" placeholder="Masukkan jam praktek" name="jam" autocomplete="off" required>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            <i class="bi bi-x-lg"></i>Close</button>
        <button type="submit" class="btn btn-primary">
            <i class="bi bi-floppy-fill me-1"></i>Tambah Data</button>
            </form>
      </div>
    </div>
  </div>
</div>