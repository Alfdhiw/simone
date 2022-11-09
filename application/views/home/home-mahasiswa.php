<div class="mahadashboard">
    <div class="container-fluid pt-5">
        <h1 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="pr-3" style="color: #444444; font-weight:500;">Dashboard</span></h1>
        <div class="row px-xl-5 pb-3">
            <div class="col-xl-4 col-md-6">
                <div class="card bg-dark text-white mb-4">
                    <div class="card-body" style="font-size: 20px; font-weight:500;"><i class="fa-solid fa-boxes-stacked"></i> Data Absen
                        </br>
                        <h4 class="mx-auto my-auto text-white">5 Absen</h4>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="large text-white stretched-link" href="#" data-toggle="modal" data-target="#produkModal">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body" style="font-size: 20px; font-weight:500;"><i class="fa-solid fa-boxes-stacked"></i> Penilaian Magang
                        </br>
                        <h5 class="mx-auto my-auto text-white">1 Penilaian</h5>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="large text-white stretched-link" href="#" data-toggle="modal" data-target="#produkModal">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body" style="font-size: 20px; font-weight:500;"><i class="fa-solid fa-arrow-right-arrow-left"></i> sertifikat Magang
                        </br>
                        <h5 class="mx-auto my-auto text-white">1 sertifikat</h5>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="large text-white stretched-link" href="#" data-toggle="modal" data-target="#transaksiModal">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->
    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h1 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="pr-3" style="color: #444444; font-weight:500;">Absensi</span></h1>
        <div class="row px-xl-5 pb-3">
            <a class="btn btn-success" href="<?= base_url('home/absen') ?>"><i class="fas fa-solid fa-plus"></i> Tambah Absen </a>
        </div>
        <div class="row px-xl-5 pb-3">
            <div class="col-xl-12 card mb-4 bg-light">
                <div class="card-header bg-light">
                    <i class="fas fa-table me-1"></i>
                    Riwayat Absensi Terbaru
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Kode Mahasiswa</th>
                                <th>Kode Divisi</th>
                                <th>Nama Divisi</th>
                                <th>Nama Mahasiswa</th>
                                <th>Komentar</th>
                                <th>Tanggal Absen</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>HM-0001-002</td>
                                <td>IT-0001-002</td>
                                <td>IT Enginering</td>
                                <td>Ayu</td>
                                <td>Mengerjakan Projek website</td>
                                <td>22/11/06 14:00</td>
                                <td><button type="button" class="btn btn-success rounded btn-sm text-light"><b><i class="fas fa-solid fa-pen-to-square fa-xs"></i> Edit</b></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->