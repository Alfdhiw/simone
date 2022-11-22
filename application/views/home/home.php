 <script>
       $(document).ready(function(){
           $('.captcha-refresh').on('click', function(){
               $.get('<?php echo base_url().'peserta/DaftarMagang/pendaftaranMagang'; ?>', function(data){
                   $('#image_captcha').html(data);
               });
           });
       });
   </script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<div id="myCarousel" class="carousel slide banner_main" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container-fluid">
                <div class="carousel-caption">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                            <div class="text-bg">
                                <h1>Lorem<br> Ipsum de <br>dolor sit amet</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                                <a class="read_more" href="#">Read more</a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                            <div class="images_box">
                                <figure><img src="<?= base_url(); ?>assets/img/home/img2.png"></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container-fluid ">
                <div class="carousel-caption">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                            <div class="text-bg">
                                <h1>Lorem<br> Ipsum Dolor <br>Sit Amet</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                                <a class="read_more" href="#">Read more</a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                            <div class="images_box">
                                <figure><img src="<?= base_url(); ?>assets/img/home/img2.png"></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container-fluid">
                <div class="carousel-caption ">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                            <div class="text-bg">
                                <h1>Lorem<br> Ipsum Dolor <br>Sit Amet</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                                <a class="read_more" href="#">Read more</a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                            <div class="images_box">
                                <figure><img src="<?= base_url(); ?>assets/img/home/img2.png"></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
    </a>
</div>
<!-- end banner -->
<!-- about -->
<div id="about" class="about">
    <div class="container-fluid">
        <div class="row d_flex">
            <div class="col-md-5">
                <div class="about_img">
                    <figure><img src="<?= base_url(); ?>assets/img/home/about_img.jpg" alt="#" /></figure>
                </div>
            </div>
            <div class="col-md-7">
                <div class="titlepage">
                    <h2>Apa Sih <span class="blu">Simone ?</span></h2>
                    <p>ini adalah website untuk aplikasi Pendafataran Magang Online
                        anda dapat menikmati beberapa fitur yang kami sediakan. antara lain,
                        absensi, nilai, kuota tersedia, sertifikat.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end about -->
<!-- persyaratan  section -->
<div id="persyaratan" class="choose">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Persyaratan<span class="blu"> Magang</span></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row shapes">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="row">
                    <div class="col-md-12 minHeightProp">
                        <div class="icon-pendaftaran">
                            <i class=" fas fa fa-envelope fa-4x"></i>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="text-center">
                            <span>Surat Permohonan</span>
                            <p>Surat permohonan persetujuan magang dari kampus </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="row">
                    <div class="col-md-12 minHeightProp">
                        <div class="icon-pendaftaran">
                            <i class=" fas fa fa-syringe fa-4x"></i>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="text-center">
                            <span>Vaksin Ketiga</span>
                            <p>Minimal sudah vaksin ketiga / booster</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="row">
                    <div class="col-md-12 minHeightProp">
                        <div class="icon-pendaftaran">
                            <i class=" fas fa fa-graduation-cap fa-4x"></i>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="text-center">
                            <span>Pendidikan D3 / S1</span>
                            <p>Minimal pendidikan D3 / S1</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- end choose  section -->
<!-- pendaftaran -->
<div id="pendaftaran" class="work">
    <div class="container-fluid">
        <div class="row d_flex">
            <div class="col-md-7">
                <div class="titlepage">
                    <h2>Form<span class="blu">Pendaftaran</span></h2>
                    <form action="<?php echo base_url(); ?>Home/index" method="POST" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="nama"><b>Nama</b></label>
                                <input type="text" class="form-control shadow" name="nama" id="nama" placeholder="Nama Lengkap">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email"><b>Email</b></label>
                                <input type="email" class="form-control shadow" name="email" id="email" placeholder="Masukan Alamat Email yang aktif">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jeniskel"><b>Jenis Kelamin</b></label>
                            <select class="form-control shadow" name="jeniskel">
                                <option value="">--Jenis Kelamin--</option>
                                 <option value="">
                              <?php if ($jenis['jeniskel'] == 'P') {
                                echo "Perempuan"
                              ?>
                              <?php } ?>
                               <?php if ($jenis['jeniskel'] == 'L') {
                                echo "Laki-laki"
                              ?>
                              <?php } ?>
                             </option>
                              <option value="P">Perempuan</option>
                              <option value="L">Laki-laki</option>
                            </select>
                        </div>
                         <div class="form-group">
                            <label for="jeniskel"><b>Pilih Tingkat Pendidikan</b></label>
                            <select class="form-control shadow" name="tingkat_pendidikan">
                                <option value="">--Pilih Tingkat Pendidikan--</option>
                                 <option value="">
                              <?php if ($tingkat_pendidikan['tingkat_pendidikan'] == 1) {
                                echo "Sekolah Menengah Kejuruan"
                              ?>
                              <?php } ?>
                               <?php if ($tingkat_pendidikan['tingkat_pendidikan'] == 2) {
                                echo "Perguruan Tinggi"
                              ?>
                              <?php } ?>
                             </option>
                              <option value="1">Sekolah Menengah Kejuruan</option>
                              <option value="2">Perguruan Tinggi</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="univ"><b>Universitas</b></label>
                                <input type="text" class="form-control shadow" name="sekolah" id="univ" placeholder="Asal Universitas">
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="jurusan"><b>Jurusan</b></label>
                                    <input type="text" class="form-control shadow" name="jurusan" id="jurusan" placeholder="Asal Jurusan">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="divisi"><b>Divisi Jurusan Magang</b></label>
                            <select name="divisi" class="form-control shadow">
                                <option value="">--Divisi Magang--</option>
                                <option value="<?= $divisi['id'] ?>"><?= $divisi['divisi'] ?></option>
                                <?php foreach ($nama_divisi as $pilihan) : ?>
                                <option value="<?= $pilihan['divisi'] ?>"><?= $pilihan['divisi'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="foto"><b>Foto Resmi 3X4</b></label>
                                <input type="file" class="form-control-file" name="foto" id="foto">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="surat"><b>File Surat Pengantar</b></label>
                                <input type="file" class="form-control-file" name="surat_pengantar" id="surat">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <div id="image_captcha"><?php echo $image; ?></div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <a  href="javascript:void(0);" class="captcha-refresh" ><img src="<?= base_url(); ?>assets/img/refresh.png" alt="" id="ref_symbol" width="25px" height="25px"></a>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" name="captcha" value=""/>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success" name="submit">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-md-5">
                <div class="work_img">
                    <figure><img src="<?= base_url(); ?>assets/img/home/work_img.jpg" alt="#" /></figure>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end work -->