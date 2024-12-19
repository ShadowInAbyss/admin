<?php
// sidebar.php
$current_page = basename($_SERVER['PHP_SELF']); // Mendapatkan nama file halaman saat ini
?>

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2 bg-white my-2" id="sidenav-main">
    <div class="sidenav-header">
        <a class="navbar-brand px-4 py-3 m-0" href="https://demos.creative-tim.com/material-dashboard/pages/dashboard" target="_blank">
            <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img" width="26" height="26" alt="main_logo">
            <span class="ms-1 text-sm text-dark">Creative Tim</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <!-- Dashboard -->
            <li class="nav-item">
                <a class="nav-link text-dark <?php echo $current_page == 'dashboard.php' ? 'active bg-dark text-white' : ''; ?>" href="../pages/dashboard.php">
                    <i class="material-symbols-rounded">dashboard</i>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <!-- Tables -->
            <li class="nav-item">
                <a class="nav-link text-dark <?php echo $current_page == 'tables.php' ? 'active bg-dark text-white' : ''; ?>" href="../pages/tables.php">
                    <i class="material-symbols-rounded">table_view</i>
                    <span class="nav-link-text ms-1">Tables</span>
                </a>
            </li>
            <!-- Billing -->
            <li class="nav-item">
                <a class="nav-link text-dark <?php echo $current_page == 'billing.php' ? 'active bg-dark text-white' : ''; ?>" href="../pages/billing.php">
                    <i class="material-symbols-rounded">receipt_long</i>
                    <span class="nav-link-text ms-1">Billing</span>
                </a>
            </li>
            <!-- Notifications -->
            <li class="nav-item">
                <a class="nav-link text-dark <?php echo $current_page == 'notifications.php' ? 'active bg-dark text-white' : ''; ?>" href="../pages/notifications.php">
                    <i class="material-symbols-rounded">notifications</i>
                    <span class="nav-link-text ms-1">Notifications</span>
                </a>
            </li>
            <!-- Profile -->
            <li class="nav-item">
                <a class="nav-link text-dark <?php echo $current_page == 'profile.php' ? 'active bg-dark text-white' : ''; ?>" href="../pages/profile.php">
                    <i class="material-symbols-rounded">person</i>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <!-- Logout -->
            <li class="nav-item">
                <a class="nav-link text-dark <?php echo $current_page == 'logout.php' ? 'active bg-dark text-white' : ''; ?>" href="../pages/logout.php">
                    <i class="material-symbols-rounded">logout</i>
                    <span class="nav-link-text ms-1">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</aside>11
