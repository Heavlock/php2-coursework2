<body>
<header class="site-header sticky-top py-1">
    <nav class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="#" aria-label="Product">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
                 stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img"
                 viewBox="0 0 24 24"><title>Product</title>
                <circle cx="12" cy="12" r="10"/>
                <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/>
            </svg>
        </a>
        <a class="py-2 d-none d-md-inline-block" href="#">Tour</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Product</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Features</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Enterprise</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Support</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Pricing</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Cart</a>
    </nav>
</header>
<div class="container">
    <main>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 fw-normal">
                    <?= !empty($h1) ? $h1 : $application->renderException(); ?>
                </h1>
                <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with
                    this example based on Apple’s marketing pages.</p>
                <a class="btn btn-outline-secondary" href="#">Coming soon</a>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
            <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
                <div class="my-3 py-3">
                    <h2 class="display-5">Another headline</h2>
                    <p class="lead">And an even wittier subheading.</p>
                </div>
                <div class="bg-light shadow-sm mx-auto"
                     style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
            <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 p-3">
                    <h2 class="display-5">Another headline</h2>
                    <p class="lead">And an even wittier subheading.</p>
                </div>
                <div class="bg-dark shadow-sm mx-auto"
                     style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
        </div>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
            <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 p-3">
                    <h2 class="display-5">Another headline</h2>
                    <p class="lead">And an even wittier subheading.</p>
                </div>
                <div class="bg-dark shadow-sm mx-auto"
                     style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
            <div class="bg-primary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
                <div class="my-3 py-3">
                    <h2 class="display-5">Another headline</h2>
                    <p class="lead">And an even wittier subheading.</p>
                </div>
                <div class="bg-light shadow-sm mx-auto"
                     style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
        </div>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
            <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 p-3">
                    <h2 class="display-5">Another headline</h2>
                    <p class="lead">And an even wittier subheading.</p>
                </div>
                <div class="bg-white shadow-sm mx-auto"
                     style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
            <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 py-3">
                    <h2 class="display-5">Another headline</h2>
                    <p class="lead">And an even wittier subheading.</p>
                </div>
                <div class="bg-white shadow-sm mx-auto"
                     style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
        </div>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
            <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 p-3">
                    <h2 class="display-5">Another headline</h2>
                    <p class="lead">And an even wittier subheading.</p>
                </div>
                <div class="bg-white shadow-sm mx-auto"
                     style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
            <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 py-3">
                    <h2 class="display-5">Another headline</h2>
                    <p class="lead">And an even wittier subheading.</p>
                </div>
                <div class="bg-white shadow-sm mx-auto"
                     style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
        </div>
    </main>
</div>