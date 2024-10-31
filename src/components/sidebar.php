<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check the user's role from the session
$userRole = 'login'; // Default to 'guest' if no role is set

if ($userRole === 'admin') {
    // Admin navbar
    ?>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="admin_dashboard.php">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Admin Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="view_users.php">
                <i class="mdi mdi-account-outline menu-icon"></i>
                <span class="menu-title">View Users</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="add_user.php">
                <i class="mdi mdi-account-plus-outline menu-icon"></i>
                <span class="menu-title">Add Users</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="profile.php">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Profile</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../logout.php">
                <i class="mdi mdi-logout menu-icon"></i>
                <span class="menu-title">Logout</span>
            </a>
        </li>
    </ul>
    <?php
} elseif ($userRole === 'user') {
    // User navbar
    ?>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="user_dashboard.php">
                <i class="icon-home menu-icon"></i>
                <span class="menu-title">User Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="profile.php">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Profile</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../logout.php">
                <i class="mdi mdi-logout menu-icon"></i>
                <span class="menu-title">Logout</span>
            </a>
        </li>
    </ul>
    <?php
} else {
    // Default guest or error navbar
    ?>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="login.php">
                <i class="mdi mdi-login menu-icon"></i>
                <span class="menu-title">Login</span>
            </a>
        </li>
    </ul>
    <?php
}
?>