<div class="container">
    <div class="row justify-content-center">

        <div class="col-lg-6">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900">Ubah Password untuk</h1>
                                    <h5 class="mb-4"><?= $this->session->userdata('reset_email'); ?></h5>
                                </div>
                                <!-- menampilkan alert berhasil register -->
                                <?= $this->session->flashdata('message') ?>

                                <form class="user" action="<?= base_url('login/ubahpassword') ?>" method="post">
                                    <div class="form-group">
                                        <input type="password" id="password1" name="password1" class="form-control form-control-user" placeholder="Masukan Password baru...">
                                        <!-- menampilkan alert bila email tidak terdaftar -->
                                        <?= form_error('password1', '<small class="font-italic text-danger pl-4">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" id="password2" name="password2" class="form-control form-control-user" placeholder="Ulang Password...">
                                        <!-- menampilkan alert bila email tidak terdaftar -->
                                        <?= form_error('password2', '<small class="font-italic text-danger pl-4">', '</small>') ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Ubah Password
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>