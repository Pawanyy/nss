<?php require_once __DIR__ . "/include/layout-start.php"; ?>
<style>
    .form-group {
        margin-bottom: 10px !important;
    }

        .form-group label {
            margin-bottom: 5px
        }

    input, textarea {
        max-width: 350px;
    }

    .contact-1 .contact-info .media i {
        width: 50px;
        font-size: 18px;
        height: 50px;
        line-height: 50px;
        margin-right: 20px;
    }

    .media {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: start;
        align-items: flex-start;
    }

    .media-body {
        -ms-flex: 1;
        flex: 1;
    }
</style>
<main class="container" aria-labelledby="title">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
        </ol>
    </nav>

    <div class="contact-1 content-area-7 mt-5 mb-5">
        <div class="container">
            <div class="main-title">
                <h1>Contact Us</h1>
            </div>

            <div class="row">
                <div class="col-lg-7 col-md-7 col-md-7">
                    <form action="" method="post">
                        <div class="form-horizontal">
                            <p>We're always happy to help. Whether you need assistance with buying, selling, or renting a property, our team is here to answer your questions.<br>Contact us today by phone, email, or through our website's contact form.</p>
                            <hr>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="NAME">Name</label>
                                <div class="col-md-10">
                                    <input class="form-control text-box single-line" data-val="true" data-val-length="The field Name must be a string with a minimum length of 2 and a maximum length of 100." data-val-length-max="100" data-val-length-min="2" data-val-required="The Name field is required." id="NAME" name="NAME" type="text" value="">
                                    <span class="field-validation-valid text-danger" data-valmsg-for="NAME" data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2" for="EMAIL">Email</label>
                                <div class="col-md-10">
                                    <input class="form-control text-box single-line" data-val="true" data-val-length="The field Email must be a string with a minimum length of 2 and a maximum length of 255." data-val-length-max="255" data-val-length-min="2" data-val-required="The Email field is required." id="EMAIL" name="EMAIL" type="email" value="">
                                    <span class="field-validation-valid text-danger" data-valmsg-for="EMAIL" data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2" for="SUBJECT">Subject</label>
                                <div class="col-md-10">
                                    <input class="form-control text-box single-line" data-val="true" data-val-length="The field Subject must be a string with a minimum length of 2 and a maximum length of 255." data-val-length-max="255" data-val-length-min="2" data-val-required="The Subject field is required." id="SUBJECT" name="SUBJECT" type="text" value="">
                                    <span class="field-validation-valid text-danger" data-valmsg-for="SUBJECT" data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2" for="PHONE">Phone</label>
                                <div class="col-md-10">
                                    <input class="form-control text-box single-line" data-val="true" data-val-length="The field Phone must be a string with a minimum length of 10 and a maximum length of 10." data-val-length-max="10" data-val-length-min="10" data-val-required="The Phone field is required." id="PHONE" name="PHONE" type="tel" value="">
                                    <span class="field-validation-valid text-danger" data-valmsg-for="PHONE" data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2" for="MESSAGE">Message</label>
                                <div class="col-md-10">
                                    <textarea class="form-control text-box multi-line" data-val="true" data-val-length="The field Message must be a string with a minimum length of 2 and a maximum length of 1000." data-val-length-max="1000" data-val-length-min="2" data-val-required="The Message field is required." id="MESSAGE" name="MESSAGE"></textarea>
                                    <span class="field-validation-valid text-danger" data-valmsg-for="MESSAGE" data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-offset-2 col-md-10">
                                    <input type="submit" value="Send Message" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class=" offset-lg-1 col-lg-4 offset-md-0 col-md-5">
                    <div class="contact-info">
                        <h3>Contact Info</h3>
                        <div class="media">
                            <i class="bi-geo-alt"></i>
                            <div class="media-body">
                                <h5 class="mt-0">Office Address</h5>
                                <p>Thane, Maharashtra, India</p>
                            </div>
                        </div>
                        <div class="media">
                            <i class="bi-phone"></i>
                            <div class="media-body">
                                <h5 class="mt-0">Phone Number</h5>
                                <p>Phone: <a href="tel:123-4567-890">+91 1234567890</a> </p>
                            </div>
                        </div>
                        <div class="media mrg-btn-0">
                            <i class="bi-envelope-open-fill"></i>
                            <div class="media-body">
                                <h5 class="mt-0">Email Address</h5>
                                <p><a href="#">info@realestate.com</a></p>
                                <p><a href="#">https://realestate.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require_once __DIR__ . "/include/layout-end.php"; ?>