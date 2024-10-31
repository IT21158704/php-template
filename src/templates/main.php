<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$role = 'user';

$sidebar = '../components/sidebar.php';
$topNav = '../components/navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php include '../components/head.php'; ?>
<body>
    <?php include $topNav; ?>
    <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <?php include $sidebar; ?>
        </nav>
        <div class="main-panel">
            <div class="content-wrapper">
                <?php
                if (isset($component)) {
                    include $component;
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>