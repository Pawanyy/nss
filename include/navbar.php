<header>
    <nav class="navbar sticky-top navbar-expand-sm navbar-toggleable-sm navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?=BASE_URL?>">
                <img src="/assets/img/RealEstate.png" alt="Logo" height="35" class="d-inline-block align-text-top rounded-4">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse" title="Toggle navigation" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-sm-inline-flex justify-content-between">
                <ul class="navbar-nav flex-grow-1">
                    <li><a class="nav-link" href="<?=BASE_URL?>">Home</a></li>
                    <li><a class="nav-link" href="<?=BASE_URL?>about.php">About</a></li>
                    <li><a class="nav-link" href="<?=BASE_URL?>events.php">Events</a></li>
                    <li><a class="nav-link" href="<?=BASE_URL?>contact.php">Contact</a></li>
                </ul>
                <form class="d-flex" role="search">
                    <?php if(!$helper->IsLogin()) { ?>
                        <a class="btn btn-success" href="<?=BASE_URL?>login.php">Login</a>
                        <a class="btn btn-info ms-2" href="<?=BASE_URL?>register.php">Sign Up</a>
                    <?php } else { ?>
                        <?php
                            if ($helper->IsUserLogin())
                            {
                                $action = BASE_URL . "profile.php";
                            }
                            else 
                            {
                                $action = BASE_URL . "profile.php";
                            }
                        ?>

                        <a href="<?=$action?>">
                            <span class="text-white ps-2">
                                <?=$_SESSION['email']?>
                            </span>
                        </a>
                    <a class="btn btn-danger ms-2" href="<?=BASE_URL?>logout.php">Logout</a>
                    <?php } ?>
                </form>
            </div>
        </div>
    </nav>
</header>