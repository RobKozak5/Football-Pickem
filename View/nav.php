<div class="dashboard-main-wrapper">
    <!-- Navbar -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg fixed-top" style="background-color:#cc0000; border-bottom: none;">
                <a class="navbar-brand" style="color:#fff" href="../dashboard.php">Football Pickem</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li>
                            <h5 class="mb-0 text-black nav-user-name" style="color:#fff">Welcome <?php echo $_SESSION["username"] ?>!</h5>
                        </li>
                        <li>
                            <a class="dropdown-item" href="./Controller/logout.php" style="color:#fff"><i class="fas fa-power-off mr-2"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
</div>
    <!-- /Navbar -->

    <!-- <nav class="navbar navbar-expand-lg static-top" -->