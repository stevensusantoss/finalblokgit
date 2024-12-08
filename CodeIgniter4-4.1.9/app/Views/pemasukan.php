<main id="main" class="main">

    <div class="pagetitle">
        <h1>Tabel Pemasukan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Pengguna</li>
                <li class="breadcrumb-item active">pemasukan</li>
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
                            <a href="/home/pemasukan3" class="text-white">Tambah</a>
                        </button>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col" width="3%">No</th>
                                    <th scope="col">nama siswa</th>
                                    <th scope="col">Jumlah Pemasukan</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Tanggal Pemasukan</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $ms = 1;
                                foreach ($pemasukan1 as $key => $value) {
                                ?>
                                <tr>
                                    <th scope="row"><?= $ms++ ?></th>
                                    <td><?= $value->nama_siswa ?></td>
                                    <td><?= $value->jumlah_pemasukan ?></td>
                                    <td><?= $value->keterangan ?></td>
                                     <td><?= $value->tanggal_pemasukan ?></td>
                                    <td>
                                        <a href="<?= base_url('Home/editpemasukan/'.$value->id_pemasukan)?>" class="btn btn-warning">Edit</a>
                                        <a href="<?= base_url('Home/hapus_pemasukan/'.$value->id_pemasukan)?>" class="btn btn-danger">Hapus</a>
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