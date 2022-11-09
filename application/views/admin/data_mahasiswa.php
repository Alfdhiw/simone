<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-light d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                        <img class="img-profile rounded-circle" src="<?= base_url('assets/') ?>img/admin/undraw_profile.svg">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Edit Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800" style="font-size: 40px;">Data Mahasiswa</h1>
            </div>
            <!-- Content Row -->
            <div class="row">
                <div class="col-xl-12 col-md-12 mb-6">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user-graduate"></i> List Data Mahasiswa</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered data" id="dataUser" width="100%" cellspacing="0">
                                    <thead class="thead-dark text-center">
                                        <tr>
                                            <th>#</th>
                                            <th>Kode Mahasiswa</th>
                                            <th>Nama Mahasiswa</th>
                                            <th>Foto</th>
                                            <th>NIM</th>
                                            <th>Universitas</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Email</th>
                                            <th>Kode Divisi</th>
                                            <th>Nama Divisi</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>HM-221109</td>
                                            <td>Ayu</td>
                                            <td></td>
                                            <td>A22.2020.02825</td>
                                            <td>Udinus</td>
                                            <td>Perempuan</td>
                                            <td>ayu@gmail.com</td>
                                            <td>202</td>
                                            <td>IT Enginering</td>
                                            <td>
                                                <div class="btn btn-success btn-sm">Aktif</div>
                                            </td>
                                            <td class="text-center">

                                                <a type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editmahasiswaModal"><i class="fa-solid fa-pen-to-square"></i> Kelola</a>&ensp;
                                                <!-- Modal Edit Data Mahasiswas-->
                                                <div class="modal fade" id="editmahasiswaModal" tabindex="-1" aria-labelledby="editmahasiswaModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="editmahasiswaModalLabel">Edit Data Mahasiswa</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-left">
                                                                <form action="">
                                                                    <div class="section">
                                                                        <div class="foto">
                                                                            <ul>
                                                                                <li style="width: 100px; height:100px;"><img src="<?= base_url('assets/img/admin/te1.png') ?>" class="rounded" alt="..." style="width:100px; height:100px;"></li>
                                                                            </ul>
                                                                        </div>
                                                                        <article>
                                                                            <form>
                                                                                <div class="form-row">
                                                                                    <div class="form-group col-md-6">
                                                                                        <label for="exampleInputEmail1">Kode Mahasiswa</label>
                                                                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="HM-22202021" disabled>
                                                                                    </div>
                                                                                    <div class="form-group col-md-6">
                                                                                        <label for="">Nama Mahasiswa</label>
                                                                                        <input type="text" class="form-control" id="" placeholder="Ayu">
                                                                                    </div>
                                                                                    <div class="form-group col-md-6">
                                                                                        <label for="">NIM</label>
                                                                                        <input type="text" class="form-control" id="" placeholder="A22.2020.02825">
                                                                                    </div>
                                                                                    <div class="form-group col-md-6">
                                                                                        <label for="">Asal Sekolah</label>
                                                                                        <input type="text" class="form-control" id="" placeholder="Udinus">
                                                                                    </div>
                                                                                    <div class="form-group col-md-6">
                                                                                        <label for="inputState">Jenis Kelamin</label>
                                                                                        <select id="inputState" class="form-control">
                                                                                            <option selected>Perempuan</option>
                                                                                            <option>Laki-Laki</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group col-md-6">
                                                                                        <label for="inputState">Email</label>
                                                                                        <input type="email" class="form-control" id="" placeholder="ayu@gmail.com">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-row">
                                                                                    <div class="form-group col-md-6">
                                                                                        <label for="">Nama Divisi</label>
                                                                                        <input type="text" class="form-control" id="" placeholder="IT enginering">
                                                                                    </div>
                                                                                    <div class="form-group col-md-6">
                                                                                        <label for="">Kode Divisi</label>
                                                                                        <input type="text" class="form-control" id="" placeholder="202" disabled>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group form-check">
                                                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                                                    <label class="form-check-label" for="exampleCheck1">Aktif</label>
                                                                                </div>
                                                                            </form>
                                                                        </article>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-success">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapussubModal"><i class="fa-solid fa-trash"></i> Hapus</a>
                                                <!-- Modal Hapus Sub Menu-->
                                                <div class="modal fade" id="hapussubModal" tabindex="-1" aria-labelledby="hapussubModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="hapussubModalLabel">Peringatan</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-left">
                                                                <p style="font-size: 17px;">Apakah anda yakin akan menghapus menu ini ?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                                                <button type="button" class="btn btn-success">Yakin</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->