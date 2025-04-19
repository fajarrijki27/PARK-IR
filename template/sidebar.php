<?php // file: template/sidebar.php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

<div class="sidebar" id="sidebar">
    <div class="sidebar-content">
        <div class="header-title">PARK-IR 🚗</div>

        <ul class="nav">
            <li class="nav-item <?= $activePage == 'dashboard' ? 'active' : '' ?>">
                <a href="dashboard.php">
                    <span class="indicator"></span>
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
            </li>
            <li class="nav-item <?= $activePage == 'users' ? 'active' : '' ?>">
                <a href="users.php">
                    <span class="indicator"></span>
                    <i class="fas fa-users"></i> Users
                </a>
            </li>
            <li class="nav-item <?= $activePage == 'kendaraan' ? 'active' : '' ?>">
                <a href="kendaraan.php">
                    <span class="indicator"></span>
                    <i class="fas fa-car"></i> Kendaraan
                </a>
            </li>
            <li class="nav-item <?= $activePage == 'blok_parkir' ? 'active' : '' ?>">
                <a href="blok_parkir.php">
                    <span class="indicator"></span>
                    <i class="fas fa-th-large"></i> Blok parkir
                </a>
            </li>
            <li class="nav-item <?= $activePage == 'transaksi' ? 'active' : '' ?>">
                <a href="transaksi.php">
                    <span class="indicator"></span>
                    <i class="fas fa-money-bill"></i> Transaksi
                </a>
            </li>
        </ul>

        <div class="logout">
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i> <span>Log out</span></a>
        </div>
    </div>
</div>