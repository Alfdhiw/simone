<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard') ?>">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-solid fa-user-gear"></i>
                </div>

                <div class="sidebar-brand-text mx-3"><?= $title ?></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Admin
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('dashboard/user_role') ?>">
                    <i class="fas fa-user"></i>
                    <span>User Role</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('dashboard/menu_management') ?>">
                    <i class="fas fa-folder-plus"></i>
                    <span>Menu Management</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Kepegawaian
            </div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('dashboard/data_mahasiswa') ?>">
                    <i class="fas fa-user-graduate"></i>
                    <span>Data Mahasiswa</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('dashboard/data_penyelia') ?>">
                    <i class="fas fa-user"></i>
                    <span>Data Penyelia</span>
                </a>
            </li>
            <!-- Heading -->
            <div class="sidebar-heading">
                Proses
            </div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fas fa-user"></i>
                    <span>Verifikasi Mahasiswa</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('dashboard/monitoring') ?>">
                    <i class="fas fa-user"></i>
                    <span>Monitoring</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fas fa-user"></i>
                    <span>Input Nilai</span>
                </a>
            </li>
        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            