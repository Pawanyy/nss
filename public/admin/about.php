<?php require_once __DIR__ . "/include/layout-start.php"; ?>
<main aria-labelledby="title">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About</li>
        </ol>
    </nav>

    <div class="container">

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">RealEstate, Inc</h1>
                    <p class="lead text-muted">This is India’s No. 1 property portal, deals with every aspect of the consumers’ needs in the real estate industry. It is an online forum where buyers, sellers and brokers/agents can exchange information about real estate properties quickly, effectively and inexpensively.</p>
                    <p>
                        <a href="/" class="btn btn-primary my-2">Home</a>
                        <a href="<?=BASE_URL?>contact.php" class="btn btn-secondary my-2">Contact Us</a>
                    </p>
                </div>
            </div>
        </section>

        <section id="About">
            <h1 class="text-center">FAQ</h1>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading_1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_1" aria-expanded="true" aria-controls="collapse_1">
                            <strong>Question 1:</strong>&nbsp;What types of properties does RealEstate offer?
                        </button>
                    </h2>
                    <div id="collapse_1" class="accordion-collapse collapse" aria-labelledby="heading_1" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Answer:</strong> RealEstate offers a vast selection of properties, including residential, commercial, and industrial properties.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading_2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_2" aria-expanded="true" aria-controls="collapse_2">
                            <strong>Question 2:</strong>&nbsp;Is RealEstate available globally?
                        </button>
                    </h2>
                    <div id="collapse_2" class="accordion-collapse collapse" aria-labelledby="heading_2" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Answer:</strong> Yes, RealEstate has a global reach, offering properties in various locations worldwide.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading_3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_3" aria-expanded="true" aria-controls="collapse_3">
                            <strong>Question 3:</strong>&nbsp;How does RealEstate ensure the security of transactions?
                        </button>
                    </h2>
                    <div id="collapse_3" class="accordion-collapse collapse" aria-labelledby="heading_3" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Answer:</strong> RealEstate employs state-of-the-art security measures to ensure the safety and security of all transactions.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading_4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_4" aria-expanded="true" aria-controls="collapse_4">
                            <strong>Question 4:</strong>&nbsp;How does RealEstate compare to traditional real estate processes?
                        </button>
                    </h2>
                    <div id="collapse_4" class="accordion-collapse collapse" aria-labelledby="heading_4" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Answer:</strong> RealEstate offers a faster, more affordable, and more straightforward process compared to traditional real estate processes.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading_5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_5" aria-expanded="true" aria-controls="collapse_5">
                            <strong>Question 5:</strong>&nbsp;What is the refund policy for RealEstate?
                        </button>
                    </h2>
                    <div id="collapse_5" class="accordion-collapse collapse" aria-labelledby="heading_5" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Answer:</strong> RealEstate offers a refund option in case clients are dissatisfied with the services provided.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading_6">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_6" aria-expanded="true" aria-controls="collapse_6">
                            <strong>Question 6:</strong>&nbsp;Is RealEstate easy to use?
                        </button>
                    </h2>
                    <div id="collapse_6" class="accordion-collapse collapse" aria-labelledby="heading_6" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Answer:</strong> Yes, RealEstate offers a user-friendly and straightforward experience for clients looking to buy, sell, or rent properties.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading_7">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_7" aria-expanded="true" aria-controls="collapse_7">
                            <strong>Question 7:</strong>&nbsp;Can I access RealEstate remotely?
                        </button>
                    </h2>
                    <div id="collapse_7" class="accordion-collapse collapse" aria-labelledby="heading_7" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Answer:</strong> Yes, RealEstate allows clients to access and manage their real estate transactions remotely, providing convenience and flexibility.
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php require_once __DIR__ . "/include/layout-end.php"; ?>