<?php require_once __DIR__ . "/include/layout-start.php"; ?>
<style>
    .card-body .detail .title {
        font-size: 18px !important;
        font-weight: 500 !important;
        margin-bottom: 10px !important;
    }
    .card-body .detail .title a, .detail .location a {
        text-decoration: none !important;
    }
    .card-body .detail .location a {
        font-size: 13px;
        color: #535353;
        font-weight: 400;
    }

    .card-body .detail .location {
        margin: 0 0 15px;
    }

    .card-body ul li {
        list-style: none;
        width: 50%;
        float: left;
        font-weight: 400;
        line-height: 35px;
        font-size: 13px;
    }
</style>
<main role="main">
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Browse Properties</h1>
            <p class="lead text-muted mx-5 px-5">You can advertise your property, search for properties, browse through available listings, create your property microsite, and stay up-to-date with the latest news and trends in the real estate sector.</p>
            <p>
                <a href="/" class="btn btn-primary my-2">Home</a>
                <a href="/Home/Contact" class="btn btn-secondary my-2">Contact Us</a>
            </p>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">

            </div>
        </div>
    </div>

</main>
<?php require_once __DIR__ . "/include/layout-end.php"; ?>