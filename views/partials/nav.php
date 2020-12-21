<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <span class="navbar-brand">VeHMAMS</span>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMenu">
        <div class="navbar-nav">

            <?php if (isset($_SESSION['user_details'])){?>
            <a href="/views/index.php" class="nav-link px-lg-5 d-flex align-items-center">Home</a>
            
            <?php if ( $_SESSION['user_details']->isAdmin ) {?>
            <a href="/views/partials/view.php" class="nav-link px-lg-5 d-flex align-items-center">View Users</a>
            <?php }  ?>
            
            <a href="/views/assetLended.php" class="nav-link px-lg-5 d-flex align-items-center">View Assets Lended</a>
            

            <?php if ( $_SESSION['user_details']->isAdmin ) { ?>
            <a href="/views/borrowRequest.php" class="nav-link px-lg-5 d-flex align-items-center">View Borrow Requests</a>
            

            <a href="/views/returnRequest.php" class="nav-link px-lg-5 d-flex align-items-center">View Return Requests</a>
            <?php }  ?>

            <a href="/controllers/view_user/process_logout.php" class="nav-link px-lg-5 d-flex align-items-center">Logout</a>
<?php }?>

        </div>
    </div>
</nav>