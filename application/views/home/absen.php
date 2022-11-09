<div style="min-height: 100vh;" class="bg-light pt-md-5 pb-5">

    <div class="col-lg-6 col-md-8 col-12 m-auto">

        <div class="col-12 d-flex px-1 justify-content-between">
            <h1 class="section-title position-relative text-uppercase mx-xl-0 mb-4"><span class="pr-3" style="color: #444444; font-weight:500; font-size:30px;">Absensi Peserta Magang</span></h1>
        </div>


        <form action="" method="post" enctype="multipart/form-data" class="mt-5">



            <input type="hidden" name="kode_customer" />


            <div class="form-group form-row">

                <div class="col">

                    <label for="nama">Nama Mahasiswa</label>

                    <input id="nama" class="form-control" type="text" name="nama" />
                </div>

                <div class="col">
                    <label for="divisi"><b>Divisi Jurusan Magang</b></label>
                    <select class="form-control">
                        <option>Marketing Officer</option>
                        <option>IT Enginering</option>
                        <option>IT Networking</option>
                    </select>
                </div>

            </div>

            <div class="form-group">

                <label for="alamat">Komentar</label>

                <textarea id="alamat" class="form-control " type="text" name="alamat" placeholder="alamat Produk" rows="3"></textarea>
            </div>

            <input type="hidden" name="status" />

            <input class="btn btn-success" type="submit" name="btn" value="Kirim Absen" id="submit" />

        </form>
        <!-- Modal Edit Start -->
        <div class="modal fade" id="biodata" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="biodataLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="biodataLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Data telah tersimpan
                    </div>
                    <div class="modal-footer">
                        <a href="<?= base_url('home') ?>" type="button" class="btn btn-success">Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Edit End -->
    </div>

</div>