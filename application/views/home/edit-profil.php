<div style="min-height: 100vh;" class="bg-light pt-md-5 pb-5">

    <div class="col-lg-6 col-md-8 col-12 m-auto">

        <div class="col-12 d-flex justify-content-between">

            <h2>Profile</h2>

            <div><button id="btn-edit" type="button" class="btn btn-sm btn-success my-2"><i class="fas fa-edit mr-1"></i>Edit</button></div>

        </div>

        <form action="" method="post" enctype="multipart/form-data" class="mt-5">



            <input type="hidden" name="id" />



            <div class="form-group form-row mb-4">

                <div class="col-4">

                    <div class="img-container border border-2 rounded-circle">

                        <img class="rounded-circle" src="<?= base_url('assets/img/home/te1.png') ?>" alt="">
                    </div>
                </div>

                <div class="col d-flex align-items-center">

                    <input class="form-control-file" type="file" name="image" />

                    <input type="hidden" name="gambar_lama" />
                </div>
            </div>



            <div class="form-group form-row">

                <div class="col">

                    <label for="nama">Nama Mahasiswa</label>

                    <input id="nama" class="form-control" type="text" name="nama" />



                </div>

                <div class="col">

                    <label for="password">Kata Sandi</label>

                    <input id="password" class="form-control" type="password" name="password" />

                </div>

            </div>

            <div class="form-group">

                <label for="email">Email</label>

                <input id="email" class="form-control" type="email" name="email" />

            </div>

            <div class="form-group">

                <label for="no_hp">Nomer Telp/HP.</label>

                <input id="no_hp" class="form-control" type="text" name="no_hp" />

            </div>

            <div class="form-group">

                <label for="alamat">Alamat</label>

                <textarea id="alamat" class="form-control" type="number" name="alamat" placeholder="alamat Produk" rows="3"></textarea>

            </div>

            <input class="btn btn-success" type="submit" name="btn" value="Update Biodata" id="submit" />

        </form>

    </div>

</div>