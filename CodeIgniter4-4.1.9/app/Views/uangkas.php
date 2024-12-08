<main id="main" class="main">

    <div class="pagetitle">
        <h1>Tabel uang kas</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Pengguna</li>
                <li class="breadcrumb-item active">tabel uang kas </li>
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
                            <a href="/home/uangkas3" class="text-white">Tambah</a>
                        </button>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col" width="3%">No</th>
                                    <th scope="col">nama_siswa</th>
                                    <th scope="col">id bulan pembayaran</th>
                                     <th scope="col">minggu ke 1</th>
                                      <th scope="col">minggu ke 2</th>
                                       <th scope="col">minggu ke 3</th>
                                        <th scope="col">minggu ke 4</th>
                                         <th scope="col">status lunas</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $ms = 1;
                                foreach ($uangkas1 as $key => $value) {
                                ?>
                                <tr>
                                    <th scope="row"><?= $ms++ ?></th>
                                    <td><?= $value->nama_siswa?></td>
                                    <td><?= $value->id_bulan_pembayaran?></td>
                                     <td><?= $value->minggu_ke_1 ?></td>
                                     <td><?= $value->minggu_ke_2?></td>
                                      <td><?= $value->minggu_ke_3?></td>
                                       <td><?= $value->minggu_ke_4?></td>
                                        <td><?= $value->status_lunas?></td>
                                    <td>
                                        <a href="<?= base_url('Home/edituangkas/'.$value->id_uangkas)?>" class="btn btn-warning">Edit</a>
                                        <a href="<?= base_url('Home/hapus_uangkas/'.$value->id_uangkas)?>" class="btn btn-danger">Hapus</a>
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