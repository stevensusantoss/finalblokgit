<main id="main" class="main">

    <div class="pagetitle">
        <h1>Tabel Pengeluaran</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Pengguna</li>
                <li class="breadcrumb-item active">pengeluaran</li>
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
                            <a href="/home/pengeluaran3" class="text-white">Tambah</a>
                        </button>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col" width="3%">No</th>
                                    <th scope="col">keterangan</th>
                                    <th scope="col">Tanggal Pengeluaran</th>
                                    <th scope="col">Jumlah Pengeluaran</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $ms = 1;
                                foreach ($pengeluaran1 as $key => $value) {
                                ?>
                                <tr>
                                    <th scope="row"><?= $ms++ ?></th>
                                    <td><?= $value->keterangan ?></td>
                                    <td><?= $value->tanggal_pengeluaran ?></td>
                                    <td><?= $value->jumlah_pengeluaran?></td>
                                    <td>
                                        <a href="<?= base_url('Home/editpengeluaran/'.$value->id_pengeluaran)?>" class="btn btn-warning">Edit</a>
                                        <a href="<?= base_url('Home/hapus_pengeluaran/'.$value->id_pengeluaran)?>" class="btn btn-danger">Hapus</a>
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