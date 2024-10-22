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

    <?php
        // Fetch all images where landing_show is set to 1
         $landing_images = mysqli_query($conn, "SELECT * FROM images WHERE landing_show = 1");
    ?>

    <div class="container-fluid-max hero-slider-container">
        <div class="split-slideshow h-100 w-100">
            <div class="slideshow">
                <div class="slider">
                    <?php foreach ($landing_images as $image): ?>
                    <div class="item">
                        <img src="<?php echo $image['url']; ?>" alt="Slide Image" />
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="slideshow-text">
                <?php foreach ($landing_images as $image): ?>
                <div class="item"><?php echo $image['project_name']; ?></div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>


    <div class="container-fluid mt-5 ">
        <div class="row">
            <div class="col-md-6 order-1 order-md-0 pe-md-5" data-animation="slideInRight">
                <!-- <div class="about-left-img">

                </div> -->
                <div class="about-whole-left-img">
                    <div class="about-img about-left-img">
                        <img src="./images/farm-land1.jpeg" alt="Farm Land Image 1">
                    </div>
                    <div class="about-img about-left-img1">
                        <img src="./images/fruit.jpeg" alt="Farm Land Image 2">
                    </div>
                    <div class="about-img about-left-img2">
                        <img src="./images/farm-land2.jpeg" alt="Farm Land Image 3">
                    </div>
                    <div class="about-img about-left-img3">
                        <img src="./images/orange.jpeg" alt="Farm Land Image 4">
                    </div>
                </div>
            </div>

            <div class="col-md-6 order-0 order-md-1 mb-4 sketch-info">
                <div class="sketch-details" data-animation="slideInLeft">
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
        <div class="container-fluid" data-animation="slideInUp">
            <div class="row">
                <div class="col-md-6"></div>

                <div class="col-md-6 sketch-info">
                    <div class="sketch-icon">
                        <div class="icon-msg" data-animation="slideInDown" data-animation-delay="200ms">
                            <div class="sketch-icon-wrapper">
                                <img src="./images/tree.png" alt="" />
                            </div>
                            <h5>Trees</h5>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur
                            </p>
                        </div>

                        <div class="icon-msg" data-animation="slideInDown" data-animation-delay="400ms">
                            <div class="sketch-icon-wrapper">
                                <img src="./images/irrigation.png" alt="" />
                            </div>
                            <h5>Irrigation</h5>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur
                            </p>
                        </div>

                        <div class="icon-msg " data-animation="slideInDown" data-animation-delay="600ms">
                            <div class="sketch-icon-wrapper">
                                <img src="./images/Resort iconnn.png" alt="" />
                            </div>
                            <h5>Resort</h5>
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
                <div class="about-heading" data-animation="slideInRight">
                    <h6 class="comman-sub-heading">[ About Company ]</h6>
                    <h4 class="sketch-heading my-4">
                        We Makes You To Reaches the Best
                    </h4>
                </div>

                <p class="sketch-para" data-animation="slideInRight">
                    Connemara Realty LLP., was founded in the year 2019 by a first-generation entrepreneurs, having its
                    corporate office at Chennai, with a wide experience mainly in the field of Construction, Farm Land
                    Development and Management. The Company is experienced in developing sustainable housing and
                    eco-friendly farmlands.
                    <br>
                    At Connemara, we take a meticulous approach to identifying ideal locations for development. Our team
                    of experts uses a combination of market analysis, demographic research, and site assessment to
                    pinpoint areas with high potential for growth and appreciation.

                </p>

                <div class="award-list" data-animation="slideInRight">
                    <h6 class="award-bold mb-4" data-animation="slideInRight">
                        ADVANTAGES OF INVESTING IN AGRICULTURAL LANDS
                    </h6>
                    <p data-animation="slideInRight" data-animation-delay="200ms">
                        Income earned and profit made from selling the farmland are free
                        from taxation.
                    </p>
                    <br />
                    <p data-animation="slideInRight" data-animation-delay="300ms">Productive investment with high wealth
                        appreciation</p>
                    <br />

                    <p data-animation="slideInRight" data-animation-delay="400ms">Guaranteed and good return on
                        investment.</p>
                    <br />
                    <p data-animation="slideInRight" data-animation-delay="300ms">Resale value is high</p>
                    <br />
                </div>
            </div>

            <div class="col-md-6 sliding-area mouse-parallax moving-area">
                <div class="about-image  moving-img mt-2" data-animation="slideInLeft">
                    <img src="./images/about-company.png" alt="" />
                </div>
            </div>
        </div>
    </div>

    <!------------- count Action------------- -->
    <div class="container-fluid whole-counting my-4">
        <div class="counting" data-animation="slideInRight" data-animation-delay="100ms">
            <h1 class="count" data-target="100">[ 0 + ]</h1>
            <h5>Current Client</h5>
        </div>
        <div class="counting" data-animation="slideInDown" data-animation-delay="200ms">
            <h1 class="count" data-target="5">[ 0 + ]</h1>
            <h5>Year Of Experience</h5>
        </div>
        <div class="counting" data-animation="slideInLeft" data-animation-delay="300ms">
            <h1 class="count" data-target="3">[ 0 + ]</h1>
            <h5>Ongoing Projects</h5>
        </div>

    </div>

    <!-- ------------ Space Section---------------- -->

    <div class="container-fluid-max make-space">
        <div class="space">
            <div class="space-contain" data-animation="slideInDown">
                <img src="./images/Farm-land-img.jpeg" alt="" />
                <h5 class="po-space">Farm Land</h5>
                <h1>01</h1>
                <span class="space-line-verticle"></span>
                <span class="space-line-horizontal"></span>
            </div>

            <div class="space-contain" data-animation="slideInDown" data-animation-delay="200ms">
                <img src="./images/resort.jpeg" alt="" />
                <h5>Resorts</h5>
                <h1>02</h1>
                <span class="space-line-verticle"></span>
                <span class="space-line-horizontal"></span>
            </div>

            <div class="space-contain" data-animation="slideInDown" data-animation-delay="400ms">
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
        <div class="services-heading" data-animation="slideInDown">
            <h5 class="comman-sub-heading">[ What We Can Offer ]</h5>
            <h3 class="sketch-heading">Our Services</h3>
        </div>

        <div class="offer">
            <div class="offer-box" data-animation="slideInDown"  data-animation-delay="200ms">
                <div class="service-icon">
                    <div class="serive-detail">
                        <img src="./images/Farm Land Icon.png" alt="">
                        <h6>Farm Lands</h6>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Asperiores, quam?.
                        </p>
                    </div>
                </div>
            </div>

            <div class="offer-box" data-animation="slideInDown"  data-animation-delay="300ms">
                <div class="service-icon">
                    <div class="serive-detail">
                        <img src="./images/Project management.png" alt="">
                        <h6>Property Management</h6>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Asperiores, quam?.
                        </p>
                    </div>
                </div>
            </div>

            <div class="offer-box" data-animation="slideInDown"  data-animation-delay="400ms">
                <div class="service-icon">
                    <div class="serive-detail">
                        <img src="./images/Commercial iconn.png" alt="">
                        <h6>Commercial Projects</h6>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Asperiores, quam?.
                        </p>
                    </div>
                </div>
            </div>

            <div class="offer-box" data-animation="slideInDown"  data-animation-delay="200ms">
                <div class="service-icon">
                    <div class="serive-detail">
                        <img src="./images/Retail shop.png" alt="">
                        <h6>Retail Stores Star Mart & Cafe</h6>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Asperiores, quam?.
                        </p>
                    </div>
                </div>
            </div>

            <div class="offer-box" data-animation="slideInDown"  data-animation-delay="300ms">
                <div class="service-icon">
                    <div class="serive-detail">
                        <img src="./images/HSB Icon.png" alt="">
                        <h6>HSB Logo and Name</h6>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Asperiores, quam?.
                        </p>
                    </div>
                </div>
            </div>

            <div class="offer-box" data-animation="slideInDown" data-animation-delay="400ms">
                <div class="service-icon">
                    <div class="serive-detail">
                        <img src="./images/Resort.png" alt="">
                        <h6>Resorts</h6>
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
                    <div class="process-heading" data-animation="slideInRight" data-animation-delay="100ms">
                        <h5 class="comman-sub-heading light-blue-text">[ Steps to reach ]</h5>
                        <h2 class="sketch-heading process-head">Our Process</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="process-para" data-animation="slideInLeft" data-animation-delay="200ms">
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
                <div class="procedure" data-animation="slideInRight" data-animation-delay="200ms">
                    <div class="working-circle">
                        <h1>01</h1>
                        <img src="./images/01.png" alt="">
                    </div>
                    <h5>Identifying Strategic</h5>
                    <p></p>
                </div>
                <div class="procedure" data-animation="slideInRight" data-animation-delay="300ms">
                    <div class="working-circle">
                        <h1>02</h1>
                        <img src="./images/Land Work JCB.png" alt="">
                    </div>
                    <h5>Land Development</h5>
                    <p></p>
                </div>
                <div class="procedure" data-animation="slideInLeft" data-animation-delay="400ms">
                    <div class="working-circle">
                        <h1>03</h1>
                        <img src="./images/share.png" alt="">
                    </div>
                    <h5>Creating Value for Money</h5>
                    <p></p>
                </div>
                <div class="procedure" data-animation="slideInLeft" data-animation-delay="500ms">
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

    <!--------------- Gallery -------------------->
    <div class="mt-4 container-fluid-max whole-gallery">
        <div class="first-half-gallery">
            <div class="gallery" data-animation="slideInDown">
                <img src="./images/gallery1.jpeg" alt="" />
                <div class="gallery-box">
                    <h5>Stylish family appartment</h5>
                    <h6>[ Interior ]</h6>
                </div>
            </div>
            <div class="gallery" data-animation="slideInDown">
                <img src="./images/gallery2.jpeg" alt="" />
                <div class="gallery-box">
                    <h5>Stylish family appartment</h5>
                    <h6>[ Interior ]</h6>
                </div>
            </div>
            <div class="gallery" data-animation="slideInDown">
                <img src="./images/gallery3.jpeg" alt="" />
                <div class="gallery-box">
                    <h5>Stylish family appartment</h5>
                    <h6>[ Interior ]</h6>
                </div>
            </div>
        </div>

        <div class="secound-half-gallery">
            <div class="gallery" data-animation="slideInDown">
                <img src="./images/gallery4.jpeg" alt="" />
                <div class="gallery-box">
                    <h5>Stylish family appartment</h5>
                    <h6>[ Interior ]</h6>
                </div>
            </div>
            <div class="gallery" data-animation="slideInDown">
                <img src="./images/gallery5.jpeg" alt="" />
                <div class="gallery-box">
                    <h5>Stylish family appartment</h5>
                    <h6>[ Interior ]</h6>
                </div>
            </div>
            <div class="gallery" data-animation="slideInDown">
                <img src="./images/gallery6.jpeg" alt="" />
                <div class="gallery-box">
                    <h5>Stylish family appartment</h5>
                    <h6>[ Interior ]</h6>
                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->

    <div class="container-fluid-max consulting py-5">
        <div class="container-fluid">
            <div class="consulting-left">
                <div class="counsel-heading" data-animation="slideInRight">
                    <h3>Get Incredible Interior</h3>
                </div>
                <h3 class="right-now" data-animation="slideInRight" data-animation-delay="200ms">Right Now!</h3>
                <div class="consulting-btn consulting-para" data-animation="slideInLeft" data-animation-delay="200ms">
                    <p>
                        At every stage, we could supervise your project – controlling
                        all the details and consulting the builders
                    </p>
                </div>
                <button data-animation="slideInLeft" class="custom-button">GET IN TOUCH</button>
            </div>
        </div>
    </div>

    <!------------ Project Section ------------->
    <div class="container-fluid mt-5">
        <div class="project-heading partner-title" data-animation="slideInDown">
            <h5 class="comman-sub-heading">[ Our Portfolio ]</h5>
            <h3 class="sketch-heading">Introduce Our Project</h3>
        </div>

        <div class="row mt-5">
            <div class="col">
                <div class="whole-project ">
                    <div class="project">
                        <ul class="slider" data-animation="slideInDown">
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
            <div class="col-md-6" data-animation="slideInRight">
                <div class="process-heading">
                    <h5 class="comman-sub-heading">[ What People Says ]</h5>
                    <h2 class="sketch-heading">Testimonial</h2>
                </div>
                <div class="" id="ReviewSubmitMessage"></div>
            </div>
            <div class="col-md-6" data-animation="slideInLeft">
                <div class="d-md-flex flex-md-row-reverse">
                    <button class="custom-button" type="button" data-bs-toggle="modal" data-bs-target="#myModal">Add My
                        Review</button>
                    <div class="line contacts-line"></div>
                </div>
            </div>
        </div>

        <div class="swiper-container" data-animation="slideInDown">
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
        <div class="container-fluid mt-5">
            <div class="professional-heading my-5 partner-title " data-animation="slideInDown">
                <h5 class="comman-sub-heading">[ Our Professional ]</h5>
                <h3 class="sketch-heading">meet our skilled team</h3>
            </div>

            <div class="scroll-container-partner" data-animation="slideInDown">
                <div class="scroll-inner-partner">
                    <div class="partner-detail-partner">
                        <div class="skill-team-partner">

                            <div class="skill-box">
                                <img src="./images/man.png" alt="">
                                <div class="skill-box-detail">
                                    <h5>Mr. Goutham Chandra</h5>
                                    <p>Chief Executive Officer</p>
                                </div>

                            </div>
                        </div>
                        <div class="skill-team-partner">

                            <div class="skill-box">
                                <img src="./images/man.png" alt="">
                                <div class="skill-box-detail">
                                    <h5>Mr. Siva Chandran</h5>
                                    <p>Project & Marketing Head</p>
                                </div>

                            </div>
                        </div>
                        <div class="skill-team-partner">

                            <div class="skill-box">
                                <img src="./images/man.png" alt="">
                                <div class="skill-box-detail">
                                    <h5>Mr. Gopala Krishnan</h5>
                                    <p>Farming Manager</p>
                                </div>

                            </div>
                        </div>

                        <div class="skill-team-partner">

                            <div class="skill-box">
                                <img src="./images/man.png" alt="">
                                <div class="skill-box-detail">
                                    <h5>Mr. Ravi Teja</h5>
                                    <p>Purchase Manager</p>
                                </div>

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
    $.get('./admin_php/fetch_userReview.php', function(data) {
        var reviews = JSON.parse(data); // Assuming your data is in JSON format

        var reviewsWrapper = $('#reviewsWrapper');

        reviews.forEach(function(review) {
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

    $("#reviewForm").on('submit', function(e) {
        e.preventDefault();
        if ($("#reviewForm").valid()) { // Check if the form is valid
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    $("#ReviewSubmitMessage").html('<div class="alert alert-success my-4">' + data +
                        '</div>'); // Display success message
                    $("#reviewForm")[0].reset(); // Clear the form fields
                    $('.modal-footer button').click();
                    $("#myModal").modal('hide'); // Close the modal
                },
                error: function() {
                    $("#ReviewSubmitMessage").html(
                        '<div class="alert alert-danger">An error occurred.</div>'
                    ); // Display error message
                }
            });
        }
    });

    $.validator.addMethod('filesize', function(value, element, param) {
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
                renderBullet: function(index, className) {
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
    $(document).ready(function() {
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
        .on("beforeChange", function(event, slick, currentSlide, nextSlide) {
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
    document.addEventListener("DOMContentLoaded", function() {
        const menuToggle = document.querySelector(".menu-toggle");
        const smallNav = document.querySelector(".small-nav");

        menuToggle.addEventListener("click", function() {
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

    document.addEventListener("DOMContentLoaded", function() {
        const mouseParallaxElements = document.querySelectorAll(".mouse-parallax");

        mouseParallaxElements.forEach(mouseParallaxElement => {
            mouseParallaxElement.addEventListener("mousemove", function(e) {
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

            mouseParallaxElement.addEventListener("mouseleave", function() {
                const img = mouseParallaxElement.querySelector("img");
                img.style.transform = `translate(0px, 0px) scale(1)`;
            });
        });
    });
    </script>

    <script src="./js/animation.js"></script>
</body>

</html>