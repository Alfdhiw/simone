<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800" style="font-size: 40px;">User Role</h1>
    </div>
    <div class="row pb-3 pt-3">
        <div class="col-xl-12 col-md-12">
            <a type="button" class="btn btn-primary rounded" data-toggle="modal" data-target="#submenuModal"><i class="fas fa-solid fa-plus"></i> Tambah Role</a>
        </div>
        <!-- Modal SubMenu-->
        <div class="modal fade" id="submenuModal" tabindex="-1" aria-labelledby="submenuModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="submenuModalLabel">Tambah User Role</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <input type="text" class="form-control" id="inputZip" placeholder="Nama Role">
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
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user"></i> List User Role</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered data" id="dataUser" width="100%" cellspacing="0">
                            <thead class="thead-dark text-center">
                                <tr>
                                    <th>#</th>
                                    <th>Role</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Admin</td>
                                    <td class="text-center">
                                        <a type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#aksesModal"><i class="fa-solid fa-circle-info"></i> Akses</a>&ensp;
                                        <!-- Modal Edit Sub Menu-->
                                        <div class="modal fade" id="aksesModal" tabindex="-1" aria-labelledby="aksesModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="aksesModalLabel">Akses Menu</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body text-left">
                                                        <form action="">
                                                            <table class="table table-hover table-bordered" width="100%" cellspacing="0">
                                                                <thead class="thead-dark center">
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Menu</th>
                                                                        <th>Akses</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Admin</td>
                                                                        <td>&ensp;&ensp;&ensp;<input class="form-check-input" type="checkbox" id="gridCheck"></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-success">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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