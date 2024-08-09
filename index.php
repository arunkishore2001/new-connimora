<?php
include './admin_php/config.php';
include './admin_php/functions.php';

session_start();

$result = mysqli_query($conn, "SELECT * FROM images");
$allImages = mysqli_fetch_all($result, MYSQLI_ASSOC);

$projectQuery = mysqli_query($conn, "SELECT DISTINCT project_name FROM images LIMIT 6");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styles.css" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/animation.css" />
    <link rel="stylesheet" href="./css/navBar.css" />

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <link rel="stylesheet" href="./css/heroSlider.css" />

    <script src="https://kit.fontawesome.com/22cd64f621.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script src="./aos.js"></script>
    <link rel="stylesheet" href="./css/aos.css">
</head>

<body>
    <!-- Nav bar -->
    <?php include 'navBar.php'; ?>

    <div class="inside">
        <div class="float">
            <a href="./contact.html">
                <div class="trigger">
                    <i class="fa fa-send" aria-hidden="true"></i>
                </div>
            </a>
        </div>
    </div>


    <div class="container-fluid-max hero-slider-container">
        <div class="split-slideshow h-100 w-100">
            <div class="slideshow">
                <div class="slider">
                    <div class="item">
                        <img src="https://raw.githubusercontent.com/supahfunk/supah-codepen/master/canyon-2.jpg" />
                    </div>
                    <div class="item">
                        <img src="https://raw.githubusercontent.com/supahfunk/supah-codepen/master/canyon-3.jpg" />
                    </div>
                    <div class="item">
                        <img src="https://raw.githubusercontent.com/supahfunk/supah-codepen/master/canyon-4.jpg" />
                    </div>
                    <div class="item">
                        <img src="https://raw.githubusercontent.com/supahfunk/supah-codepen/master/canyon-1.jpg" />
                    </div>
                </div>
            </div>
            <div class="slideshow-text">
                <div class="item">Canyon</div>
                <div class="item">Desert</div>
                <div class="item">Erosion</div>
                <div class="item">Shape</div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-6 order-1 order-md-0">
                <div class="about-left-img"></div>
            </div>

            <div class="col-md-6 order-0 order-md-1 sketch-info">
                <div class="sketch-details">
                    <div>
                        <h6 class="comman-sub-heading">[ About Us ]</h6>
                    </div>
                    <div>
                        <h3 class="sketch-heading">Why Own A Managed Farmland</h3>
                    </div>
                    <div>
                        <p class="sketch-para">
                            Palar Farms managed farmland allows you to sit back and relax
                            and watch your investment grow without the hassles of managing
                            it yourself. Compared to other forms of real estate
                            investments, managed farmlands are stress-free investment
                            options. In real estate, your land value may appreciate over
                            time but the plot will remain just land and nothing more.
                            However, with farmland, you benefit not just by the
                            appreciating value of the land but also by the returns from
                            the farmland produce and also a family getaway spot to enjoy
                            with your family every year.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid-max py-3 sketch-image-background-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6"></div>

                <div class="col-md-6 sketch-info">
                    <div class="sketch-icon">
                        <div class="icon-msg">
                            <img src="./images/tree.png" alt="" />
                            <h5>Trees</h5>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur
                            </p>
                        </div>

                        <div class="icon-msg">
                            <img src="./images/tree.png" alt="" />
                            <h5>Irrigation</h5>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur
                            </p>
                        </div>

                        <div class="icon-msg">
                            <img src="./images/tree.png" alt="" />
                            <h5>Leisure</h5>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ----------------About-Section ----------------->

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-6 left-about">
                <div class="about-heading">
                    <h6 class="comman-sub-heading">[ About Company ]</h6>
                    <h4 class="sketch-heading my-4">
                        We Makes You To Reaches the Best
                    </h4>
                </div>

                <p class="sketch-para">
                    Connemara Realty LLP., was founded in the year 2019 by a first-generation entrepreneurs, having its
                    corporate office at Chennai, with a wide experience mainly in the field of Construction, Farm Land
                    Development and Management. The Company is experienced in developing sustainable housing and
                    eco-friendly farmlands.
                    <br>
                    At Connemara, we take a meticulous approach to identifying ideal locations for development. Our team
                    of experts uses a combination of market analysis, demographic research, and site assessment to
                    pinpoint areas with high potential for growth and appreciation.

                </p>

                <div class="award-list">
                    <h6 class="award-bold mb-4">
                        ADVANTAGES OF INVESTING IN AGRICULTURAL LANDS
                    </h6>
                    <p>
                        Income earned and profit made from selling the farmland are free
                        from taxation.
                    </p>
                    <br />
                    <p>Productive investment with high wealth appreciation</p>
                    <br />

                    <p>Guaranteed and good return on investment.</p>
                    <br />
                    <p>Resale value is high</p>
                    <br />
                </div>
            </div>

            <div class="col-md-6 sliding-area mouse-parallax moving-area">
                <div class="about-image  moving-img mt-2">
                    <img src="./images/about-company.png" alt="" />
                </div>
            </div>
        </div>
    </div>

    <!------------- count Action------------- -->
    <div class="container-fluid whole-counting my-4">
        <div class="counting">
            <h1 class="count" data-target="100">[ 0 + ]</h1>
            <h5>Current Client</h5>
        </div>
        <div class="counting">
            <h1 class="count" data-target="5">[ 0 + ]</h1>
            <h5>Year Of Experience</h5>
        </div>
        <div class="counting">
            <h1 class="count" data-target="3">[ 0 + ]</h1>
            <h5>Ongoing Projects</h5>
        </div>

    </div>

    <!-- ------------ Space Section---------------- -->

    <div class="container-fluid-max make-space">
        <div class="space">
            <div class="space-contain" data-animation="slideInUp">
                <img src="./images/Farm-land-img.jpeg" alt="" />
                <h5 class="po-space">Farm Land</h5>
                <h1>01</h1>
                <span class="space-line-verticle"></span>
                <span class="space-line-horizontal"></span>
            </div>

            <div class="space-contain" data-animation="slideInUp" data-animation-delay="200ms">
                <img src="./images/resort.jpeg" alt="" />
                <h5>Resort Image</h5>
                <h1>02</h1>
                <span class="space-line-verticle"></span>
                <span class="space-line-horizontal"></span>
            </div>

            <div class="space-contain" data-animation="slideInUp" data-animation-delay="400ms">
                <img src="./images/commercial.jpeg" alt="" />
                <h5 class="po-space">Commercial Office Interior</h5>
                <h1>03</h1>
                <span class="space-line-verticle"></span>
                <span class="space-line-horizontal"></span>
            </div>
        </div>
    </div>

    <!-------------- Service Section ----------------------->

    <div class="container-fluid service-contain mt-5">
        <div class="services-heading">
            <h5 class="comman-sub-heading">[ What We Can Offer ]</h5>
            <h3 class="sketch-heading">Our Services</h3>
        </div>

        <div class="offer">
            <div class="offer-box">
                <div class="service-icon">
                    <div class="serive-detail">
                        <img src="./images/Farm Land Icon.png" alt="">
                        <h6>Designing & Planning</h6>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Asperiores, quam?.
                        </p>
                    </div>
                </div>
            </div>

            <div class="offer-box">
                <div class="service-icon">
                    <div class="serive-detail">
                        <img src="./images/Project management.png" alt="">
                        <h6>Designing & Planning</h6>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Asperiores, quam?.
                        </p>
                    </div>
                </div>
            </div>

            <div class="offer-box">
                <div class="service-icon">
                    <div class="serive-detail">
                        <img src="./images/Commercial iconn.png" alt="">
                        <h6>Designing & Planning</h6>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Asperiores, quam?.
                        </p>
                    </div>
                </div>
            </div>

            <div class="offer-box">
                <div class="service-icon">
                    <div class="serive-detail">
                        <img src="./images/Retail shop.png" alt="">
                        <h6>Designing & Planning</h6>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Asperiores, quam?.
                        </p>
                    </div>
                </div>
            </div>

            <div class="offer-box">
                <div class="service-icon">
                    <div class="serive-detail">
                        <img src="./images/HSB Icon.png" alt="">
                        <h6>Designing & Planning</h6>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Asperiores, quam?.
                        </p>
                    </div>
                </div>
            </div>

            <div class="offer-box">
                <div class="service-icon">
                    <div class="serive-detail">
                        <img src="./images/Resort.png" alt="">
                        <h6>Designing & Planning</h6>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Asperiores, quam?.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Working Process -->

    <div class="container-fluid-max process pt-5 pb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="process-heading">
                        <h5 class="comman-sub-heading">[ Steps to reach ]</h5>
                        <h2 class="sketch-heading process-head">Our Process</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="process-para">
                        <p>
                            Original design project of high quality raises profit – this
                            is proved in practice by many of our customers. A professional
                            approach will avoid many common mistakes, minimize the cost of
                            decoration materials and choose the best way to imp
                        </p>
                    </div>
                </div>
            </div>

            <div class="whole-process mt-5">
                <div class="procedure">
                    <div class="working-circle">
                        <h1>01</h1>
                        <img src="./images/Root Map Icon.png" alt="">
                    </div>
                    <h5>Identifying Strategic</h5>
                    <p></p>
                </div>
                <div class="procedure">
                    <div class="working-circle">
                        <h1>02</h1>
                        <img src="./images/Land Work JCB Icon.png" alt="">
                    </div>
                    <h5>Land Development</h5>
                    <p></p>
                </div>
                <div class="procedure">
                    <div class="working-circle">
                        <h1>03</h1>
                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="40" viewBox="0 0 56 40" fill="none">
                            <path
                                d="M1.58604 27.629C2.45307 27.6084 3.07374 27.0644 3.09806 26.3398C3.37086 17.5767 8.922 11.0904 17.3481 8.55237L23.1213 21.4443C23.171 21.5449 23.1466 21.6257 23.0229 21.6661C22.9235 21.7065 22.8495 21.6661 22.7745 21.6059L19.8509 19.0275C17.9423 17.355 15.5136 17.2347 13.6304 18.5239C11.4988 19.9936 11.4734 22.1895 13.5564 24.2651L21.8577 32.4231C28.1279 38.5872 35.4871 40.5004 43.7155 38.0629C53.5542 35.1622 57.7424 27.8301 53.7762 18.9665L51.9184 14.8376C49.9856 10.4664 46.2933 8.67355 41.956 9.90259C40.7908 8.67355 39.006 8.2507 37.0742 8.8145C36.3797 9.03087 35.7284 9.32947 35.1413 9.70061C33.8767 8.37102 31.9196 7.88714 29.8863 8.47158C29.3316 8.64373 28.8069 8.87401 28.3256 9.15657L25.5003 2.87217C24.4356 0.474266 21.7583 -0.532167 19.0081 0.273151C16.2326 1.0991 14.9934 3.25549 16.0581 5.65168L16.2569 6.09516C6.66665 9.01562 0 16.5291 0 26.2994C0 27.024 0.743323 27.6488 1.58604 27.629ZM42.6496 35.4244C36.1575 37.3582 30.0607 36.3706 24.3362 30.7506L16.0338 22.633C15.1424 21.7873 15.1424 20.9613 15.9355 20.3966C16.6788 19.8535 17.6949 20.0348 18.5122 20.7189L24.2368 25.5337C25.2032 26.3398 26.0459 26.4198 26.8643 26.1783C27.8307 25.8964 28.2516 25.0506 27.8551 24.1843L19.0822 4.56445C18.711 3.75828 19.1562 2.99335 20.0983 2.71059C21.0647 2.42869 21.9571 2.81201 22.3293 3.61733L28.5994 17.618C28.8955 18.2824 29.8133 18.584 30.6306 18.3425C31.4237 18.101 31.8445 17.3954 31.5474 16.7508L29.292 11.6954C29.6399 11.4333 30.1104 11.1712 30.582 11.0302C31.7451 10.6881 32.7126 11.111 33.1588 12.0977L35.1413 16.5093C35.4374 17.1943 36.3552 17.4564 37.1482 17.214C37.9169 16.9923 38.4117 16.3288 38.0892 15.6232L36.4789 12.0573C36.8456 11.7589 37.2845 11.5256 37.7678 11.3723C38.933 11.0302 39.8994 11.4531 40.3457 12.4406L41.6589 15.3817C41.9803 16.0864 42.8981 16.3486 43.6911 16.1062C43.882 16.0526 44.0578 15.9688 44.2086 15.8596C44.3593 15.7504 44.482 15.6181 44.5695 15.4702C44.657 15.3223 44.7076 15.1617 44.7183 14.9978C44.7291 14.834 44.6998 14.67 44.6322 14.5153L43.6414 12.3392C45.7223 11.735 47.6805 13.1049 49.0181 16.1268L50.5798 19.5716C53.975 27.1855 50.8769 32.9869 42.6496 35.4244Z"
                                fill="#1D84C5" />
                        </svg>
                    </div>
                    <h5>Creating Value for Money</h5>
                    <p></p>
                </div>
                <div class="procedure">
                    <div class="working-circle">
                        <h1>04</h1>
                        <img src="./images/Happy face icon.png" alt="">
                    </div>
                    <h5>Building Happy Customer</h5>
                    <p></p>
                </div>
            </div>
        </div>
    </div>

    <!--------------------- Partner --------------------------------------->

    <!-- <div class="container-fluid mt-4 mb-5 py-5">
        <div class="partner-title">
            <h5 class="comman-sub-heading">[ Our Partner ]</h5>
            <h3 class="sketch-heading mt-4 mb-5">Our Trusted Partner</h3>
        </div>

        <div class="scroll-container">
            <div class="scroll-inner">
                <div class="partner-detail">
                    <img loading="lazy" src="./images/partnership.png" />
                    <img loading="lazy" src="./images/partnership.png" />
                    <img loading="lazy" src="./images/partnership.png" />
                    <img loading="lazy" src="./images/partnership.png" />
                    <img loading="lazy" src="./images/partnership.png" />
                    <img loading="lazy" src="./images/partnership.png" />
                    <img loading="lazy" src="./images/partnership.png" />
                    <img loading="lazy" src="./images/partnership.png" />
                </div>
                <div class="partner-detail">
                    <img loading="lazy" src="./images/partnership.png" />
                    <img loading="lazy" src="./images/partnership.png" />
                    <img loading="lazy" src="./images/partnership.png" />
                    <img loading="lazy" src="./images/partnership.png" />
                    <img loading="lazy" src="./images/partnership.png" />
                    <img loading="lazy" src="./images/partnership.png" />
                    <img loading="lazy" src="./images/partnership.png" />
                    <img loading="lazy" src="./images/partnership.png" />
                </div>
            </div>
        </div>
    </div> -->

    <!--------------- Gallery -------------------->
    <div class="mt-4 container-fluid-max whole-gallery">
        <div class="first-half-gallery">
            <div class="gallery">
                <img src="./images/gallery1.jpeg" alt="" />
                <div class="gallery-box">
                    <h5>Stylish family appartment</h5>
                    <h6>[ Interior ]</h6>
                </div>
            </div>
            <div class="gallery">
                <img src="./images/gallery2.jpeg" alt="" />
                <div class="gallery-box">
                    <h5>Stylish family appartment</h5>
                    <h6>[ Interior ]</h6>
                </div>
            </div>
            <div class="gallery">
                <img src="./images/gallery3.jpeg" alt="" />
                <div class="gallery-box">
                    <h5>Stylish family appartment</h5>
                    <h6>[ Interior ]</h6>
                </div>
            </div>
        </div>

        <div class="secound-half-gallery">
            <div class="gallery">
                <img src="./images/gallery4.jpeg" alt="" />
                <div class="gallery-box">
                    <h5>Stylish family appartment</h5>
                    <h6>[ Interior ]</h6>
                </div>
            </div>
            <div class="gallery">
                <img src="./images/gallery5.jpeg" alt="" />
                <div class="gallery-box">
                    <h5>Stylish family appartment</h5>
                    <h6>[ Interior ]</h6>
                </div>
            </div>
            <div class="gallery">
                <img src="./images/gallery6.jpeg" alt="" />
                <div class="gallery-box">
                    <h5>Stylish family appartment</h5>
                    <h6>[ Interior ]</h6>
                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->

    <div class="container-fluid-max consulting py-5" data-animation="slideInUp">
        <div class="container-fluid">
            <div class="consulting-left">
                <div class="counsel-heading" data-animation="slideInUp">
                    <h3>Get Incredible Interior</h3>
                </div>
                <h3 class="right-now">Right Now!</h3>
                <div class="consulting-btn consulting-para">
                    <p>
                        At every stage, we could supervise your project – controlling
                        all the details and consulting the builders
                    </p>
                </div>
                <button class="custom-button">GET IN TOUCH</button>
            </div>
        </div>
    </div>

    <!------------ Project Section ------------->
    <div class="container-fluid mt-5">
        <div class="project-heading partner-title">
            <h5 class="comman-sub-heading">[ Our Portfolio ]</h5>
            <h3 class="sketch-heading">Introduce Our Project</h3>
        </div>

        <div class="row mt-5">
            <div class="col">
                <div class="whole-project">
                    <div class="project">
                        <ul class="slider">
                            <?php
                            while ($projectResult = mysqli_fetch_assoc($projectQuery)) {
                                $projectName = $projectResult['project_name'];
                                $imageQuery = mysqli_query($conn, "SELECT * FROM images WHERE project_name = '$projectName' ORDER BY id LIMIT 1");
                                $imageResult = mysqli_fetch_assoc($imageQuery);
                                if ($imageResult) {
                                    $imageUrl = $imageResult['url'];
                                    $imageAddress = $imageResult['address'];
                                    ?>
                            <li>
                                <a href="">
                                    <figure class="slider-hover">
                                        <img src="<?php echo $imageUrl; ?>"
                                            alt="Volcano and lava field against a stormy sky" />
                                        <figcaption>
                                            <div class="project-box">
                                                <h5>
                                                    <?php echo $projectName; ?>
                                                </h5>
                                                <h6>[
                                                    <?php echo $imageAddress ?> ]
                                                </h6>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <?php }
                            } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal for testimonial -->

    <div class="modal p-3" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title text-dark">Add My Review</h4>
                    <div type="button" class="close" data-bs-dismiss="modal">X</div>
                </div>

                <div class="modal-body p-3">
                    <form id="reviewForm" action="./admin_php/submit_review.php" method="post"
                        enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="mb-1" for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group mt-3">
                            <label class="mb-1" for="designation">Designation:</label>
                            <input type="text" class="form-control" id="designation" name="designation">
                        </div>
                        <div class="form-group mt-3">
                            <label class="mb-1" for="photo">Upload Profile Photo: (Optional)</label>
                            <input type="file" class="form-control-file border" id="photo" name="photo">
                        </div>
                        <div class="form-group mt-3">
                            <label class="mb-1" for="review">Write a Review:</label>
                            <textarea class="form-control" id="review" name="review"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <!---------------- Testimonial --------------->

    <div class="container-fluid testimonial-main-container mt-5 pt-4">
        <div class="row">
            <div class="col-md-6">
                <div class="process-heading">
                    <h5 class="comman-sub-heading">[ What People Says ]</h5>
                    <h2 class="sketch-heading">Testimonial</h2>
                </div>
                <div class="" id="ReviewSubmitMessage"></div>
            </div>
            <div class="col-md-6">
                <div class="d-md-flex flex-md-row-reverse">
                    <button class="custom-button" type="button" data-bs-toggle="modal" data-bs-target="#myModal">Add My
                        Review</button>
                    <div class="line contacts-line"></div>
                </div>
            </div>
        </div>

        <div class="swiper-container">
            <div class="swiper-wrapper mt-5 mb-2" id="reviewsWrapper">
                <!-- generated from javascript -->
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- professional -->

    <div class="container-fluid-max">
        <div class="professional-svg">
            <svg width="241" height="698" viewBox="0 0 241 698" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.1">
                    <path d="M241 2L40.1667 185.619V531.817L241 696.31V2Z" fill="url(#paint0_linear_123_3)"
                        stroke="black" />
                    <path d="M74.5952 277.429V420.881L0 453.397V239.175L74.5952 277.429Z" fill="#9499A3" />
                    <path d="M149.19 239.175L74.5952 277.429V420.881L149.19 453.397V239.175Z" fill="#D9D9D9" />
                </g>
                <defs>
                    <linearGradient id="paint0_linear_123_3" x1="140.583" y1="2" x2="140.583" y2="696.31"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#1C537D" />
                        <stop offset="1" stop-color="#4BAEEF" />
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <div class="container-fluid mt-5 pt-3">
            <div class="professional-heading my-5 partner-title">
                <h5 class="comman-sub-heading">[ Our Professional ]</h5>
                <h3 class="sketch-heading">meet our skilled team</h3>
            </div>

            <div class="scroll-container-partner">
                <div class="scroll-inner-partner">
                    <div class="partner-detail-partner">
                        <div class="skill-team-partner">
                            <img src="./images/pro1.png" alt="oleve steve" />
                            <div class="skill-box">
                                <h5>Mr. Goutham Chandra</h5>
                                <p>Chief Executive Officer</p>
                            </div>
                        </div>
                        <div class="skill-team-partner">
                            <img src="./images/pro1.png" alt="oleve steve" />
                            <div class="skill-box">
                                <h5>Mr. Siva Chandran</h5>
                                <p>Project & Marketing Head</p>
                            </div>
                        </div>
                        <div class="skill-team-partner">
                            <img src="./images/pro1.png" alt="oleve steve" />
                            <div class="skill-box">
                                <h5>Mr. Gopala Krishnan</h5>
                                <p>Farming Manager</p>
                            </div>
                        </div>

                        <div class="skill-team-partner">
                            <img src="./images/pro1.png" alt="oleve steve" />
                            <div class="skill-box">
                                <h5>Mr. Ravi Teja</h5>
                                <p>Purchase Manager</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    </div>

    <script>
        // Assuming you have a PHP script to fetch reviews, replace 'fetch_reviews.php' with your actual script
        $.get('./admin_php/fetch_userReview.php', function (data) {
            var reviews = JSON.parse(data); // Assuming your data is in JSON format

            var reviewsWrapper = $('#reviewsWrapper');

            reviews.forEach(function (review) {
                var totalReviews = `
                  <div class="swiper-slide">
                    <div class="testimonial">
                        <div class="testimonial-box">
                            <div class="test-img">
                                <img src="./images/camaa.png" alt="" />
                            </div>
                            <p>${review.review}</p>
                        </div>
                        <div class="test-details">
                            ${review.photo ? ` <img src="${review.photo}" alt="" />` : ``}
                            <div class="test-proof">
                                <h6>${review.name}</h6>
                                <p>${review.designation}</p>
                            </div>
                        </div>
                    </div>
                </div>
          `
                reviewsWrapper.append(totalReviews);
            });
            reloadReviews();
        });

        $("#reviewForm").on('submit', function (e) {
            e.preventDefault();
            if ($("#reviewForm").valid()) { // Check if the form is valid
                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        $("#ReviewSubmitMessage").html('<div class="alert alert-success my-4">' + data +
                            '</div>'); // Display success message
                        $("#reviewForm")[0].reset(); // Clear the form fields
                        $('.modal-footer button').click();
                        $("#myModal").modal('hide'); // Close the modal
                    },
                    error: function () {
                        $("#ReviewSubmitMessage").html(
                            '<div class="alert alert-danger">An error occurred.</div>'
                        ); // Display error message
                    }
                });
            }
        });

        $.validator.addMethod('filesize', function (value, element, param) {
            return this.optional(element) || (element.files[0].size <= param * 1024)
        }, 'File size must be less than {0}KB');


        $("#reviewForm").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 4
                },
                designation: {
                    required: true,
                    minlength: 3,
                },
                photo: {
                    extension: "jpg|jpeg|png|gif",
                    filesize: 200
                },
                title: {
                    required: true,
                    minlength: 5
                },
                review: {
                    required: true,
                    minlength: 10
                }
            },
            messages: {
                name: {
                    required: "Please enter your name",
                    minlength: "Your name must consist of at least 4 characters"
                },
                designation: {
                    required: "Please enter your designation",
                    minlength: "Your designation must consist of at least 3 characters"
                },
                photo: {
                    extension: "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed",
                    filesize: "File size must be less than 200KB"
                },
                title: {
                    required: "Please enter your review title",
                    minlength: "Review title must consist of at least 5 characters"
                },
                review: {
                    required: "Please write a review",
                    minlength: "Your review must consist of at least 10 characters"
                }
            },
        });
    </script>
    <!--  testimonial slider -->
    <script>
        function reloadReviews() {
            const swiper = new Swiper(".swiper-container", {
                loop: true,
                slidesPerView: 3,
                spaceBetween: 30,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                    renderBullet: function (index, className) {
                        return '<span class="' + className + '"></span>';
                    },
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    550: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    900: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                    1200: {
                        slidesPerView: 3,
                        spaceBetween: 50,
                    },
                },
            });
        };
    </script>

    <script>
        $(document).ready(function () {
            const $scrollInner = $(".scroll-inner-partner");
            const $partnerDetail = $(".partner-detail-partner");
            const clonedContent = $partnerDetail.clone();
            $scrollInner.append(clonedContent);
        });
    </script>

    <script>
        var $slider = $(".slideshow .slider"),
            maxItems = $(".item", $slider).length,
            dragging = false,
            tracking,
            rightTracking;

        $sliderRight = $(".slideshow")
            .clone()
            .addClass("slideshow-right")
            .appendTo($(".split-slideshow"));

        rightItems = $(".item", $sliderRight).toArray();
        reverseItems = rightItems.reverse();
        $(".slider", $sliderRight).html("");
        for (i = 0; i < maxItems; i++) {
            $(reverseItems[i]).appendTo($(".slider", $sliderRight));
        }

        $slider
            .addClass("slideshow-left")
            .slick({
                vertical: true,
                swipe: false,
                verticalSwiping: false,
                arrows: false,
                infinite: true,
                dots: true,
                speed: 1000,
                cssEase: "cubic-bezier(0.7, 0, 0.3, 1)",
            })
            .on("beforeChange", function (event, slick, currentSlide, nextSlide) {
                if (
                    currentSlide > nextSlide &&
                    nextSlide == 0 &&
                    currentSlide == maxItems - 1
                ) {
                    $(".slideshow-right .slider").slick("slickGoTo", -1);
                    $(".slideshow-text").slick("slickGoTo", maxItems);
                } else if (
                    currentSlide < nextSlide &&
                    currentSlide == 0 &&
                    nextSlide == maxItems - 1
                ) {
                    $(".slideshow-right .slider").slick("slickGoTo", maxItems);
                    $(".slideshow-text").slick("slickGoTo", -1);
                } else {
                    $(".slideshow-right .slider").slick(
                        "slickGoTo",
                        maxItems - 1 - nextSlide
                    );
                    $(".slideshow-text").slick("slickGoTo", nextSlide);
                }
            });

        $(".slideshow-right .slider").slick({
            swipe: false,
            vertical: true,
            arrows: false,
            infinite: true,
            speed: 950,
            cssEase: "cubic-bezier(0.7, 0, 0.3, 1)",
            initialSlide: maxItems - 1,
        });

        $(".slideshow-text").slick({
            swipe: false,
            vertical: true,
            arrows: false,
            infinite: true,
            speed: 900,
            cssEase: "cubic-bezier(0.7, 0, 0.3, 1)",
        });

        setInterval(() => {
            $slider.slick("slickNext");
        }, 4000);
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const menuToggle = document.querySelector(".menu-toggle");
            const smallNav = document.querySelector(".small-nav");

            menuToggle.addEventListener("click", function () {
                smallNav.classList.toggle("show");
            });
        });

        document.addEventListener("DOMContentLoaded", () => {
            const counters = document.querySelectorAll(".count");

            counters.forEach((counter) => {
                const updateCount = () => {
                    const target = +counter.getAttribute("data-target");
                    const count = +counter.innerText.replace(/[^\d]/g, "");
                    const increment = target / 1000; // Adjust this value for speed
                    const delay = 20; // Adjust this value for speed

                    if (count < target) {
                        counter.innerText = `[ ${Math.ceil(count + increment)} + ]`;
                        setTimeout(updateCount, delay);
                    } else {
                        counter.innerText = `[ ${target} + ]`;
                    }
                };

                updateCount();
            });
        });

        var copy = document.querySelector(".skilled").cloneNode(true);
        document.querySelector(".skill-slide").appendChild(copy);

        // Swapiing Image

        const firstImage = document.getElementById("firstImage");
        const secondImage = document.getElementById("secondImage");

        const originalSrcFirstImage = firstImage.src;
        const originalSrcSecondImage = secondImage.src;

        let isSwapped = false;

        function swapImages() {
            if (isSwapped) {
                firstImage.src = originalSrcFirstImage;
                secondImage.src = originalSrcSecondImage;
                firstImage.style.opacity = "1";
                secondImage.style.opacity = "1";
            } else {
                firstImage.src = originalSrcSecondImage;
                secondImage.src = originalSrcFirstImage;
                firstImage.style.opacity = "1";
                secondImage.style.opacity = "1";
            }
            isSwapped = !isSwapped;
        }

        setInterval(swapImages, 2000);

        // Mouse Interaction

        document.addEventListener("DOMContentLoaded", function () {
            const mouseParallaxElements = document.querySelectorAll(".mouse-parallax");

            mouseParallaxElements.forEach(mouseParallaxElement => {
                mouseParallaxElement.addEventListener("mousemove", function (e) {
                    const servicePageInfo = mouseParallaxElement.querySelector(".moving-img");
                    const img = servicePageInfo.querySelector("img");

                    const rect = servicePageInfo.getBoundingClientRect();
                    const x = e.clientX - rect.left; // Mouse X relative to the element
                    const y = e.clientY - rect.top; // Mouse Y relative to the element

                    const centerX = rect.width / 2; // Center X of the element
                    const centerY = rect.height / 2; // Center Y of the element

                    const moveX = (x - centerX) / centerX * 20; // Adjust movement intensity
                    const moveY = (y - centerY) / centerY * 20; // Adjust movement intensity

                    const scale = 1.1; // Scale for zoom effect

                    // Apply translation and scaling
                    img.style.transform = `translate(${moveX}px, ${moveY}px) scale(${scale})`;
                });

                mouseParallaxElement.addEventListener("mouseleave", function () {
                    const img = mouseParallaxElement.querySelector("img");
                    img.style.transform = `translate(0px, 0px) scale(1)`;
                });
            });
        });
    </script>

    <script src="./js/animation.js"></script>
</body>

</html>