        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="ml-1 sidebar-brand-icon">
                    <i class="fas fa-fw fa-coffee"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Semoga Sukses</div>
            </a>

            <!-- garis pembatas atas admin -->
            <hr class="sidebar-divider">

            <!-- query menu -->
            <?php
            $role_id = $this->session->userdata('role_id');
            // id yang digunakan dari user_menu (pakai titik)
            //  menggunakan BACKTICK (`) yang ada di tombol (~) kiri atas !!!!
            $queryMenu = "SELECT `user_menu`.`id`, `menu`
                            FROM `user_menu` JOIN `user_access_menu` 
                              ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                           WHERE `user_access_menu`.`role_id` = $role_id
                        ORDER BY `user_access_menu`.`menu_id` ASC
                    ";
            $menu = $this->db->query($queryMenu)->result_array();

            ?>

            <!-- looping menu -->
            <?php foreach ($menu as $m) : ?>
                <div class="sidebar-heading">
                    <?= $m['menu']; ?>
                </div>
                <!-- sub menu sesuai dengan menu -->
                <?php
                $menuId = $m['id'];
                $querySubMenu = "SELECT *
                                FROM `user_sub_menu` JOIN `user_menu` 
                                  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                               WHERE `user_sub_menu`.`menu_id` = $menuId
                                 AND `user_sub_menu`.`is_active` = 1
                            ";
                $subMenu = $this->db->query($querySubMenu)->result_array();
                ?>
                <!-- foreach di dalam foreach -->
                <?php foreach ($subMenu as $sm) : ?>
                    <!-- membuat menu active -->
                    <?php if ($title == $sm['title']) : ?>
                        <!-- menampilkan sub menu -->
                        <li class="nav-item active">
                        <?php else : ?>
                        <li class="nav-item">
                        <?php endif; ?>
                        <!-- akhir memn=buat menu active -->
                        <a class="nav-link py-1" href="<?= base_url($sm['url']); ?>">
                            <i class="<?= $sm['icon']; ?>"></i>
                            <span><?= $sm['title']; ?></span></a>
                        </li>
                    <?php endforeach; ?>
                    <!-- garis pembatas user-->
                    <hr class="sidebar-divider">
                <?php endforeach; ?>
                <!-- akhir looping menu -->


                <!-- Logout -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('login/logout'); ?>">
                        <i class="fas fa-fw fa-sign-out-alt"></i>
                        <span>Logout</span></a>
                </li>


                <!-- garis pembatas terakir -->
                <hr class="sidebar-divider">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

        </ul>
        <!-- End of Sidebar -->