<main id="main" class="main">

    <div class="pagetitle">
        <h1>Siswa</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <!-- Table with stripped rows -->
                        <button class="btn btn-success mb-3">
                            <a href="/home/siswa3" class="text-white">Tambah</a>
                        </button>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col" width="3%">no</th>
                                    <th scope="col">nama siswa</th>
                                    <th scope="col">jenis kelamin</th>
                                    <th scope="col">nomor telepon</th>
                                    <th scope="col">email</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $ms = 1;
                                foreach ($siswa1 as $key => $value) {
                                ?>
                                <tr>
                                    <th scope="row"><?= $ms++ ?></th>
                                    <td><?= $value->nama_siswa ?></td>
                                    <td><?= $value->jenis_kelamin ?></td>
                                    <td><?= $value->nomor_telepon ?></td>
                                    <td><?= $value->email ?></td>
                                    <td>
                                        <a href="<?= base_url('Home/editsiswa/'.$value->id_siswa)?>" class="btn btn-warning">Edit</a>
                                        <a href="<?= base_url('Home/hapus_siswa/'.$value->id_siswa)?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->