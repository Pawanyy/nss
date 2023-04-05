<?php require_once __DIR__ . "/include/layout-start.php"; ?>
<?php
    $sql = "SELECT * FROM tbl_events";
    $result = $conn -> query($sql);
    $rows = $result -> fetch_all(MYSQLI_ASSOC);
?>
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
            <h1 class="jumbotron-heading">Browse Events</h1>
            <p class="lead text-muted mx-5 px-5">You can Brouse For Events.</p>
            <p>
                <a href="/" class="btn btn-primary my-2">Home</a>
                <a href="<?=BASE_URL?>contact.php" class="btn btn-secondary my-2">Contact Us</a>
            </p>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <?php foreach ($rows as $key => $value) { ?>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">
                                    <?=$value['name']?>
                                </h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    <?=$value['description']?>
                                </p>
                                <a href="<?=BASE_URL?>events.php?event_id=<?=$value['id']?>"
                                    onclick="return confirm('Are you Sure to book for <?=$value['name']?> event!')"
                                    class="btn btn-warning">Book</a>
                                <button class="btn btn-secondary">Already Booked</button>
                            </div>
                            <div class="card-footer">
                                <?= $value['date'] ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

</main>
<?php require_once __DIR__ . "/include/layout-end.php"; ?>