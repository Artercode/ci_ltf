        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <!-- membuat tanggal berubah otomatis -->
                    151119 Bebas dicontek &copy; 2019-<?= date('Y') ?> <strong><a href="" class="ml-1">Komunitascoding</a>.</strong>
                </div>
            </div>
        </footer>
        <!-- akhir Footer -->

        <!-- bagian awal div ada di topbar.php - karena sidebar full di sebelah kanan -->
        </div>
        <!-- End of Content Wrapper -->
        <!-- bagian awal div ada di header.php - karena sidebar full di sebelah kanan -->
        </div>
        <!-- End of Page Wrapper -->

        <!-- tombol Scroll pojok kiri bawah -->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- logout di avatar kanan atas-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Tekan "Logout" untuk keluar, cek apa ada barang yang tertinggal!</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="<?= base_url('login/logout'); ?>">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- akhir logout di avatar kanan atas-->


        <!-- Bootstrap core JavaScript-->
        <script src="<?= base_url('assets/'); ?>plugins/jquery/jquery.min.js"></script>
        <script src="<?= base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="<?= base_url('assets/'); ?>plugins/jquery-easing/jquery.easing.min.js"></script>
        <!-- Custom scripts for all pages-->
        <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>


        <!-- jquery untuk role-access.php -->
        <script>
            // ajax untuk upload foto
            $('.custom-file-input').on('change', function() {
                let fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').addClass("selected").html(fileName);
            });

            // jquery mencari data dari input dan akan melakukan ...
            $('.form-check-input').on('click ', function() {
                // ambil data yang dikirim dari role-access.php
                const menuId = $(this).data('menu');
                const roleId = $(this).data('role');

                $.ajax({
                    url: "<?= base_url('admin/changeaccess'); ?>",
                    type: 'post',
                    data: {
                        // menuId objek data - menuId variabel
                        menuId: menuId,
                        roleId: roleId
                    },
                    success: function() {
                        document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
                    }
                });
            });
        </script>

        </body>

        </html>