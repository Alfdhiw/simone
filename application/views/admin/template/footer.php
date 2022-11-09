<!-- Footer -->
</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/') ?>vendor/admin/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/admin/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/') ?>vendor/admin/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/') ?>js/admin/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/') ?>vendor/admin/chart.js/Chart.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/') ?>vendor/admin/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/admin/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets/') ?>js/admin/demo/datatables-demo.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets/') ?>js/admin/demo/chart-area-demo.js"></script>
<script src="<?= base_url('assets/') ?>js/admin/demo/chart-pie-demo.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.data').DataTable();
    });
</script>

</body>

</html>