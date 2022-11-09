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
                <h1 class="h3 mb-0 text-gray-800" style="font-size: 40px;">Dashboard</h1>
            </div>
            <!-- Content Row -->
            <div class="row">
                <!-- Card Total Mahasiswa -->
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <a type="button" data-toggle="modal" data-target="#mahasiswaModal" class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                        Total Mahasiswa Magang</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">25 Mahasiswa</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </a>
                        <div class="card-footer text-primary">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <a type="button" data-toggle="modal" data-target="#mahasiswaModal" class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        View Chart
                                    </a>
                                </div>
                                <!-- Modal Total Mahasiswa -->
                                <div class="modal fade" id="mahasiswaModal" tabindex="-1" aria-labelledby="mahasiswaModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="mahasiswaModalLabel">Total Mahasiswa Magang</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Card Body -->
                                                <div class="chart-pie pt-4 pb-2">
                                                    <canvas id="myPieChart"></canvas>
                                                </div>
                                                <div class="mt-4 text-center small">
                                                    <span class="mr-2">
                                                        <i class="fas fa-circle text-primary"></i> Direct
                                                    </span>
                                                    <span class="mr-2">
                                                        <i class="fas fa-circle text-success"></i> Social
                                                    </span>
                                                    <span class="mr-2">
                                                        <i class="fas fa-circle text-info"></i> Referral
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa-solid fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <a type="button" data-toggle="modal" data-target="#penyeliaModal" class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                                        Total Anggota Penyelia</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">10 Penyelia</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </a>
                        <div class="card-footer text-warning">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <a type="button" data-toggle="modal" data-target="#penyeliaModal" class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        View Chart
                                    </a>
                                </div>
                                <!-- Modal Total Penyelia -->
                                <div class="modal fade" id="penyeliaModal" tabindex="-1" aria-labelledby="penyeliaModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="penyeliaModalLabel">Total Anggota Penyelia</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa-solid fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <a type="button" data-toggle="modal" data-target="#kuotaModal" class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-sm font-weight-bold text-success text-uppercase mb-1">
                                        Total Kuota Magang</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">10 Kuota</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-chart-pie fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </a>
                        <div class="card-footer text-success">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <a type="button" data-toggle="modal" data-target="#kuotaModal" class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        View Chart
                                    </a>
                                </div>
                                <!-- Modal Total kuota -->
                                <div class="modal fade" id="kuotaModal" tabindex="-1" aria-labelledby="kuotaModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="kuotaModalLabel">Total Kuota Magang</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa-solid fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <a type="button" data-toggle="modal" data-target="#pendaftarModal" class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-md font-weight-bold text-info text-uppercase mb-3">Total Pendaftar Magang Yang Menunggu Diverifikasi
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">10 Anggota</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto ml-3">
                                    <i class="fas fa-clipboard-list fa-3x text-gray-300"></i>
                                </div>
                            </div>
                        </a>
                        <div class="card-footer text-info">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <a type="button" data-toggle="modal" data-target="#pendaftarModal" class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                        View Detail
                                    </a>
                                </div>
                                <!-- Modal Pendaftar Magang -->
                                <div class="modal fade" id="pendaftarModal" tabindex="-1" aria-labelledby="pendaftarModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="pendaftarModalLabel" style="color: #949795;">Daftar List Pendaftar Magang</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- DataTales Example -->
                                                <div class="table-responsive" style="color: #949795;">
                                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="color: #949795;">
                                                        <thead>
                                                            <tr>
                                                                <th>Nama</th>
                                                                <th>Email</th>
                                                                <th>Nomer Telp/Hp</th>
                                                                <th>Alamat</th>
                                                                <th>Divisi Magang</th>
                                                                <th>Berkas</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa-solid fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-md-12 mb-6">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><i class="fa-regular fa-pen-to-square"></i> Pendaftar Baru</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover data" id="dataUser" width="100%" cellspacing="0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Nomer Telp/Hp</th>
                                            <th>Alamat</th>
                                            <th>Divisi Magang</th>
                                            <th>Berkas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Ayu</td>
                                            <td>ayu@gmail.com</td>
                                            <td>08976575512</td>
                                            <td>Jl.Doan jadian kagak</td>
                                            <td>IT</td>
                                            <td>Berkas</td>
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