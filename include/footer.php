<footer class="py-5 mt-3 bg-white border border-1">
    <div class="container">
        <div class="row">

            <div class="col-6 mb-3">
                <a class="d-inline-flex align-items-center mb-2 text-body-secondary text-decoration-none" href="/" aria-label="Bootstrap">
                    <img src="<?=BASE_URL?>/assets/img/NSSLogo.png" alt="Logo" height="50" class="rounded-3">
                    <span class="fs-2 ms-2"><?=$settings['name']?></span>
                </a>
                <ul class="list-unstyled small">
                    <li class="mb-2">Designed and built with all the ❤️ in the world.</li>
                    <li class="mb-2">Currently v0.0.1.</li>
                </ul>
            </div>

            <div class="col-2 mb-3">
                <h5>Main</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="<?=BASE_URL?>" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="<?=BASE_URL?>events.php" class="nav-link p-0 text-muted">Events</a></li>
                    <li class="nav-item mb-2"><a href="<?=BASE_URL?>contact.php" class="nav-link p-0 text-muted">Contact</a></li>
                    <li class="nav-item mb-2"><a href="<?=BASE_URL?>about.php" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div>

            <div class="col-2 mb-3">
                <h5>Other</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Terms of Service</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Privacy Policy</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Legal Policy</a></li>
                </ul>
            </div>

            <div class="col-2 mb-3">
                <h5>Follow Us!</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Facebook</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Instagram</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Twitter</a></li>
                </ul>
            </div>
        </div>


        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
            <p>&copy; <?php echo date('Y'); ?> <?=$settings['name']?>. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter" /></svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram" /></svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook" /></svg></a></li>
            </ul>
        </div>
    </div>
</footer>
