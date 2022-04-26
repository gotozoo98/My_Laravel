<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="./css/bs.css">

</head>

<body>
    <nav class="container-xl navbar navbar-expand-md navbar-light px-0">
        <a class="navbar-brand p-0" href="#">
            <img class="logo m-2" src="./img/logo.svg" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav fw-bold d-flex align-items-center">
                <li class="nav-item mx-2">
                    <a href="#" class="btn btn-outline-secondary border-0 px-3 py-2">Blog</a>
                </li>
                <li class="nav-item mx-2">
                    <a href="#" class="btn btn-outline-secondary border-0 px-3 py-2">Portfolio</a>
                </li>
                <li class="nav-item mx-2">
                    <a href="#" class="btn btn-outline-secondary border-0 px-3 py-2">About</a>
                </li>
                <li class="nav-item mx-2">
                    <a href="#" class="btn btn-outline-secondary border-0 px-3 py-2">Contact</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link my-link" href="#"><i class="fa-solid fa-cart-shopping fs-3"></i></a>
                </li>
                <li class="nav-item mx-2">
                    <a class="btn nav-link my-link dropdown-toggle" role="button" id="dropdown-1"
                        data-bs-toggle="dropdown" aria-expanded="false" href="#"><i
                            class="fa-solid fa-circle-user fs-2"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end me-2 mt-0" aria-labelledby="dropdown-1">
                        <li><a class="dropdown-item" href="#">Login</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <main>
        <section id="banner">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./img/imgA.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/imgB.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/imgC.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section id="card-01">
            <div class="container px-4 py-5 con-setting">
                <div class="row">
                    <p class="fs-3 fw-bold text-center pb-1">Raw Denim Heirloom Man Braid</p>
                    <p class="fs-6 text-muted text-center pb-4 px-5">Blue bottle crucifix vinyl post-ironic four dollar
                        toast vegan
                        taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug.</p>
                    <div class="my-hr mx-auto mb-5"></div>
                </div>

                <div class="row text-center">
                    <div class="col-xl-4 col-md-12 card p-3 border-0">
                        <div
                            class="cardimg color-1 bg-color-1 rounded-circle mx-auto d-flex justify-content-center align-items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <div class="card-body p-0">
                            <h5 class="card-title mb-4">Shooting Stars</h5>
                            <p class="card-text text-muted">Blue bottle crucifix vinyl post-ironic four dollar toast
                                vegan
                                taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.
                            </p>
                            <p><a href="#card-01" class="color-1">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12 card p-3 border-0">
                        <div
                            class="cardimg color-1 bg-color-1 rounded-circle mx-auto d-flex justify-content-center align-items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                                <circle cx="6" cy="6" r="3"></circle>
                                <circle cx="6" cy="18" r="3"></circle>
                                <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                            </svg>
                        </div>
                        <div class="card-body p-0">
                            <h5 class="card-title mb-4">The Catalyzer</h5>
                            <p class="card-text text-muted">Blue bottle crucifix vinyl post-ironic four dollar toast
                                vegan
                                taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.
                            </p>
                            <p><a href="#card-01" class="color-1">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12 card p-3 border-0">
                        <div
                            class="cardimg color-1 bg-color-1 rounded-circle mx-auto d-flex justify-content-center align-items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <div class="card-body p-0">
                            <h5 class="card-title mb-4">Neptune</h5>
                            <p class="card-text text-muted">Blue bottle crucifix vinyl post-ironic four dollar toast
                                vegan
                                taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.
                            </p>
                            <p><a href="#card-01" class="color-1">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </p>
                        </div>
                    </div>

                </div>
                <div class="d-flex justify-content-center mt-5">
                    <button type="button" class="btn btn-primary my-btn">Button</button>
                </div>
            </div>

        </section>
        <section id="gallery">
            <div class="container con-setting">
                <div class="row mb-5">
                    <div class="col-4">
                        <p class="h2">Master Cleanse Reliac Heirloom</p>
                    </div>
                    <div class="col-8">
                        <p class="text-muted mt-2">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical
                            gentrify,
                            subway tile poke
                            farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies
                            heirloom.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6 p-2">
                                <img src="./img/imgD.jpg" alt="">
                            </div>
                            <div class="col-6 p-2">
                                <img src="./img/imgE.jpg" alt="">
                            </div>
                        </div>
                        <div class="row p-2">
                            <img src="./img/imgA.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row p-2">
                            <img src="./img/imgB.jpg" alt="">
                        </div>
                        <div class="row">
                            <div class="col-6 p-2">
                                <img src="./img/imgC.jpg" alt="">
                            </div>
                            <div class="col-6 p-2">
                                <img src="./img/imgE.jpg" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <section id="pricing">
            <div class="container con-setting text-center my-con-add">
                <p class="h1 mb-2">Pricing</p>
                <p class="text-muted pb-4 mb-5">Banh mi cornhole echo park skateboard authentic crucifix neutra
                    tilde lyft
                    biodiesel artisan direct
                    trade mumblecore 3 wolf moon twee</p>
                <table class="table">
                    <tbody>
                        <tr class="bg-light border border-0 rounded">
                            <td class="small border border-0 rounded-start" scope="col">Plan</td>
                            <td class="small border border-0" scope="col">Speed</td>
                            <td class="small border border-0" scope="col">Storage</td>
                            <td class="small border border-0" scope="col">Price</td>
                            <td class="small border border-0 rounded-end" scope="col"></td>
                        </tr>
                        <tr>
                            <td scope="row">Start</td>
                            <td>5 Mb/s</td>
                            <td>15 GB</td>
                            <td class="fw-bold">Free</td>
                            <td><input type="radio" name="price_sel"></td>
                        </tr>
                        <tr>
                            <td scope="row">Pro</td>
                            <td>25 Mb/s</td>
                            <td>25 GB</td>
                            <td class="fw-bold">$24</td>
                            <td><input type="radio" name="price_sel"></td>
                        </tr>
                        <tr>
                            <td scope="row">Business</td>
                            <td>36 Mb/s</td>
                            <td>40 GB</td>
                            <td class="fw-bold">$50</td>
                            <td><input type="radio" name="price_sel"></td>
                        </tr>
                        <tr>
                            <td scope="row">Exclusive</td>
                            <td>48 Mb/s</td>
                            <td>120 GB</td>
                            <td class="fw-bold">$72</td>
                            <td><input type="radio" name="price_sel"></td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-between align-items-center  mt-3">
                    <a href="#pricing" class="color-1">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    <button type="button" class="btn btn-primary my-btn">Button</button>
                </div>
            </div>
        </section>
        <section id="card-02">
            <div class="container con-setting">
                <div class="row">
                    <div class="col">
                        <p class="fs-2 m-0">Pitchfork Kickstarter Taxidermy</p>
                        <div class="my-hr"></div>
                    </div>
                    <div class="col">
                        <p class="text-muted mt-2">
                            Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke
                            farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies
                            heirloom prism food truck ugh squid celiac humblebrag.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6 p-3">
                        <div class="card p-4 bg-light">
                            <img src="./img/imgA.jpg" class="img-fluid rounded" width="100%" alt="...">
                            <div class="card-body px-0">
                                <h6 class="card-subtitle mb-2 color-1 my-subtitle">SUBTITLE</h6>
                                <h5 class="card-title mb-3">Chichen Itza</h5>
                                <p class="card-text text-muted">Fingerstache flexitarian street art 8-bit waistcoat.
                                    Distillery
                                    hexagon disrupt edison bulbche.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 p-3">
                        <div class="card p-4 bg-light">
                            <img src="./img/imgB.jpg" class="img-fluid rounded" width="100%" alt="...">
                            <div class="card-body px-0">
                                <h6 class="card-subtitle mb-2 color-1 my-subtitle">SUBTITLE</h6>
                                <h5 class="card-title mb-3">Colosseum Roma</h5>
                                <p class="card-text text-muted">Fingerstache flexitarian street art 8-bit waistcoat.
                                    Distillery
                                    hexagon disrupt edison bulbche.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 p-3">
                        <div class="card p-4 bg-light">
                            <img src="./img/imgC.jpg" class="img-fluid rounded" width="100%" alt="...">
                            <div class="card-body px-0">
                                <h6 class="card-subtitle mb-2 color-1 my-subtitle">SUBTITLE</h6>
                                <h5 class="card-title mb-3">Great Pyramid of Giza</h5>
                                <p class="card-text text-muted">Fingerstache flexitarian street art 8-bit waistcoat.
                                    Distillery
                                    hexagon disrupt edison bulbche.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 p-3">
                        <div class="card p-4 bg-light">
                            <img src="./img/imgD.jpg" class="img-fluid rounded" width="100%" alt="...">
                            <div class="card-body px-0">
                                <h6 class="card-subtitle mb-2 color-1 my-subtitle">SUBTITLE</h6>
                                <h5 class="card-title mb-3">San Francisco</h5>
                                <p class="card-text text-muted">Fingerstache flexitarian street art 8-bit waistcoat.
                                    Distillery
                                    hexagon disrupt edison bulbche.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="info-sec">
            <div class="container con-setting my-con-add text-center text-md-start">
                <div class="d-flex flex-column flex-md-row my-info">
                    <div
                        class="mx-auto mx-md-0 cardimg color-1 bg-color-1 rounded-circle d-flex justify-content-center align-items-center">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                    </div>
                    <div class="d-flex flex-column p-0">
                        <h5>Shooting Stars</h5>
                        <div class="text-muted mb-3">Blue bottle crucifix vinyl post-ironic four dollar toast
                            vegan taxidermy. Gastropub indxgo juice poutine.
                        </div>
                        <a href="#info-sec" class="color-1">Learn More <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <hr class="color-1">
                <div class="d-flex flex-md-row-reverse flex-column justify-content-between flex-md-row my-info">
                    <div
                        class="mx-auto cardimg color-1 bg-color-1 rounded-circle d-flex justify-content-center align-items-center">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                            <circle cx="6" cy="6" r="3"></circle>
                            <circle cx="6" cy="18" r="3"></circle>
                            <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                        </svg>
                    </div>
                    <div class="d-flex flex-column p-0">
                        <h5>The Catalyzer</h5>
                        <div class="text-muted mb-3">Blue bottle crucifix vinyl post-ironic four dollar toast
                            vegan taxidermy. Gastropub indxgo juice poutine.
                        </div>
                        <a href="#info-sec" class="color-1">Learn More <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <hr class="color-1">
                <div class="d-flex flex-column flex-md-row my-info">
                    <div
                        class="mx-auto mx-md-0 cardimg color-1 bg-color-1 rounded-circle d-flex justify-content-center align-items-center">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <div class="d-flex flex-column p-0">
                        <h5>The 400 Blows</h5>
                        <div class="text-muted mb-3">Blue bottle crucifix vinyl post-ironic four dollar toast
                            vegan taxidermy. Gastropub indxgo juice poutine.
                        </div>
                        <a href="#info-sec" class="color-1">Learn More <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-5">
                    <button type="button" class="btn btn-primary my-btn">Button</button>
                </div>
            </div>
        </section>
        <section id="buying">
            <div class="container con-setting my-con-add">
                <div class="row">
                    <div class="col-md-6 my-l-col h-auto">
                        <img class="w-100 h-100" src="./img/imgK.jpeg" alt="">
                    </div>
                    <div class="col-md-6 my-r-col py-3">
                        <p class="mb-0 small text-muted">BRAND NAME</p>
                        <p class="h2">The Catcher in the Rye</p>
                        <span class="color-1 small">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                        </span>
                        <span class="text-secondary mx-2">4 Reviews</span>
                        <span class="text-secondary border-start border-muted border-3 ps-3 py-2 my-4">
                            <i class="fa-brands fa-facebook-f"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-solid fa-comment"></i>
                        </span>
                        <p class="mt-4 text-muted">
                            Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia
                            microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn.
                            Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over,
                            neutra jean shorts keytar banjo tattooed umami cardigan.
                        </p>
                        <div class="d-flex align-items-center">
                            <p class="mb-0 me-3 text-secondary">Color</p>
                            <button type="button"
                                class="my-cir-btn btn btn-light rounded-circle border border-2"></button>
                            <button type="button"
                                class="my-cir-btn btn btn-dark rounded-circle border border-2"></button>
                            <button type="button"
                                class="my-cir-btn btn btn-primary rounded-circle border border-2"></button>
                            <p class="ms-4 mb-0 text-secondary">Size</p>
                            <select name="cars" id="" class="btn">
                                <option value="SM">SM</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                            </select>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="h3">$58.00</div>
                            <div class="d-flex">
                                <button type="button" class="btn btn-primary my-btn">Button</button>
                                <div
                                    class="d-flex justify-content-center align-items-center rounded-circle my-heart-bg ms-3">
                                    <i class="fa-solid fa-heart"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="category">
            <div class="container con-setting">
                <div class="row">
                    <div class="col-xl-3 col-md-6 p-3">
                        <div class="card border-0">
                            <img src="./img/imgA.jpg" class="img-fluid rounded" alt="...">
                            <div class="card-body px-0">
                                <h6 class="card-subtitle text-secondary mb-2 my-subtitle">CATEGORY</h6>
                                <h5 class="card-title mb-2">The Catalyzer</h5>
                                <p class="card-text text-muted">$16.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 p-3">
                        <div class="card border-0">
                            <img src="./img/imgB.jpg" class="img-fluid rounded" alt="...">
                            <div class="card-body px-0">
                                <h6 class="card-subtitle text-secondary mb-2 my-subtitle">CATEGORY</h6>
                                <h5 class="card-title mb-2">Shooting Stars</h5>
                                <p class="card-text text-muted">$21.15</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 p-3">
                        <div class="card border-0">
                            <img src="./img/imgC.jpg" class="img-fluid rounded" alt="...">
                            <div class="card-body px-0">
                                <h6 class="card-subtitle text-secondary mb-2 my-subtitle">CATEGORY</h6>
                                <h5 class="card-title mb-2">Neptune</h5>
                                <p class="card-text text-muted">$12.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 p-3">
                        <div class="card border-0">
                            <img src="./img/imgD.jpg" class="img-fluid rounded" alt="...">
                            <div class="card-body px-0">
                                <h6 class="card-subtitle text-secondary mb-2 my-subtitle">CATEGORY</h6>
                                <h5 class="card-title mb-2">The 400 Blows</h5>
                                <p class="card-text text-muted">$18.40</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 p-3">
                        <div class="card border-0">
                            <img src="./img/imgE.jpg" class="img-fluid rounded" alt="...">
                            <div class="card-body px-0">
                                <h6 class="card-subtitle text-secondary mb-2 my-subtitle">CATEGORY</h6>
                                <h5 class="card-title mb-2">The Catalyzer</h5>
                                <p class="card-text text-muted">$16.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 p-3">
                        <div class="card border-0">
                            <img src="./img/imgF.jpg" class="img-fluid rounded" alt="...">
                            <div class="card-body px-0">
                                <h6 class="card-subtitle text-secondary mb-2 my-subtitle">CATEGORY</h6>
                                <h5 class="card-title mb-2">Shooting Stars</h5>
                                <p class="card-text text-muted">$21.15</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 p-3">
                        <div class="card border-0">
                            <img src="./img/imgG.jpg" class="img-fluid rounded" alt="...">
                            <div class="card-body px-0">
                                <h6 class="card-subtitle text-secondary mb-2 my-subtitle">CATEGORY</h6>
                                <h5 class="card-title mb-2">Neptune</h5>
                                <p class="card-text text-muted">$12.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 p-3">
                        <div class="card border-0">
                            <img src="./img/imgA.jpg" class="img-fluid rounded" alt="...">
                            <div class="card-body px-0">
                                <h6 class="card-subtitle text-secondary mb-2 my-subtitle">CATEGORY</h6>
                                <h5 class="card-title mb-2">The 400 Blows</h5>
                                <p class="card-text text-muted">$18.40</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="maps">
            <div class="container-fluid vh-100">
                <iframe class="w-100 mt-5"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59436.64378370579!2d-75.29571514789743!3d39.93091749809461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6c5e645a890ff%3A0x8b2876210329c0d3!2z6LK75Z-O6Jed6KGT5Y2a54mp6aSo!5e0!3m2!1szh-TW!2stw!4v1649661319531!5m2!1szh-TW!2stw"
                        width="600" height="450" 
                        style="border:0;filter:grayscale(.7) opacity(.7) brightness(.7);" 
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="my-input-area">
                <p class="h5">Feedback</p>
                <p class="text-secondary mb-4">Post-ironic portland shabby chic echo park, banjo fashion axe</p>
                <div class="mb-3">
                    <label for="FormInput1" class="form-label small">Email</label>
                    <input type="email" class="form-control" id="FormInput1"
                        placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="FormTextarea1" class="form-label small">Message</label>
                    <textarea class="form-control" id="FormTextarea1" rows="5"></textarea>
                </div>
                <button type="button" class="btn btn-primary my-btn w-100">Button</button>
                <p class="txt-last text-muted mt-2">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.
                </p>
            </div>

        </section>

    </main>
    <footer>
        <section id="sitemap">
            <div class="container-xxl">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-3">
                        <div class="left d-flex align-items-center">
                            <img src="./img/logo 2.png" alt="">
                            <p class="h5 p-lg-2">數位方塊</p>
                        </div>
                        <p class="small text-wrap pt-2" style="width: 13rem">Air plant banjo lyft occupy retro adaptogen indego</p>
                    </div>
                    <div class="col-xl-6 col-md-3 right d-flex flex-wrap">
                        <div class="inner">
                            <ul>
                                <li>CATEGORIES</li>
                                <li>First Link</li>
                                <li>Second Link</li>
                                <li>Third Link</li>
                                <li>Fourth Link</li>
                            </ul>
                        </div>  
                        <div class="inner">
                            <ul>
                                <li>CATEGORIES</li>
                                <li>First Link</li>
                                <li>Second Link</li>
                                <li>Third Link</li>
                                <li>Fourth Link</li>
                            </ul>
                        </div>  
                        <div class="inner">
                            <ul>
                                <li>CATEGORIES</li>
                                <li>First Link</li>
                                <li>Second Link</li>
                                <li>Third Link</li>
                                <li>Fourth Link</li>
                            </ul>
                        </div>  
                        <div class="inner">
                            <ul>
                                <li>CATEGORIES</li>
                                <li>First Link</li>
                                <li>Second Link</li>
                                <li>Third Link</li>
                                <li>Fourth Link</li>
                            </ul>
                        </div>                       
                    </div>
                    
                </div>
            </div>
        </section>
        <section id="copyright" class="bg-light">
            <div class="container my-foot-con py-3 d-flex justify-content-between align-items-center text-secondary">
                <p class="mb-0 small">© 2020 Tailblocks — @knyttneve</p>
                <div>
                    <i class="fa-brands fa-facebook-f m-lg-2"></i>
                    <i class="fa-brands fa-twitter m-lg-2"></i>
                    <i class="fa-brands fa-instagram m-lg-2"></i>
                    <i class="fa-brands fa-linkedin-in m-lg-2"></i>
                </div>
            </div>
        </section>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>

</html>