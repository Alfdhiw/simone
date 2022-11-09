<!-- Footer Start -->
<div id="contact" class="container-fluid bg-dark text-light mt-5 pt-5">
    <div class="row px-xl-5 pt-5">
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            <h2 class="text-light mb-3"><i class="fas fa-duotone fa-building-columns"></i> Alamat Kantor</h2>
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2260776113494!2d110.40701211431778!3d-6.982626370317617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4ec52229d7%3A0xc791d6abc9236c7!2sUniversitas%20Dian%20Nuswantoro!5e0!3m2!1sen!2sid!4v1659882981258!5m2!1sen!2sid" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
            <br>
            <p class="mb-2"><i class="fa fa-map-marker-alt text-light mr-3"></i>Jl. Siliwangi No.512, Kembangarum, Kec. Semarang Barat, Kota Semarang, Jawa Tengah 50146</p>
            <p class="mb-2"><i class="fa fa-envelope text-light mr-3"></i>ptjateng@gmail.com</p>
            <p class="mb-0"><i class="fa fa-phone-alt text-light mr-3"></i>+024 7604041</p>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h2 class="text-light mb-3">Menu Cepat</h2>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#home"><i class="fa fa-angle-right mr-2"></i>Home</a>
                        <a class="text-light mb-2" href="#about"><i class="fa fa-angle-right mr-2"></i>Tentang Simone</a>
                        <a class="text-light mb-2" href="#persyaratan"><i class="fa fa-angle-right mr-2"></i>Persyaratan Magang</a>
                        <a class="text-light mb-2" href="#pendaftaran"><i class="fa fa-angle-right mr-2"></i>Pendafataran Magang</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h2 class="text-light mb-">Layanan Pelanggan</h2>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Bantuan</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Hubungi Kami</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Permasalahan Login</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>S&K Perusahaan</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h2 class="text-light mb-3">Ikuti Kami</h2>
                    <div class="d-flex">
                        <a class="btn btn-light btn-square mr-2" href="#"><i class="fab fa-twitter" style="color: #444444;"></i></a>
                        <a class="btn btn-light btn-square mr-2" href="#"><i class="fab fa-facebook-f" style="color: #444444;"></i></a>
                        <a class="btn btn-light btn-square mr-2" href="#"><i class="fab fa-linkedin-in" style="color: #444444;"></i></a>
                        <a class="btn btn-light btn-square" href="#"><i class="fab fa-instagram" style="color: #444444;"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="col-md-12 px-xl-0">
            <p class="mb-md-0 text-center text-md-center text-light">
                &copy; <a class="text-success" href="#">2022</a>. All Rights Reserved. Designed
                by
                <a class="text-success" href="">UDINUS</a>
            </p>
        </div>
    </div>
</div>
<!-- Footer End -->
<!-- Back to Top -->

</div>
<a id="back-to-top" href="#" class="btn btn-success btn-sm back-to-top pull-left" role="button" data-toggle="tooltip" data-placement="top" data-original-title="" title="" style="display: none;">
    <i class="fas fa-angle-double-up"></i>
</a>
<!-- Javascript files-->
<script src="<?= base_url(); ?>assets/js/home/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/js/home/popper.min.js"></script>
<script src="<?= base_url(); ?>assets/js/home/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>assets/js/home/jquery-3.0.0.min.js"></script>
<!-- sidebar -->
<script src="<?= base_url(); ?>assets/js/home/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?= base_url(); ?>assets/js/home/custom-home.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#dismiss, .overlay').on('click', function() {
            $('#sidebar').removeClass('active');
            $('.overlay').removeClass('active');
        });

        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').addClass('active');
            $('.overlay').addClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
</script>
<script>
    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });

        $(".zoom").hover(function() {

            $(this).addClass('transition');
        }, function() {

            $(this).removeClass('transition');
        });
    });
</script>
<script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 11,
            center: {
                lat: 40.645037,
                lng: -73.880224
            },
        });

        var image = 'images/maps-and-flags.png';
        var beachMarker = new google.maps.Marker({
            position: {
                lat: 40.645037,
                lng: -73.880224
            },
            map: map,
            icon: image
        });
    }
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
                $(".navbar-right.navbar-r").css('margin-top', 14);
                $(".navbar-brand img").css('width', 195);
            } else {
                $('#back-to-top').fadeOut();
                $(".navbar-right.navbar-r").css('margin-top', 17);
                $(".navbar-brand img").css('width', 230);
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function() {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });

        $('#back-to-top').tooltip('show');
    });
</script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->
</body>

</html>