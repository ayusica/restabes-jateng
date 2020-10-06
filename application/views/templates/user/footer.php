<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Sumda-Polrestabes Semarang &copy; <?= date('Y'); ?> Dev.Informatics-UndipTech</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

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
                <h5 class="modal-title" id="exampleModalLabel">Anda yakin akan keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Klik tombol "Keluar" untuk keluar dan klik "Batal" untuk tetap di halaman ini!</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-primary" href="<?= base_url('login/logout') ?>">Keluar</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url(); ?>assets/js/sb-admin-2.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url(); ?>assets/vendor/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>
<script src="<?= base_url() ?>assets/chartjs/Chart.js"></script>

<script>
    $(document).ready(function() {
        var table = $('#example1').DataTable({
            scrollY: "300px",
            scrollX: true,
            scrollCollapse: true,
            paging: true,
            fixedColumns: {
                leftColumns: 1,
                rightColumns: 0
            }
        });
    });

    (function() {

        var showHide = function(element, field) {
            this.element = element;
            this.field = field;

            this.toggle();
        };

        showHide.prototype = {
            toggle: function() {
                var self = this;
                self.element.addEventListener("change", function() {
                    if (self.element.checked) {
                        self.field.setAttribute("type", "text");
                    } else {
                        self.field.setAttribute("type", "password");
                    }
                }, false);
            }
        };

        document.addEventListener("DOMContentLoaded", function() {
            var checkbox = document.querySelector("#show-hide"),
                // password = document.querySelector("#old_password"),
                password = document.querySelector("#new_password"),
                // password = document.querySelector("#re_new_password"),
                form = document.querySelector("#form");

            form.addEventListener("submit", function(e) {
                e.preventDefault();
            }, false);

            var toggler = new showHide(checkbox, password);
        });

    })();
</script>

<!-- page script -->
<script>
    $(function() {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": false,
            "autoWidth": false,
            "scrollY": "300px",
            "scrollX": true,
            "scrollCollapse": true,
        });
    });
</script>

<!-- Js Edit -->
<script src="<?= base_url(); ?>assets/js/jspersonel.js"></script>
<script src="<?= base_url(); ?>assets/js/jssium.js"></script>
<script src="<?= base_url(); ?>assets/js/jsurmin.js"></script>
<script src="<?= base_url(); ?>assets/js/jskabag.js"></script>
</body>

</html>