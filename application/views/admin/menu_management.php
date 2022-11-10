

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800" style="font-size: 40px;">Menu Management</h1>
            </div>
            <div class="row pb-3 pt-3">
                <div class="col-xl-12 col-md-12">
                    <a type="button" class="btn btn-primary rounded" data-toggle="modal" data-target="#menuModal"><i class="fas fa-solid fa-plus"></i> Tambah Menu</a>
                </div>
                <!-- Modal Menu-->
                <div class="modal fade" id="menuModal" tabindex="-1" aria-labelledby="menuModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="menuModalLabel">Tambah Menu Baru</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Nama Menu">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Url Menu">
                                    </div>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Row -->
            <div class="row">
                <div class="col-xl-12 col-md-12 mb-6">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-folder"></i> List Menu</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered data" id="dataUser" width="100%" cellspacing="0">
                                    <thead class="thead-dark text-center">
                                        <tr>
                                            <th>#</th>
                                            <th>Menu</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>admin</td>
                                            <td class="text-center">
                                                <a type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editmenuModal"><i class="fa-solid fa-pen-to-square"></i> Kelola</a>&ensp;
                                                <!-- Modal Edit Menu-->
                                                <div class="modal fade" id="editmenuModal" tabindex="-1" aria-labelledby="editmenuModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="editmenuModalLabel">Edit Menu Baru</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="">
                                                                    <div class="form-group">
                                                                        <input class="form-control" type="text" placeholder="Nama Menu">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input class="form-control" type="text" placeholder="Url Menu">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-success">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusmenuModal"><i class="fa-solid fa-trash"></i> Hapus</a>
                                                <!-- Modal Hapus Menu-->
                                                <div class="modal fade" id="hapusmenuModal" tabindex="-1" aria-labelledby="hapusmenuModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="hapusmenuModalLabel">Peringatan</h5>
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
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800" style="font-size: 40px;">Sub Menu Management</h1>
            </div>
            <div class="row pb-3 pt-3">
                <div class="col-xl-12 col-md-12">
                    <a type="button" class="btn btn-primary rounded" data-toggle="modal" data-target="#submenuModal"><i class="fas fa-solid fa-plus"></i> Tambah SubMenu</a>
                </div>
                <!-- Modal SubMenu-->
                <div class="modal fade" id="submenuModal" tabindex="-1" aria-labelledby="submenuModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="submenuModalLabel">Tambah Sub Menu Baru</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input class="form-control" type="text" placeholder="Judul Sub Menu">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <select id="inputState" class="form-control">
                                                <option selected>Pilih Menu</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Url Menu">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Icon Sub Menu">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Url Menu">
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Sub Menu Aktif?
                                            </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Row -->
            <div class="row">
                <div class="col-xl-12 col-md-12 mb-6">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-folder"></i> List Menu</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered data" id="dataUser" width="100%" cellspacing="0">
                                    <thead class="thead-dark text-center">
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Menu</th>
                                            <th>Url</th>
                                            <th>Icon</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Dashboard</td>
                                            <td>Admin</td>
                                            <td>dashboard</td>
                                            <td>fas fa-user</td>
                                            <td class="text-center">
                                                <a type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editsubModal"><i class="fa-solid fa-pen-to-square"></i> Kelola</a>&ensp;
                                                <!-- Modal Edit Sub Menu-->
                                                <div class="modal fade" id="editsubModal" tabindex="-1" aria-labelledby="editsubModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="editsubModalLabel">Edit Sub Menu</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-left">
                                                                <form action="">
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-6">
                                                                            <input class="form-control" type="text" placeholder="Judul Sub Menu">
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <select id="inputState" class="form-control">
                                                                                <option selected>Pilih Menu</option>
                                                                                <option>...</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input class="form-control" type="text" placeholder="Url Menu">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input class="form-control" type="text" placeholder="Icon Sub Menu">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input class="form-control" type="text" placeholder="Url Menu">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                                                            <label class="form-check-label" for="gridCheck">
                                                                                Sub Menu Aktif?
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                                                <button type="button" class="btn btn-success">Yakin</button>
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
                                            <td class="text-center">
                                                <div class="btn btn-success btn-sm">Aktif</div>
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