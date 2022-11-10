
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800" style="font-size: 40px;">Data Mahasiswa</h1>
            </div>
            <!-- Content Row -->
            <div class="row">
                <div class="col-xl-12 col-md-6 mb-6">
                    <!-- DataTales Example -->
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
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->