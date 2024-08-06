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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
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
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe ab
                    eveniet nesciunt numquam at, suscipit asperiores iusto inventore
                    quia, dolor voluptate enim repellat ratione repellendus odit
                    blanditiis? Culpa, mollitia eum?
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
            <h1 class="count" data-target="180">[ 0 + ]</h1>
            <h5>Current Client</h5>
        </div>
        <div class="counting">
            <h1 class="count" data-target="10">[ 0 + ]</h1>
            <h5>Year Of Experience</h5>
        </div>
        <div class="counting">
            <h1 class="count" data-target="35">[ 0 + ]</h1>
            <h5>Award Winning</h5>
        </div>
        <div class="counting">
            <h1 class="count" data-target="5">[ 0 + ]</h1>
            <h5>Offices Worldwide</h5>
        </div>
    </div>

    <!-- ------------ Space Section---------------- -->

    <div class="container-fluid-max make-space">
        <div class="space">
            <div class="space-contain">
                <img src="./images/space-1.png" alt="" />
                <h5 class="po-space">Public Spaces</h5>
                <h1>01</h1>
                <span class="space-line-verticle"></span>
                <span class="space-line-horizontal"></span>
            </div>

            <div class="space-contain">
                <img src="./images/residential-space.png" alt="" />
                <h5>Residential Spaces</h5>
                <h1>02</h1>
                <span class="space-line-verticle"></span>
                <span class="space-line-horizontal"></span>
            </div>

            <div class="space-contain">
                <img src="./images/office-space.png" alt="" />
                <h5 class="po-space">Office Spaces</h5>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="85" viewBox="0 0 85 85" fill="none">
                            <path d="M18.2 82.6031H83V1.73706H18.2V21.9536" stroke="#A7CEE6" stroke-width="3"
                                stroke-linejoin="round" />
                            <path d="M10.1 82.603H58.7V21.9535H10.1V42.17" stroke="#A7CEE6" stroke-width="3"
                                stroke-linejoin="round" />
                            <path d="M34.4 42.17H2V82.603H34.4V42.17Z" stroke="#A7CEE6" stroke-width="3"
                                stroke-linejoin="round" />
                        </svg>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="76" viewBox="0 0 108 76" fill="none">
                            <path
                                d="M77.1429 0V9.40572H30.8571V0H0V25.0819H30.8571V15.6762H57.9459C55.3978 18.3752 54.0114 21.6799 54 25.0819V50.1638C53.9959 52.6574 52.7755 55.0478 50.6063 56.811C48.4371 58.5742 45.4963 59.5663 42.4286 59.5696H30.8571V50.1638H0V75.2458H30.8571V65.84H42.4286C47.5416 65.8351 52.4434 64.1819 56.0589 61.2431C59.6743 58.3043 61.7082 54.3199 61.7143 50.1638V25.0819C61.7143 22.589 62.9318 20.198 65.0994 18.4344C67.267 16.6708 70.2072 15.6787 73.2741 15.6762H77.1429V25.0819H108V0H77.1429ZM23.1429 18.8114H7.71429V6.27048H23.1429V18.8114ZM23.1429 68.9753H7.71429V56.4343H23.1429V68.9753ZM100.286 18.8114H84.8571V6.27048H100.286V18.8114Z"
                                fill="#8EC2E2" />
                        </svg>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="93" viewBox="0 0 80 93" fill="none">
                            <path
                                d="M58.3022 47.3689V39.3115H64.5785L78.3968 30.2004C78.5989 30.0799 78.7632 29.9225 78.8764 29.741C78.9897 29.5594 79.0487 29.3587 79.0487 29.1552V1.97521C79.0487 1.63579 78.8847 1.30991 78.592 1.06753C78.2993 0.825154 77.9013 0.685597 77.4832 0.678823L35.5027 0.000313723C35.2203 -0.00473902 34.9413 0.0513213 34.6944 0.162738C34.4475 0.274155 34.2415 0.436914 34.0977 0.634301L23.1014 15.6581C22.6053 16.2111 22.9805 17.4526 23.6275 23.2823C19.2727 23.2709 18.7474 23.1243 18.0463 23.7536L0.703588 37.6474C0.0144908 38.1134 0 38.5704 0 38.5704L1.14099 67.0991H12.3224V92.6638H53.3974L66.142 85.5276C66.3613 85.4092 66.5412 85.2487 66.6657 85.0603C66.7902 84.8719 66.8553 84.6614 66.8554 84.4476V55.3165C66.8554 54.9725 66.6871 54.6427 66.3876 54.3995C66.088 54.1563 65.6817 54.0197 65.2581 54.0197H51.5459C56.492 49.3961 58.3031 48.3888 58.3022 47.3689ZM36.369 2.60829L73.7591 3.2126L60.1822 14.8584H27.4007L36.369 2.60829ZM4.09981 38.5704L19.8075 25.9865L23.8025 26.0653L24.6448 38.5704H4.09981ZM53.3974 89.2893V66.2654L63.6607 59.0742V83.7521L53.3974 89.2893ZM62.2843 56.6132L49.4333 65.6172H37.6518L48.7001 56.6132H62.2843ZM55.1075 46.8752L40.0649 60.5835L40.6184 39.3115H55.1075V46.8752ZM64.6559 35.1728L65.0349 14.8584L75.854 5.1884V28.4984L64.6559 35.1728Z"
                                fill="#8EC2E2" />
                        </svg>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="73" viewBox="0 0 130 73" fill="none">
                            <path
                                d="M127.758 18.952L86.2704 1.73263V36.1714L127.758 18.952ZM44.1821 53.3997V18.952L2.09386 1.73263V36.1759L44.1821 53.3997ZM0.990121 0.26344C1.29266 0.105255 1.64001 0.0150383 1.99778 0.0017229C2.35555 -0.0115925 2.71132 0.0524555 3.02988 0.187525L44.1821 17.0273L85.3398 0.187525C85.6308 0.0686468 85.9511 0.00680037 86.2758 0.00680037C86.6005 0.00680037 86.9208 0.0686468 87.2118 0.187525L128.7 17.4114C129.044 17.5563 129.334 17.7767 129.537 18.0484C129.741 18.3201 129.849 18.6327 129.852 18.952V53.3818C129.85 53.7019 129.742 54.0155 129.539 54.288C129.335 54.5606 129.045 54.7817 128.7 54.9269L87.2118 72.1642C86.8922 72.2939 86.538 72.3546 86.1822 72.3409C85.8264 72.3271 85.4807 72.2392 85.1771 72.0854C84.8736 71.9316 84.6222 71.7169 84.4463 71.4613C84.2704 71.2057 84.1757 70.9175 84.1711 70.6236V38.9624L45.1127 54.9493C44.822 55.0635 44.5041 55.1228 44.1821 55.1228C43.8602 55.1228 43.5422 55.0635 43.2515 54.9493L1.16326 37.721C0.815665 37.5769 0.52307 37.3564 0.317789 37.0837C0.112509 36.8111 0.00252991 36.4969 0 36.1759L0 1.73263C0.00140023 1.43867 0.0929268 1.14979 0.266053 0.892897C0.439179 0.636006 0.68827 0.419462 0.990121 0.26344Z"
                                fill="#8EC2E2" />
                        </svg>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="74" viewBox="0 0 133 74" fill="none">
                            <path
                                d="M133 18.1772L89.0201 36.6424V0L133 18.1772ZM85.9029 1.26794L45.891 17.5432V54.1804L85.9027 37.9099L85.9029 1.26794ZM42.7738 17.5381L0 0V36.6424L42.7738 54.1755V17.5381ZM89.0199 39.528V73.2848L133 54.8144V21.0628L89.0199 39.528Z"
                                fill="#8EC2E2" />
                        </svg>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="74" viewBox="0 0 128 74" fill="none">
                            <path
                                d="M123.239 0H44.0139C41.4171 0 39.3191 1.732 39.3191 3.87579V32.4598H4.69482C2.098 32.4598 0 34.1918 0 36.3356V69.2798C0 71.4236 2.098 73.1556 4.69482 73.1556H83.9199C86.5167 73.1556 88.6147 71.4236 88.6147 69.2798V40.6958H123.239C125.836 40.6958 127.934 38.9638 127.934 36.82V3.87579C127.934 1.732 125.836 0 123.239 0ZM49.2956 8.23606H78.6382V32.4598H49.2956V8.23606ZM39.3191 64.9196H9.97649V40.6958H39.3191V64.9196ZM78.6382 64.9196H49.2956V40.6958H78.6382V64.9196ZM117.957 32.4598H88.6147V8.23606H117.957V32.4598Z"
                                fill="#8EC2E2" />
                        </svg>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="39" viewBox="0 0 50 39" fill="none">
                            <path
                                d="M8.51662 -0.00012207L6.02516 2.02216L9.73227 5.03401L12.2202 3.01173L8.51662 -0.00012207ZM41.0312 -0.00012207L37.3241 3.01173L39.8138 5.03401L43.5191 2.0236L41.0312 -0.00012207ZM24.773 0.897391C24.1891 0.903145 23.5981 0.930473 23.0035 0.989444C22.9858 0.989444 22.9681 0.986568 22.9505 0.989444C15.7733 1.65826 10.0614 6.37165 9.0687 12.1796C8.27596 16.8541 10.6471 21.0929 14.5984 23.8228C16.2147 24.9441 17.3079 26.4827 17.695 28.1809V36.8109H21.7295C22.3453 37.6696 23.4689 38.2492 24.773 38.2492C26.0772 38.2492 27.2008 37.6696 27.8166 36.8109H31.851V31.0576H32.0174V29.3489C32.0174 27.2403 33.3657 25.1144 35.5564 23.4618C38.4867 21.0771 40.6986 17.6898 40.6986 13.7991C40.6986 6.69383 33.5038 0.831229 24.773 0.897391ZM24.773 3.77404C31.6122 3.69637 37.1596 8.24722 37.1596 13.7991C37.1596 16.811 35.4431 19.4633 33.0667 21.3935L33.1233 21.4395C30.7617 23.2097 29.2346 25.5945 28.8057 28.1824H21.0659C20.6766 25.7171 19.3761 23.3309 16.9182 21.6193C13.7915 19.4618 11.9282 16.2112 12.5511 12.5406C13.3244 8.0099 17.8472 4.36663 23.3893 3.86753C23.8468 3.81567 24.3077 3.78494 24.7695 3.77548L24.773 3.77404ZM0 13.7991V16.6758H5.30851V13.7991H0ZM44.2376 13.7991V16.6758H49.5461V13.7991H44.2376ZM9.73227 25.4409L6.02693 28.4513L8.51662 30.4751L12.2184 27.4632L9.73227 25.4409ZM39.8138 25.4409L37.3259 27.4632L41.0295 30.4751L43.5191 28.4513L39.8138 25.4409ZM21.234 31.059H28.312V33.9357H21.234V31.059Z"
                                fill="#1D84C5" />
                        </svg>
                    </div>
                    <h5>Creating Concept</h5>
                    <p></p>
                </div>
                <div class="procedure">
                    <div class="working-circle">
                        <h1>02</h1>
                        <svg xmlns="http://www.w3.org/2000/svg" width="54" height="45" viewBox="0 0 54 45" fill="none">
                            <path
                                d="M27.1792 29.2883C29.9615 29.2883 32.215 27.7615 32.215 25.8785C32.215 23.9956 29.9615 22.4667 27.1792 22.4667C24.3969 22.4667 22.1433 20.9399 22.1433 19.0549C22.1433 17.172 24.3969 15.6452 27.1792 15.6452M27.1792 29.2883C24.3969 29.2883 22.1433 27.7615 22.1433 25.8785M27.1792 29.2883V30.6534M27.1792 15.6452V14.28M27.1792 15.6452C29.9615 15.6452 32.215 17.172 32.215 19.0549"
                                stroke="#1D84C5" stroke-width="2.47665" stroke-linecap="round" />
                            <path
                                d="M39.7689 4.73835C35.9429 2.93912 31.5995 1.99437 27.1793 1.9999C13.2728 1.9999 2 11.1629 2 22.4666C2 25.7413 2.94674 28.8359 4.6262 31.5805C5.07439 32.3091 5.22295 33.1421 4.9636 33.93L3.46543 38.4859C3.31705 38.9368 3.31719 39.4114 3.46582 39.8623C3.61446 40.3131 3.90637 40.7242 4.31225 41.0543C4.71813 41.3844 5.2237 41.6219 5.77822 41.743C6.33273 41.8641 6.91668 41.8646 7.47145 41.7442L13.0764 40.5244C14.0493 40.3254 15.0782 40.4222 15.9695 40.7966C19.4516 42.206 23.2893 42.9375 27.1793 42.9333C41.0858 42.9333 52.3585 33.7704 52.3585 22.4666C52.3585 18.7396 51.1323 15.2419 48.9895 12.2333"
                                stroke="#1D84C5" stroke-width="2.47665" stroke-linecap="round" />
                        </svg>
                    </div>
                    <h5>Budget Planning</h5>
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
                    <h5>Design Process</h5>
                    <p></p>
                </div>
                <div class="procedure">
                    <div class="working-circle">
                        <h1>04</h1>
                        <svg xmlns="http://www.w3.org/2000/svg" width="47" height="42" viewBox="0 0 47 42" fill="none">
                            <path
                                d="M23.2655 11.3468C24.5504 11.3468 25.5921 10.5001 25.5921 9.45568C25.5921 8.41125 24.5504 7.56458 23.2655 7.56458C21.9806 7.56458 20.939 8.41125 20.939 9.45568C20.939 10.5001 21.9806 11.3468 23.2655 11.3468Z"
                                fill="#1D84C5" />
                            <path
                                d="M9.30615 30.2579H37.2247V34.0401H9.30615V30.2579ZM18.6123 20.4809L25.108 25.7646L34.256 18.3231L37.2247 20.8024V13.2379H27.9185L30.9663 15.6491L25.1057 20.4128L18.6123 15.129L9.30615 22.6935L12.5959 25.3675L18.6123 20.4809Z"
                                fill="#1D84C5" />
                            <path
                                d="M39.5513 3.78235H31.8783C31.6479 3.50389 31.3994 3.2356 31.1338 2.97863L31.1106 2.95593C29.4006 1.33823 26.9959 0.311552 24.3868 0.0852291C23.6458 -0.0284097 22.8851 -0.0284097 22.1441 0.0852291C19.535 0.311552 17.1303 1.33823 15.4203 2.95593L15.3971 2.97863C15.1316 3.23499 14.8831 3.50265 14.6526 3.78046V3.78235H6.97963C5.12909 3.78385 3.35486 4.38205 2.04633 5.44568C0.737793 6.50931 0.00184778 7.95147 0 9.45567V35.9312C0.00184778 37.4354 0.737793 38.8776 2.04633 39.9412C3.35486 41.0048 5.12909 41.603 6.97963 41.6045H39.5513C41.4018 41.603 43.176 41.0048 44.4846 39.9412C45.7931 38.8776 46.529 37.4354 46.5309 35.9312V9.45567C46.529 7.95147 45.7931 6.50931 44.4846 5.44568C43.176 4.38205 41.4018 3.78385 39.5513 3.78235ZM41.8778 35.9312C41.8778 36.4328 41.6327 36.9138 41.1964 37.2684C40.7601 37.6231 40.1683 37.8223 39.5513 37.8223H6.97963C6.3626 37.8223 5.77083 37.6231 5.33452 37.2684C4.89821 36.9138 4.65309 36.4328 4.65309 35.9312V9.45567C4.65309 8.95412 4.89821 8.47311 5.33452 8.11846C5.77083 7.76381 6.3626 7.56456 6.97963 7.56456H17.5654C17.8324 6.49581 18.5457 5.53496 19.5846 4.84479C20.6234 4.15463 21.9238 3.77761 23.2654 3.77761C24.6071 3.77761 25.9075 4.15463 26.9463 4.84479C27.9852 5.53496 28.6985 6.49581 28.9655 7.56456H39.5513C40.1683 7.56456 40.7601 7.76381 41.1964 8.11846C41.6327 8.47311 41.8778 8.95412 41.8778 9.45567V35.9312Z"
                                fill="#1D84C5" />
                        </svg>
                    </div>
                    <h5>Building Dream</h5>
                    <p></p>
                </div>
            </div>
        </div>
    </div>

    <!--------------------- Partner --------------------------------------->

    <div class="container-fluid mt-4 mb-5 py-5">
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
    </div>

    <!--------------- Gallery -------------------->
    <div class="container-fluid mt-4 container-fluid-max whole-gallery">
        <div class="first-half-gallery">
            <div class="gallery">
                <img src="./images/gallery1.png" alt="" />
                <div class="gallery-box">
                    <h5>Stylish family appartment</h5>
                    <h6>[ Interior ]</h6>
                </div>
            </div>
            <div class="gallery">
                <img src="./images/gallery3.png" alt="" />
                <div class="gallery-box">
                    <h5>Stylish family appartment</h5>
                    <h6>[ Interior ]</h6>
                </div>
            </div>
            <div class="gallery">
                <img src="./images/gallery2.png" alt="" />
                <div class="gallery-box">
                    <h5>Stylish family appartment</h5>
                    <h6>[ Interior ]</h6>
                </div>
            </div>
        </div>

        <div class="secound-half-gallery">
            <div class="gallery">
                <img src="./images/gallery3.png" alt="" />
                <div class="gallery-box">
                    <h5>Stylish family appartment</h5>
                    <h6>[ Interior ]</h6>
                </div>
            </div>
            <div class="gallery">
                <img src="./images/gallery2.png" alt="" />
                <div class="gallery-box">
                    <h5>Stylish family appartment</h5>
                    <h6>[ Interior ]</h6>
                </div>
            </div>
            <div class="gallery">
                <img src="./images/gallery1.png" alt="" />
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
                <div class="counsel-heading">
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
                                                <h5><?php echo $projectName; ?></h5>
                                                <h6>[ <?php echo $imageAddress ?> ]</h6>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <?php }} ?>
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
                            <h5>oleve steve</h5>
                            <p>Chief Executive Officer</p>
                        </div>
                    </div>
                    <div class="skill-team-partner">
                        <img src="./images/pro1.png" alt="oleve steve" />
                        <div class="skill-box">
                            <h5>oleve steve</h5>
                            <p>Chief Executive Officer</p>
                        </div>
                    </div>
                    <div class="skill-team-partner">
                        <img src="./images/pro1.png" alt="oleve steve" />
                        <div class="skill-box">
                            <h5>oleve steve</h5>
                            <p>Chief Executive Officer</p>
                        </div>
                    </div>
                    <div class="skill-team-partner">
                        <img src="./images/pro1.png" alt="oleve steve" />
                        <div class="skill-box">
                            <h5>oleve steve</h5>
                            <p>Chief Executive Officer</p>
                        </div>
                    </div>
                    <div class="skill-team-partner">
                        <img src="./images/pro1.png" alt="oleve steve" />
                        <div class="skill-box">
                            <h5>oleve steve</h5>
                            <p>Chief Executive Officer</p>
                        </div>
                    </div>
                    <div class="skill-team-partner">
                        <img src="./images/pro1.png" alt="oleve steve" />
                        <div class="skill-box">
                            <h5>oleve steve</h5>
                            <p>Chief Executive Officer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ----------------Contact Us---------------------- -->
    <div class="my-5 py-5 container-fluid-max">
        <div class="contact-bg">
            <img src="./images/contact.png" alt="" />
            <h2>Have a Project in Mind?</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-5 pt-4">
                    <div class="contact-heading">
                        <h5 class="comman-sub-heading">[ Contact Us ]</h5>
                        <h3 class="sketch-heading my-3">Get In Touch</h3>
                        <p class="sketch-para">
                            Your email address will not be published. Required fields are
                            marked *
                        </p>
                    </div>
                    <div id="ContactSubmitMessage"></div>
                    <div class="contact-form">
                        <form method="post" id="contactForm">
                            <div class="input-container">
                                <input type="text" id="name" name='name' />
                                <label class="contact-form-label" for="name">Enter Your Name</label>
                            </div>
                            <div class="input-container">
                                <input type="text" id="email" name='email' />
                                <label class="contact-form-label" for="email">Enter Your Email</label>
                            </div>
                            <div class="input-container">
                                <input type="text" id="phone" name='phone' />
                                <label class="contact-form-label" for="phone">Enter Your Phone Number</label>
                            </div>
                            <div class="input-container">
                                <textarea id="message" name='message'></textarea>
                                <label class="contact-form-label" for="message">Message...</label>
                            </div>
                                <button class="custom-button">SEND</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="right-contact">
                        <div class="contact-details">
                            <div class="contact-heading mt-4 mb-5">
                                <h5 class="comman-sub-heading">[ Our Contact Detail ]</h5>
                                <h3 class="contact-h3">Let's Start A Project</h3>
                                <p class="contact-para">
                                    Original design project of high quality raises profit –
                                    this is proved in practice by many of our customers. A
                                    professional approach will avoid many common mistakes
                                </p>
                            </div>
                            <div class="member-detail">
                                <div class="address-detail">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" viewBox="0 0 14 16"
                                        fill="none">
                                        <path
                                            d="M4.92066 7.37683C5.48751 7.82847 6.23651 8.06919 7 8.06919C7.38004 8.06919 7.75813 8.00963 8.11341 7.89238C8.4686 7.77515 8.79752 7.60137 9.07934 7.37683C9.36129 7.15219 9.59259 6.87939 9.75333 6.5702C9.91442 6.26033 10 5.92252 10 5.5773C10 4.87499 9.6491 4.23173 9.07934 3.77777C8.51249 3.32612 7.76349 3.08541 7 3.08541C6.23651 3.08541 5.48751 3.32612 4.92066 3.77777C4.3509 4.23173 4 4.87499 4 5.5773C4 6.27961 4.3509 6.92287 4.92066 7.37683ZM7 15.2587C6.81428 15.0863 6.55908 14.8452 6.25653 14.5482C5.60764 13.9111 4.74387 13.02 3.88157 12.0017C3.01774 10.9816 2.16449 9.84452 1.52958 8.71535C0.889342 7.5767 0.5 6.49631 0.5 5.5773C0.5 4.27213 1.14999 2.99014 2.36183 2.02461C3.57657 1.05675 5.24393 0.5 7 0.5C8.75607 0.5 10.4234 1.05675 11.6382 2.02461C12.85 2.99014 13.5 4.27213 13.5 5.5773C13.5 6.49631 13.1107 7.5767 12.4704 8.71535C11.8355 9.84452 10.9823 10.9816 10.1184 12.0017C9.25613 13.02 8.39236 13.9111 7.74347 14.5482C7.44092 14.8452 7.18572 15.0863 7 15.2587Z"
                                            fill="#1D84C5" stroke="#1D84C5" />
                                    </svg>
                                    <div class="address-info">
                                        <h6>OUR ADDRESS</h6>
                                        <p>411 University St, Seattle, USA</p>
                                    </div>
                                </div>
                                <div class="address-detail">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" viewBox="0 0 20 14"
                                        fill="none">
                                        <path
                                            d="M19.5 2.36619V2.36695V11.928C19.5 12.1913 19.3927 12.4303 19.1011 12.6631C18.8075 12.8974 18.4497 13.022 18.0005 13.0215H18H2C1.55125 13.0215 1.19346 12.897 0.899573 12.6628C0.608379 12.4308 0.500492 12.1917 0.5 11.9276V2.36695C0.5 2.10414 0.607252 1.8655 0.899249 1.63324C1.19417 1.39866 1.5523 1.27391 2.00025 1.27344H18C18.4485 1.27344 18.8067 1.39817 19.1014 1.63298C19.3937 1.86585 19.5004 2.10436 19.5 2.36619ZM20 2.36695V11.928C20 12.3663 19.8043 12.7415 19.413 13.0539C19.0217 13.3662 18.5507 13.5221 18 13.5215H2C1.45 13.5215 0.979333 13.3656 0.588 13.0539C0.196667 12.7421 0.000666667 12.3668 0 11.928L20 2.36695ZM10 7.38568L2.5 3.65089V3.1745L9.77712 6.79831L10 6.9093L10.2229 6.79831L18.2229 2.81453L18 1.86695H2L1.88239 2.36695H1.5V3.15291V3.96047V11.928V12.428H2H18H18.5V11.928V3.96047V3.15291L17.7771 3.51289L10 7.38568Z"
                                            fill="white" stroke="#1D84C5" />
                                    </svg>
                                    <div class="address-info">
                                        <h6>OUR ADDRESS</h6>
                                        <p>411 University St, Seattle, USA</p>
                                    </div>
                                </div>
                                <div class="address-detail">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16"
                                        fill="none">
                                        <mask id="path-1-inside-1_0_441" fill="white">
                                            <path
                                                d="M13.3792 10.6163L13.8352 10.2554L12.7762 9.40763L12.3222 9.76856L13.3792 10.6163ZM15.3642 10.104L17.2752 10.9318L17.9902 9.8817L16.0802 9.05466L15.3642 10.104ZM17.6422 12.5763L16.2222 13.7021L17.2792 14.5491L18.6992 13.4241L17.6422 12.5763ZM15.3562 14.0639C13.9062 14.1722 10.1562 14.0758 6.09417 10.8585L5.03617 11.7055C9.46817 15.2168 13.6872 15.3889 15.4962 15.2542L15.3562 14.0639ZM6.09417 10.8585C2.22317 7.79101 1.58117 5.2119 1.50117 4.09246L0.00317342 4.16018C0.103173 5.56885 0.898174 8.42762 5.03617 11.7055L6.09417 10.8585ZM7.46917 5.93456L7.75617 5.70669L6.70017 4.85974L6.41317 5.08681L7.46917 5.93456ZM7.98417 2.81048L6.72417 1.46874L5.52317 2.18582L6.78317 3.52676L7.98417 2.81048ZM2.48317 1.17633L0.913173 2.41927L1.97117 3.26702L3.54017 2.02408L2.48317 1.17633ZM6.94117 5.51069C6.41117 5.08681 6.41117 5.08681 6.41117 5.08841H6.40917L6.40617 5.09159C6.35896 5.12999 6.31643 5.17187 6.27917 5.21668C6.22517 5.28042 6.16617 5.36408 6.11617 5.47005C5.9944 5.74359 5.96408 6.03767 6.02817 6.32338C6.16217 7.01257 6.75817 7.92327 8.28417 9.13274L9.34217 8.285C7.91317 7.1536 7.57317 6.4652 7.51017 6.14012C7.48017 5.98555 7.51117 5.90907 7.52017 5.89154C7.52517 5.88038 7.52717 5.87959 7.52017 5.88676C7.51135 5.89781 7.50131 5.9082 7.49017 5.91783L7.48017 5.9258C7.47694 5.92828 7.47361 5.93067 7.47017 5.93297L6.94117 5.51069ZM8.28417 9.13274C9.81117 10.3422 10.9602 10.8139 11.8262 10.9191C12.2692 10.9733 12.6262 10.9302 12.8972 10.8498C13.0487 10.8051 13.1905 10.7416 13.3172 10.6617C13.3344 10.6503 13.3511 10.6383 13.3672 10.6259L13.3742 10.6211L13.3772 10.6187L13.3782 10.6171C13.3782 10.6171 13.3792 10.6163 12.8502 10.1924C12.3202 9.76856 12.3232 9.76776 12.3232 9.76776L12.3252 9.76617L12.3272 9.76457L12.3332 9.76059L12.3432 9.75262C12.3552 9.74402 12.3679 9.73604 12.3812 9.72872C12.3912 9.72314 12.3882 9.72553 12.3742 9.73031C12.3492 9.73748 12.2512 9.76218 12.0542 9.73828C11.6402 9.68729 10.7702 9.41639 9.34217 8.285L8.28417 9.13274ZM6.72417 1.46794C5.70417 0.384353 3.70017 0.212253 2.48317 1.17633L3.54017 2.02408C4.07217 1.60259 5.01617 1.64642 5.52317 2.18582L6.72417 1.46794ZM1.50217 4.09326C1.48217 3.81758 1.64117 3.52915 1.97117 3.26782L0.912174 2.42007C0.375174 2.84554 -0.0478266 3.44788 0.00317342 4.16018L1.50217 4.09326ZM16.2222 13.7021C15.9482 13.9205 15.6522 14.0432 15.3572 14.0647L15.4962 15.2542C16.2312 15.1993 16.8322 14.9045 17.2802 14.5499L16.2222 13.7021ZM7.75617 5.70669C8.74117 4.92666 8.81417 3.69408 7.98517 2.81127L6.78417 3.52756C7.18717 3.95701 7.12717 4.52032 6.69917 4.86053L7.75617 5.70669ZM17.2762 10.9326C18.0932 11.2864 18.2202 12.1198 17.6432 12.5771L18.7012 13.4241C20.0412 12.362 19.6282 10.5908 17.9912 9.88249L17.2762 10.9326ZM13.8352 10.2562C14.2192 9.95181 14.8372 9.87691 15.3652 10.1048L16.0812 9.05546C14.9972 8.58537 13.6532 8.71524 12.7772 9.40842L13.8352 10.2562Z" />
                                        </mask>
                                        <path
                                            d="M13.3792 10.6163L13.8352 10.2554L12.7762 9.40763L12.3222 9.76856L13.3792 10.6163ZM15.3642 10.104L17.2752 10.9318L17.9902 9.8817L16.0802 9.05466L15.3642 10.104ZM17.6422 12.5763L16.2222 13.7021L17.2792 14.5491L18.6992 13.4241L17.6422 12.5763ZM15.3562 14.0639C13.9062 14.1722 10.1562 14.0758 6.09417 10.8585L5.03617 11.7055C9.46817 15.2168 13.6872 15.3889 15.4962 15.2542L15.3562 14.0639ZM6.09417 10.8585C2.22317 7.79101 1.58117 5.2119 1.50117 4.09246L0.00317342 4.16018C0.103173 5.56885 0.898174 8.42762 5.03617 11.7055L6.09417 10.8585ZM7.46917 5.93456L7.75617 5.70669L6.70017 4.85974L6.41317 5.08681L7.46917 5.93456ZM7.98417 2.81048L6.72417 1.46874L5.52317 2.18582L6.78317 3.52676L7.98417 2.81048ZM2.48317 1.17633L0.913173 2.41927L1.97117 3.26702L3.54017 2.02408L2.48317 1.17633ZM6.94117 5.51069C6.41117 5.08681 6.41117 5.08681 6.41117 5.08841H6.40917L6.40617 5.09159C6.35896 5.12999 6.31643 5.17187 6.27917 5.21668C6.22517 5.28042 6.16617 5.36408 6.11617 5.47005C5.9944 5.74359 5.96408 6.03767 6.02817 6.32338C6.16217 7.01257 6.75817 7.92327 8.28417 9.13274L9.34217 8.285C7.91317 7.1536 7.57317 6.4652 7.51017 6.14012C7.48017 5.98555 7.51117 5.90907 7.52017 5.89154C7.52517 5.88038 7.52717 5.87959 7.52017 5.88676C7.51135 5.89781 7.50131 5.9082 7.49017 5.91783L7.48017 5.9258C7.47694 5.92828 7.47361 5.93067 7.47017 5.93297L6.94117 5.51069ZM8.28417 9.13274C9.81117 10.3422 10.9602 10.8139 11.8262 10.9191C12.2692 10.9733 12.6262 10.9302 12.8972 10.8498C13.0487 10.8051 13.1905 10.7416 13.3172 10.6617C13.3344 10.6503 13.3511 10.6383 13.3672 10.6259L13.3742 10.6211L13.3772 10.6187L13.3782 10.6171C13.3782 10.6171 13.3792 10.6163 12.8502 10.1924C12.3202 9.76856 12.3232 9.76776 12.3232 9.76776L12.3252 9.76617L12.3272 9.76457L12.3332 9.76059L12.3432 9.75262C12.3552 9.74402 12.3679 9.73604 12.3812 9.72872C12.3912 9.72314 12.3882 9.72553 12.3742 9.73031C12.3492 9.73748 12.2512 9.76218 12.0542 9.73828C11.6402 9.68729 10.7702 9.41639 9.34217 8.285L8.28417 9.13274ZM6.72417 1.46794C5.70417 0.384353 3.70017 0.212253 2.48317 1.17633L3.54017 2.02408C4.07217 1.60259 5.01617 1.64642 5.52317 2.18582L6.72417 1.46794ZM1.50217 4.09326C1.48217 3.81758 1.64117 3.52915 1.97117 3.26782L0.912174 2.42007C0.375174 2.84554 -0.0478266 3.44788 0.00317342 4.16018L1.50217 4.09326ZM16.2222 13.7021C15.9482 13.9205 15.6522 14.0432 15.3572 14.0647L15.4962 15.2542C16.2312 15.1993 16.8322 14.9045 17.2802 14.5499L16.2222 13.7021ZM7.75617 5.70669C8.74117 4.92666 8.81417 3.69408 7.98517 2.81127L6.78417 3.52756C7.18717 3.95701 7.12717 4.52032 6.69917 4.86053L7.75617 5.70669ZM17.2762 10.9326C18.0932 11.2864 18.2202 12.1198 17.6432 12.5771L18.7012 13.4241C20.0412 12.362 19.6282 10.5908 17.9912 9.88249L17.2762 10.9326ZM13.8352 10.2562C14.2192 9.95181 14.8372 9.87691 15.3652 10.1048L16.0812 9.05546C14.9972 8.58537 13.6532 8.71524 12.7772 9.40842L13.8352 10.2562Z"
                                            fill="white" />
                                        <path
                                            d="M6.09417 10.8585L6.40718 11.2484L5.7817 10.4682L6.09417 10.8585ZM3.54017 2.02408L3.22788 2.41456L3.853 1.63403L3.54017 2.02408ZM13.1632 9.80253L12.6352 9.37865L12.0092 10.1585L12.5372 10.5823L13.1632 9.80253ZM12.9935 10.2217L13.5225 10.6456L14.1478 9.86518L13.6188 9.44131L12.9935 10.2217ZM15.3099 9.29755L14.9519 9.82341L15.7785 10.3862L16.1365 9.86031L15.3099 9.29755ZM17.2201 10.1251L16.8621 10.6502L17.6883 11.2135L18.0463 10.6884L17.2201 10.1251ZM17.8595 13.3904L18.3885 13.8143L19.0138 13.0339L18.4848 12.61L17.8595 13.3904ZM17.0641 13.7345L16.5341 13.3114L15.9102 14.0929L16.4402 14.516L17.0641 13.7345ZM14.9296 14.7175L14.9996 15.3126L15.9928 15.1958L15.9228 14.6006L14.9296 14.7175ZM5.87918 11.6723L6.40718 11.2484L5.78116 10.4686L5.25316 10.8925L5.87918 11.6723ZM0.729856 3.62722L-0.0191435 3.66068L0.0254903 4.65969L0.77449 4.62622L0.729856 3.62722ZM6.91388 5.67329L7.44388 6.09717L8.06846 5.31621L7.53846 4.89234L6.91388 5.67329ZM7.63923 3.59768L8.23923 3.23993L7.72711 2.38102L7.12711 2.73876L7.63923 3.59768ZM5.86801 1.39789L5.26701 1.75643L5.77934 2.61521L6.38034 2.25667L5.86801 1.39789ZM2.69788 1.99068L3.22788 2.41456L3.85246 1.6336L3.32246 1.20972L2.69788 1.99068ZM1.75283 2.45296L1.22483 2.02988L0.599521 2.81026L1.12752 3.23333L1.75283 2.45296ZM9.12482 9.09906L9.65382 8.67519L9.02852 7.8948L8.49952 8.31868L9.12482 9.09906ZM5.7817 10.4682L4.7237 11.3151L5.34865 12.0958L6.40665 11.2489L5.7817 10.4682ZM3.853 1.63403L2.796 0.786282L2.17034 1.56638L3.22734 2.41413L3.853 1.63403ZM8.59682 9.52294L9.65482 8.67519L9.02952 7.8948L7.97152 8.74255L8.59682 9.52294ZM12.8502 10.1924L13.4755 9.41205L13.4748 9.41147L12.8502 10.1924ZM12.3222 9.76856L11.6999 8.98578L10.7196 9.76512L11.6965 10.5487L12.3222 9.76856ZM13.8352 10.2554L14.4558 11.0395L15.4408 10.2598L14.4601 9.4747L13.8352 10.2554ZM15.3652 10.1048L14.9689 11.0229L15.7263 11.3498L16.1912 10.6684L15.3652 10.1048ZM17.2752 10.9318L16.8777 11.8494L17.6364 12.1781L18.1018 11.4946L17.2752 10.9318ZM18.7012 13.4241L18.0762 14.2047L18.6981 14.7025L19.3223 14.2078L18.7012 13.4241ZM16.2222 13.7021L15.6009 12.9185L15.599 12.92L16.2222 13.7021ZM15.4962 15.2542L15.5704 16.2515L15.5708 16.2514L15.4962 15.2542ZM6.09417 10.8585L5.4731 11.6423L5.47329 11.6424L6.09417 10.8585ZM3.54017 2.02408L4.16113 2.80793L4.16116 2.8079L3.54017 2.02408ZM0.912174 2.42007L1.53712 1.6394L0.915386 1.14169L0.291163 1.63626L0.912174 2.42007ZM13.3792 10.6163L12.7535 11.3964L13.3751 11.8949L13.9998 11.4004L13.3792 10.6163ZM12.7762 9.40763L13.4011 8.62695L12.7783 8.1284L12.1539 8.62485L12.7762 9.40763ZM15.3642 10.104L14.5381 9.54036L13.8558 10.5404L14.9667 11.0216L15.3642 10.104ZM17.9902 9.8817L18.8168 10.4445L19.4975 9.44466L18.3875 8.96403L17.9902 9.8817ZM16.0802 9.05466L16.4775 8.137L15.7196 7.80883L15.2541 8.49103L16.0802 9.05466ZM17.6422 12.5763L18.2678 11.7962L17.6458 11.2973L17.0209 11.7927L17.6422 12.5763ZM17.2792 14.5491L16.6539 15.3295L17.2756 15.8277L17.9002 15.3329L17.2792 14.5491ZM18.6992 13.4241L19.3202 14.2079L20.3035 13.4289L19.3248 12.644L18.6992 13.4241ZM15.3562 14.0639L16.3493 13.9471L16.2374 12.9952L15.2817 13.0667L15.3562 14.0639ZM5.03617 11.7055L5.65716 10.9217L5.6571 10.9216L5.03617 11.7055ZM1.50117 4.09246L2.49863 4.02118L2.42919 3.04948L1.45601 3.09348L1.50117 4.09246ZM7.46917 5.93456L6.84315 6.71437L7.46573 7.21417L8.09099 6.71772L7.46917 5.93456ZM6.70017 4.85974L7.32584 4.07964L6.70441 3.58123L6.07969 4.07552L6.70017 4.85974ZM6.41317 5.08681L5.79269 4.30259L4.80871 5.08113L5.78715 5.86662L6.41317 5.08681ZM7.98417 2.81048L8.4964 3.66933L9.56437 3.03238L8.71314 2.12592L7.98417 2.81048ZM6.72417 1.46874L7.45314 0.784185L6.90235 0.197669L6.21153 0.610138L6.72417 1.46874ZM6.78317 3.52676L6.05441 4.21153L6.60493 4.79741L7.2954 4.38561L6.78317 3.52676ZM2.48317 1.17633L3.10388 1.96037L3.10412 1.96018L2.48317 1.17633ZM0.913173 2.41927L0.292463 1.63523L-0.691933 2.41456L0.287872 3.19965L0.913173 2.41927ZM1.97117 3.26702L1.34587 4.0474L1.96762 4.54559L2.59213 4.05087L1.97117 3.26702ZM6.94117 5.51069L6.31659 6.29165L6.31731 6.29222L6.94117 5.51069ZM6.41117 5.08841V6.08841H7.41117V5.08841H6.41117ZM6.40917 5.08841V4.08841H5.97719L5.68108 4.40293L6.40917 5.08841ZM6.40617 5.09159L7.03709 5.86745L7.08868 5.82549L7.13427 5.77707L6.40617 5.09159ZM6.27917 5.21668L7.0422 5.86311L7.04809 5.85604L6.27917 5.21668ZM6.11617 5.47005L5.21179 5.04333L5.20709 5.0533L5.20261 5.06337L6.11617 5.47005ZM6.02817 6.32338L7.00979 6.13252L7.00706 6.11846L7.00392 6.10448L6.02817 6.32338ZM8.28417 9.13274L7.66303 9.91644L7.66328 9.91664L8.28417 9.13274ZM9.34217 8.285L9.96318 7.50119L9.96291 7.50098L9.34217 8.285ZM7.51017 6.14012L8.49191 5.94986L8.49185 5.94959L7.51017 6.14012ZM7.52017 5.89154L8.40977 6.34829L8.42186 6.32474L8.43269 6.30057L7.52017 5.89154ZM7.52017 5.88676L6.8046 5.18822L6.76974 5.22393L6.73861 5.26293L7.52017 5.88676ZM7.49017 5.91783L8.1133 6.69995L8.12887 6.68754L8.14394 6.67453L7.49017 5.91783ZM7.48017 5.9258L8.08845 6.71952L8.09593 6.71379L8.1033 6.70792L7.48017 5.9258ZM7.47017 5.93297L6.84631 6.7145L7.41879 7.17149L8.02716 6.76349L7.47017 5.93297ZM11.8262 10.9191L11.9476 9.92647L11.9467 9.92637L11.8262 10.9191ZM12.8972 10.8498L12.6143 9.89059L12.6125 9.89113L12.8972 10.8498ZM13.3172 10.6617L13.8505 11.5076L13.8611 11.5009L13.8716 11.494L13.3172 10.6617ZM13.3672 10.6259L12.8032 9.80005L12.7793 9.81639L12.7564 9.83409L13.3672 10.6259ZM13.3742 10.6211L13.9381 11.4469L13.9685 11.4261L13.9973 11.4032L13.3742 10.6211ZM13.3772 10.6187L14.0003 11.4008L14.1337 11.2945L14.2243 11.1501L13.3772 10.6187ZM13.3782 10.6171L12.7551 9.83496L12.6217 9.94124L12.531 10.0857L13.3782 10.6171ZM12.3232 9.76776L12.5799 10.7342L12.7824 10.6804L12.9463 10.5499L12.3232 9.76776ZM12.3252 9.76617L12.9483 10.5483L12.9485 10.5481L12.3252 9.76617ZM12.3272 9.76457L11.7741 8.93142L11.7379 8.95549L11.7038 8.98261L12.3272 9.76457ZM12.3332 9.76059L12.8862 10.5937L12.9224 10.5697L12.9563 10.5427L12.3332 9.76059ZM12.3432 9.75262L11.7614 8.93925L11.7403 8.95435L11.72 8.97052L12.3432 9.75262ZM12.3812 9.72872L12.8638 10.6046L12.8683 10.6021L12.3812 9.72872ZM12.3742 9.73031L12.6499 10.6916L12.6738 10.6847L12.6973 10.6767L12.3742 9.73031ZM12.0542 9.73828L11.9319 10.7308L11.9337 10.731L12.0542 9.73828ZM6.72417 1.46794L7.23724 2.32629L8.30482 1.68816L7.45232 0.782524L6.72417 1.46794ZM1.50217 4.09326L1.54678 5.09226L2.57395 5.0464L2.49955 4.0209L1.50217 4.09326ZM1.97117 3.26782L2.592 4.05176L3.57659 3.27204L2.59612 2.48715L1.97117 3.26782ZM15.3572 14.0647L15.2844 13.0673L14.2427 13.1433L14.3639 14.1807L15.3572 14.0647ZM17.2802 14.5499L17.9008 15.334L18.8854 14.5547L17.9055 13.7695L17.2802 14.5499ZM7.98517 2.81127L8.71415 2.12673L8.16364 1.54049L7.47295 1.95242L7.98517 2.81127ZM6.78417 3.52756L6.27195 2.66871L5.20437 3.30542L6.05497 4.21185L6.78417 3.52756ZM6.69917 4.86053L6.07692 4.07772L5.09559 4.85777L6.07423 5.6412L6.69917 4.86053ZM17.2762 10.9326L16.4496 10.3698L15.7688 11.3697L16.8788 11.8503L17.2762 10.9326ZM17.6432 12.5771L17.022 11.7934L16.0382 12.5732L17.0182 13.3578L17.6432 12.5771ZM17.9912 9.88249L18.3883 8.96472L17.6297 8.63651L17.1646 9.31969L17.9912 9.88249ZM13.8352 10.2562L13.2099 11.0366L13.8318 11.5349L14.4563 11.0399L13.8352 10.2562ZM16.0812 9.05546L16.9072 9.61909L17.5893 8.61948L16.479 8.13801L16.0812 9.05546ZM12.7772 9.40842L12.1566 8.62424L11.1718 9.40352L12.1519 10.1888L12.7772 9.40842ZM13.9998 11.4004L14.4558 11.0395L13.2145 9.47127L12.7585 9.8322L13.9998 11.4004ZM14.4601 9.4747L13.4011 8.62695L12.1512 10.1883L13.2102 11.036L14.4601 9.4747ZM12.1539 8.62485L11.6999 8.98578L12.9445 10.5513L13.3985 10.1904L12.1539 8.62485ZM11.6965 10.5487L12.7535 11.3964L14.0048 9.83621L12.9478 8.98846L11.6965 10.5487ZM14.9667 11.0216L16.8777 11.8494L17.6727 10.0142L15.7617 9.18639L14.9667 11.0216ZM18.1018 11.4946L18.8168 10.4445L17.1636 9.31889L16.4486 10.369L18.1018 11.4946ZM18.3875 8.96403L16.4775 8.137L15.6828 9.97233L17.5928 10.7994L18.3875 8.96403ZM15.2541 8.49103L14.5381 9.54036L16.1902 10.6676L16.9062 9.61829L15.2541 8.49103ZM17.0209 11.7927L15.6009 12.9185L16.8434 14.4857L18.2634 13.3599L17.0209 11.7927ZM15.5969 14.4825L16.6539 15.3295L17.9045 13.7687L16.8475 12.9218L15.5969 14.4825ZM17.9002 15.3329L19.3202 14.2079L18.0782 12.6403L16.6582 13.7653L17.9002 15.3329ZM19.3248 12.644L18.2678 11.7962L17.0165 13.3564L18.0735 14.2042L19.3248 12.644ZM15.2817 13.0667C14.0075 13.1619 10.5286 13.0951 6.71506 10.0746L5.47329 11.6424C9.78374 15.0565 13.8049 15.1826 15.4307 15.0611L15.2817 13.0667ZM4.41518 12.4893C9.09601 16.1977 13.5864 16.3992 15.5704 16.2515L15.4219 14.257C13.788 14.3786 9.84033 14.2358 5.65716 10.9217L4.41518 12.4893ZM16.4893 15.1374L16.3493 13.9471L14.363 14.1807L14.503 15.371L16.4893 15.1374ZM6.71525 10.0748C3.03519 7.15856 2.55615 4.82609 2.49863 4.02118L0.503717 4.16374C0.606195 5.59771 1.41116 8.42345 5.4731 11.6423L6.71525 10.0748ZM1.45601 3.09348L-0.0419903 3.1612L0.0483372 5.15916L1.54634 5.09144L1.45601 3.09348ZM-0.994316 4.231C-0.871958 5.95461 0.0862606 9.0602 4.41525 12.4893L5.6571 10.9216C1.71009 7.79503 1.07831 5.18309 1.00066 4.08937L-0.994316 4.231ZM8.09099 6.71772L8.37799 6.48985L7.13436 4.92353L6.84736 5.1514L8.09099 6.71772ZM8.38184 4.9266L7.32584 4.07964L6.07451 5.63983L7.13051 6.48678L8.38184 4.9266ZM6.07969 4.07552L5.79269 4.30259L7.03365 5.87103L7.32065 5.64396L6.07969 4.07552ZM5.78715 5.86662L6.84315 6.71437L8.0952 5.15476L7.0392 4.30701L5.78715 5.86662ZM8.71314 2.12592L7.45314 0.784185L5.99521 2.15329L7.25521 3.49503L8.71314 2.12592ZM6.21153 0.610138L5.01053 1.32722L6.03582 3.04442L7.23682 2.32734L6.21153 0.610138ZM4.79441 2.87059L6.05441 4.21153L7.51193 2.84199L6.25193 1.50105L4.79441 2.87059ZM7.2954 4.38561L8.4964 3.66933L7.47195 1.95163L6.27095 2.66791L7.2954 4.38561ZM1.86246 0.392289L0.292463 1.63523L1.53388 3.20331L3.10388 1.96037L1.86246 0.392289ZM0.287872 3.19965L1.34587 4.0474L2.59648 2.48664L1.53848 1.63889L0.287872 3.19965ZM2.59213 4.05087L4.16113 2.80793L2.91922 1.24023L1.35022 2.48317L2.59213 4.05087ZM7.56576 4.72973C7.30131 4.51823 7.16775 4.41142 7.10057 4.35789C7.06912 4.33284 7.04626 4.31469 7.03089 4.30281C7.02653 4.29944 7.01948 4.29403 7.01122 4.28789C7.00638 4.28429 6.98567 4.26884 6.95863 4.2512C6.94615 4.24306 6.91457 4.22272 6.87213 4.2007C6.85619 4.19243 6.72203 4.11896 6.53364 4.09574C6.42713 4.08261 6.22798 4.07561 6.00594 4.17405C5.75761 4.28414 5.59659 4.47391 5.50915 4.65661C5.43445 4.81273 5.41965 4.94917 5.41518 4.99888C5.41241 5.02974 5.41167 5.05438 5.41139 5.06741C5.41125 5.07438 5.4112 5.07999 5.41119 5.08325C5.41118 5.08454 5.41118 5.08648 5.41117 5.08712C5.41117 5.08776 5.41117 5.0884 5.41117 5.08841H7.41117C7.41117 5.078 7.41192 5.12482 7.40717 5.17779C7.40271 5.22746 7.38792 5.36385 7.31323 5.51993C7.22581 5.70261 7.06481 5.89235 6.81652 6.00242C6.59451 6.10085 6.39541 6.09384 6.28897 6.08072C6.1007 6.05751 5.96674 5.98412 5.95109 5.976C5.90894 5.95413 5.87775 5.93402 5.86579 5.92622C5.83979 5.90925 5.82063 5.8949 5.81811 5.89303C5.81218 5.88863 5.80824 5.88557 5.80802 5.8854C5.80736 5.8849 5.80984 5.88681 5.81854 5.8937C5.82661 5.90008 5.83805 5.90917 5.85428 5.9221C5.91959 5.97414 6.05104 6.07926 6.31659 6.29165L7.56576 4.72973ZM6.41117 4.08841H6.40917V6.08841H6.41117V4.08841ZM5.68108 4.40293L5.67808 4.40612L7.13427 5.77707L7.13727 5.77388L5.68108 4.40293ZM5.77526 4.31574C5.67994 4.39325 5.59077 4.4805 5.51026 4.57733L7.04809 5.85604C7.0421 5.86324 7.03797 5.86672 7.03709 5.86745L5.77526 4.31574ZM5.51618 4.57028C5.41523 4.68943 5.30495 4.84589 5.21179 5.04333L7.02056 5.89677C7.0274 5.88228 7.03511 5.87142 7.04217 5.86308L5.51618 4.57028ZM5.20261 5.06337C4.99552 5.52856 4.94013 6.04175 5.05243 6.54228L7.00392 6.10448C6.98802 6.0336 6.99329 5.95862 7.02974 5.87674L5.20261 5.06337ZM5.04656 6.51424C5.25104 7.56594 6.08727 8.66752 7.66303 9.91644L8.90532 8.34905C7.42908 7.17901 7.07331 6.45921 7.00979 6.13252L5.04656 6.51424ZM9.96291 7.50098C8.58398 6.40922 8.48456 5.91194 8.49191 5.94986L6.52844 6.33039C6.66179 7.01847 7.24237 7.89798 8.72144 9.06901L9.96291 7.50098ZM8.49185 5.94959C8.50019 5.99254 8.51311 6.14703 8.40977 6.34829L6.63058 5.43478C6.50924 5.67111 6.46016 5.97857 6.52849 6.33066L8.49185 5.94959ZM8.43269 6.30057C8.4253 6.31706 8.41862 6.33055 8.41403 6.33954C8.41307 6.34142 8.41234 6.34284 8.41223 6.34306C8.41159 6.34429 8.41309 6.34139 8.41429 6.33905C8.41521 6.33726 8.41994 6.32804 8.42562 6.31625C8.42757 6.31218 8.44716 6.27231 8.46598 6.21982C8.47326 6.19954 8.49999 6.12504 8.51441 6.02527C8.5215 5.97625 8.53316 5.8729 8.51505 5.74349C8.49749 5.6181 8.43711 5.36843 8.21145 5.15523C7.96482 4.92222 7.67297 4.87385 7.47677 4.88326C7.30222 4.89164 7.17301 4.94397 7.11689 4.96903C7.00191 5.02038 6.9241 5.08223 6.90692 5.09572C6.85656 5.13527 6.82069 5.17183 6.81777 5.17474C6.80735 5.18514 6.79938 5.19358 6.79755 5.19551C6.78518 5.20858 6.79948 5.19347 6.8046 5.18822L8.23575 6.58529C8.24437 6.57646 8.26104 6.55876 8.25011 6.57031C8.24864 6.57186 8.24097 6.57999 8.23079 6.59014C8.22812 6.59281 8.19244 6.62919 8.14222 6.66863C8.1251 6.68207 8.04735 6.74388 7.93241 6.79521C7.87631 6.82026 7.74712 6.87259 7.57259 6.88097C7.3764 6.89038 7.08456 6.84202 6.83794 6.60901C6.61229 6.39582 6.55192 6.14616 6.53436 6.02079C6.51625 5.89139 6.52791 5.78807 6.53499 5.73907C6.54941 5.63936 6.57612 5.56492 6.58336 5.54473C6.60212 5.49241 6.62161 5.45279 6.62341 5.44904C6.62893 5.43757 6.63347 5.42874 6.63414 5.42742C6.63511 5.42554 6.63633 5.42317 6.63537 5.42503C6.63494 5.42585 6.63385 5.42796 6.6325 5.43061C6.62635 5.44267 6.61755 5.46044 6.60765 5.4825L8.43269 6.30057ZM6.73861 5.26293C6.76978 5.22388 6.80289 5.19009 6.83641 5.16113L8.14394 6.67453C8.19973 6.62632 8.25293 6.57173 8.30173 6.51058L6.73861 5.26293ZM6.86704 5.13571L6.85704 5.14368L8.1033 6.70792L8.1133 6.69995L6.86704 5.13571ZM6.87189 5.13208C6.88556 5.1216 6.89935 5.11173 6.91318 5.10245L8.02716 6.76349C8.04786 6.7496 8.06832 6.73495 8.08845 6.71952L6.87189 5.13208ZM8.09404 5.15144L7.56504 4.72916L6.31731 6.29222L6.84631 6.7145L8.09404 5.15144ZM7.66328 9.91664C9.27139 11.1904 10.5905 11.7764 11.7056 11.9118L11.9467 9.92637C11.3298 9.85145 10.351 9.49408 8.90507 8.34885L7.66328 9.91664ZM11.7048 11.9117C12.2772 11.9817 12.7728 11.9298 13.1818 11.8084L12.6125 9.89113C12.4795 9.93062 12.2611 9.96482 11.9476 9.92647L11.7048 11.9117ZM13.18 11.8089C13.415 11.7396 13.6417 11.6392 13.8505 11.5076L12.7839 9.81581C12.7392 9.84398 12.6824 9.87052 12.6143 9.89059L13.18 11.8089ZM13.8716 11.494C13.9077 11.4699 13.9432 11.4444 13.978 11.4176L12.7564 9.83409C12.7589 9.83215 12.761 9.83063 12.7628 9.82948L13.8716 11.494ZM13.9311 11.4517L13.9381 11.4469L12.8102 9.79527L12.8032 9.80005L13.9311 11.4517ZM13.9973 11.4032L14.0003 11.4008L12.754 9.83659L12.751 9.83898L13.9973 11.4032ZM14.2243 11.1501L14.2253 11.1485L12.531 10.0857L12.53 10.0873L14.2243 11.1501ZM13.3782 10.6171C14.0013 11.3992 14.1811 11.2131 14.3072 10.9871C14.3329 10.9147 14.3731 10.7182 14.3779 10.5943C14.3736 10.4059 14.3167 10.2672 14.2938 10.2151C14.2439 10.1013 14.1835 10.024 14.171 10.0077C14.1319 9.95678 14.0962 9.92098 14.09 9.91472C14.0678 9.89221 14.0492 9.87564 14.0459 9.87272C14.0342 9.86222 14.0246 9.85413 14.0225 9.85231C14.0156 9.84649 14.0089 9.84097 14.004 9.83694C13.9928 9.82781 13.9741 9.81258 13.9407 9.78565C13.8734 9.73126 13.7402 9.62416 13.4755 9.41205L12.2249 10.9728C12.4892 11.1846 12.62 11.2898 12.6844 11.3418C12.7169 11.368 12.731 11.3795 12.7362 11.3838C12.7394 11.3864 12.7368 11.3843 12.7319 11.3802C12.7307 11.3792 12.7216 11.3715 12.7102 11.3613C12.707 11.3585 12.6885 11.3419 12.6663 11.3195C12.6602 11.3132 12.6245 11.2774 12.5853 11.2265C12.5728 11.2103 12.5125 11.1329 12.4625 11.0191C12.4396 10.967 12.3827 10.8283 12.3784 10.6399C12.3833 10.516 12.4235 10.3195 12.4491 10.2471C12.5752 10.0211 12.7551 9.83496 13.3782 10.6171ZM13.4748 9.41147C13.2102 9.19987 13.0808 9.09559 13.0183 9.04482C12.9863 9.01889 12.9749 9.00943 12.9729 9.00775C12.9705 9.00571 12.9783 9.01221 12.9895 9.02216C12.9919 9.02428 13.0123 9.04227 13.0365 9.06698C13.0412 9.0717 13.0857 9.11597 13.1321 9.17979C13.1404 9.19123 13.2318 9.31053 13.2836 9.4892C13.3085 9.57524 13.3693 9.82249 13.261 10.115C13.2018 10.2747 13.1008 10.4218 12.962 10.5371C12.897 10.5867 12.7954 10.6492 12.762 10.6663C12.6726 10.7047 12.5799 10.7342 12.3232 9.76776C12.0665 8.80127 11.9738 8.83079 11.8844 8.86917C11.851 8.88628 11.7493 8.94879 11.6843 8.99843C11.5455 9.11369 11.4445 9.26082 11.3854 9.42052C11.2771 9.71303 11.3378 9.96029 11.3628 10.0463C11.4146 10.225 11.506 10.3443 11.5143 10.3558C11.5607 10.4196 11.6053 10.4639 11.61 10.4688C11.6345 10.4937 11.6553 10.5121 11.6587 10.5151C11.6717 10.5267 11.6835 10.5366 11.689 10.5413C11.703 10.553 11.724 10.5702 11.7576 10.5975C11.8261 10.6531 11.9602 10.7611 12.2256 10.9734L13.4748 9.41147ZM12.9463 10.5499L12.9483 10.5483L11.702 8.98406L11.7 8.98566L12.9463 10.5499ZM12.9485 10.5481L12.9505 10.5465L11.7038 8.98261L11.7018 8.98421L12.9485 10.5481ZM12.8802 10.5977L12.8862 10.5937L11.7801 8.92744L11.7741 8.93142L12.8802 10.5977ZM12.9563 10.5427L12.9663 10.5347L11.72 8.97052L11.71 8.97849L12.9563 10.5427ZM12.9249 10.566C12.9043 10.5807 12.8838 10.5935 12.8638 10.6046L11.8986 8.85288C11.8519 8.87858 11.8061 8.90733 11.7614 8.93925L12.9249 10.566ZM12.8683 10.6021C12.8623 10.6054 12.8569 10.6083 12.8585 10.6074C12.859 10.6072 12.8602 10.6065 12.8617 10.6057C12.8631 10.6049 12.8661 10.6033 12.8699 10.6012C12.8729 10.5996 12.881 10.5951 12.8913 10.589C12.8918 10.5888 12.9304 10.5668 12.9748 10.5345C12.9883 10.5247 13.0129 10.5064 13.0418 10.4813C13.0617 10.4641 13.1281 10.4062 13.1943 10.3157C13.2272 10.2707 13.2898 10.1779 13.3346 10.0452C13.38 9.91062 13.4297 9.663 13.3254 9.37979C13.1046 8.78048 12.5179 8.73371 12.4905 8.73086C12.3626 8.71756 12.2625 8.73291 12.236 8.73696C12.1948 8.74327 12.1624 8.7509 12.1453 8.75515C12.1107 8.76378 12.0841 8.77242 12.0742 8.77569C12.0517 8.78309 12.0344 8.78973 12.0305 8.79122C12.0239 8.79373 12.0187 8.79578 12.0166 8.79663C12.0072 8.80036 12.0291 8.79144 12.051 8.78396L12.6973 10.6767C12.7332 10.6644 12.7636 10.6519 12.7567 10.6546C12.7548 10.6554 12.7497 10.6574 12.7433 10.6599C12.7395 10.6613 12.7222 10.6679 12.6998 10.6753C12.6899 10.6786 12.6634 10.6872 12.6288 10.6958C12.6117 10.7001 12.5793 10.7077 12.5381 10.714C12.5116 10.7181 12.4115 10.7334 12.2836 10.7201C12.2562 10.7173 11.6695 10.6705 11.4487 10.0712C11.3444 9.78799 11.3941 9.54037 11.4396 9.40576C11.4843 9.27311 11.5469 9.18032 11.5798 9.1353C11.646 9.04479 11.7124 8.98693 11.7323 8.96966C11.7612 8.94459 11.7858 8.92631 11.7993 8.91649C11.8436 8.88425 11.8822 8.86228 11.8826 8.86208C11.8928 8.85611 11.9009 8.85165 11.9037 8.85008C11.9074 8.84807 11.9102 8.84653 11.9114 8.84588C11.9128 8.84516 11.9138 8.84461 11.914 8.84448C11.9155 8.84369 11.9116 8.84579 11.9081 8.84767C11.9041 8.84984 11.8994 8.85241 11.8941 8.85537L12.8683 10.6021ZM12.0985 8.76907C12.1166 8.76386 12.1369 8.75884 12.1576 8.75498C12.1769 8.75136 12.1915 8.74971 12.2008 8.74899C12.2194 8.74753 12.2123 8.75013 12.1746 8.74556L11.9337 10.731C12.2618 10.7708 12.4946 10.7361 12.6499 10.6916L12.0985 8.76907ZM12.1764 8.74578C12.0099 8.72527 11.3093 8.56772 9.96318 7.50119L8.72117 9.0688C10.231 10.2651 11.2705 10.6493 11.9319 10.7308L12.1764 8.74578ZM7.45232 0.782524C6.74084 0.0266886 5.73402 -0.370045 4.7516 -0.442993C3.76681 -0.516117 2.70086 -0.271864 1.86223 0.392477L3.10412 1.96018C3.48249 1.66045 4.02703 1.50871 4.6035 1.55152C5.18233 1.5945 5.6875 1.82561 5.99602 2.15336L7.45232 0.782524ZM4.16116 2.8079C4.19562 2.7806 4.30421 2.73045 4.47099 2.74216C4.63289 2.75353 4.74319 2.81609 4.79452 2.8707L6.25183 1.50094C5.79616 1.01614 5.18096 0.787094 4.61111 0.747073C4.04614 0.707396 3.41672 0.846077 2.91918 1.24026L4.16116 2.8079ZM6.03624 3.04417L7.23724 2.32629L6.21111 0.609592L5.01011 1.32747L6.03624 3.04417ZM2.49955 4.0209C2.50249 4.06137 2.49825 4.09692 2.49148 4.12435C2.4849 4.15102 2.4772 4.16507 2.47651 4.16628C2.47601 4.16717 2.48202 4.15637 2.50072 4.1355C2.51939 4.11466 2.54863 4.08611 2.592 4.05176L1.35034 2.48387C0.888787 2.84939 0.451055 3.42488 0.504795 4.16561L2.49955 4.0209ZM2.59612 2.48715L1.53712 1.6394L0.287232 3.20074L1.34623 4.04849L2.59612 2.48715ZM0.291163 1.63626C-0.372445 2.16204 -1.07883 3.05069 -0.994273 4.2316L1.00062 4.08877C0.983172 3.84508 1.12279 3.52903 1.53318 3.20387L0.291163 1.63626ZM0.0477772 5.15919L1.54678 5.09226L1.45757 3.09425L-0.0414304 3.16118L0.0477772 5.15919ZM15.599 12.92C15.4565 13.0336 15.3475 13.0627 15.2844 13.0673L15.4299 15.062C15.9568 15.0236 16.4399 14.8073 16.8453 14.4843L15.599 12.92ZM14.3639 14.1807L14.5029 15.3703L16.4894 15.1382L16.3504 13.9486L14.3639 14.1807ZM15.5708 16.2514C16.5378 16.1791 17.3242 15.7904 17.9008 15.334L16.6596 13.7658C16.3402 14.0185 15.9245 14.2194 15.4216 14.257L15.5708 16.2514ZM17.9055 13.7695L16.8475 12.9218L15.5969 14.4825L16.6549 15.3303L17.9055 13.7695ZM8.37699 6.49064C9.06706 5.94418 9.48812 5.1925 9.54826 4.37049C9.60828 3.55011 9.30188 2.75262 8.71415 2.12673L7.2562 3.49582C7.49746 3.75274 7.56907 4.01294 7.55359 4.22456C7.53823 4.43455 7.43029 4.68917 7.13536 4.92273L8.37699 6.49064ZM7.47295 1.95242L6.27195 2.66871L7.2964 4.38641L8.4974 3.67013L7.47295 1.95242ZM6.05497 4.21185C6.07208 4.23009 6.06994 4.23413 6.06455 4.2197C6.05899 4.20486 6.05396 4.18068 6.05621 4.15127C6.05843 4.12218 6.06692 4.099 6.07508 4.08429C6.08303 4.06994 6.08727 4.06949 6.07692 4.07772L7.32143 5.64335C7.7318 5.31714 8.00905 4.84436 8.05039 4.30375C8.09203 3.75916 7.8871 3.24151 7.51338 2.84327L6.05497 4.21185ZM6.07423 5.6412L7.13123 6.48736L8.38112 4.92602L7.32412 4.07987L6.07423 5.6412ZM16.8788 11.8503C16.9602 11.8855 16.9952 11.9198 17.0057 11.9318C17.0161 11.9437 17.0071 11.9383 17.0017 11.9115C16.9962 11.8841 16.9983 11.8507 17.0099 11.8204C17.0215 11.79 17.0344 11.7836 17.022 11.7934L18.2643 13.3608C18.8312 12.9115 19.1021 12.2175 18.9631 11.5205C18.8265 10.8351 18.3291 10.2988 17.6735 10.015L16.8788 11.8503ZM17.0182 13.3578L18.0762 14.2047L19.3261 12.6434L18.2681 11.7965L17.0182 13.3578ZM19.3223 14.2078C20.2682 13.4581 20.6653 12.3752 20.4409 11.3138C20.2229 10.2822 19.4538 9.42575 18.3883 8.96472L17.5941 10.8003C18.1656 11.0476 18.4215 11.4309 18.4842 11.7274C18.5406 11.9943 18.4742 12.328 18.08 12.6404L19.3223 14.2078ZM17.1646 9.31969L16.4496 10.3698L18.1028 11.4954L18.8178 10.4453L17.1646 9.31969ZM14.4563 11.0399C14.4785 11.0223 14.5423 10.9868 14.6509 10.9754C14.7564 10.9643 14.8696 10.9801 14.9689 11.0229L15.7614 9.18664C14.9339 8.82952 13.918 8.91449 13.214 9.47248L14.4563 11.0399ZM16.1912 10.6684L16.9072 9.61909L15.2551 8.49183L14.5391 9.54116L16.1912 10.6684ZM16.479 8.13801C15.0957 7.53813 13.3533 7.67731 12.1566 8.62424L13.3977 10.1926C13.953 9.75318 14.8986 9.63262 15.6833 9.97291L16.479 8.13801ZM12.1519 10.1888L13.2099 11.0366L14.4605 9.47579L13.4025 8.62804L12.1519 10.1888Z"
                                            fill="#1D84C5" mask="url(#path-1-inside-1_0_441)" />
                                    </svg>
                                    <div class="address-info">
                                        <h6>OUR ADDRESS</h6>
                                        <p>411 University St, Seattle, USA</p>
                                    </div>
                                </div>
                                <div class="social-media">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"
                                        fill="none">
                                        <path
                                            d="M10.7076 7.58496C9.91199 7.58496 9.14892 7.90103 8.58631 8.46364C8.02371 9.02625 7.70763 9.78931 7.70763 10.585C7.70763 11.3806 8.02371 12.1437 8.58631 12.7063C9.14892 13.2689 9.91199 13.585 10.7076 13.585C11.5033 13.585 12.2663 13.2689 12.829 12.7063C13.3916 12.1437 13.7076 11.3806 13.7076 10.585C13.7076 9.78931 13.3916 9.02625 12.829 8.46364C12.2663 7.90103 11.5033 7.58496 10.7076 7.58496ZM10.7076 5.58496C12.0337 5.58496 13.3055 6.11174 14.2432 7.04943C15.1809 7.98711 15.7076 9.25888 15.7076 10.585C15.7076 11.911 15.1809 13.1828 14.2432 14.1205C13.3055 15.0582 12.0337 15.585 10.7076 15.585C9.38155 15.585 8.10978 15.0582 7.1721 14.1205C6.23442 13.1828 5.70763 11.911 5.70763 10.585C5.70763 9.25888 6.23442 7.98711 7.1721 7.04943C8.10978 6.11174 9.38155 5.58496 10.7076 5.58496ZM17.2076 5.33496C17.2076 5.66648 17.0759 5.98442 16.8415 6.21884C16.6071 6.45326 16.2892 6.58496 15.9576 6.58496C15.6261 6.58496 15.3082 6.45326 15.0738 6.21884C14.8393 5.98442 14.7076 5.66648 14.7076 5.33496C14.7076 5.00344 14.8393 4.6855 15.0738 4.45108C15.3082 4.21666 15.6261 4.08496 15.9576 4.08496C16.2892 4.08496 16.6071 4.21666 16.8415 4.45108C17.0759 4.6855 17.2076 5.00344 17.2076 5.33496ZM10.7076 2.58496C8.23363 2.58496 7.82963 2.59196 6.67863 2.64296C5.89463 2.67996 5.36863 2.78496 4.88063 2.97496C4.47247 3.12533 4.10336 3.3656 3.80063 3.67796C3.48791 3.98058 3.2473 4.3497 3.09663 4.75796C2.90663 5.24796 2.80163 5.77296 2.76563 6.55596C2.71363 7.65996 2.70663 8.04596 2.70663 10.585C2.70663 13.06 2.71363 13.463 2.76463 14.614C2.80163 15.397 2.90663 15.924 3.09563 16.411C3.26563 16.846 3.46563 17.159 3.79763 17.491C4.13463 17.827 4.44763 18.028 4.87763 18.194C5.37163 18.385 5.89763 18.491 6.67763 18.527C7.78163 18.579 8.16763 18.585 10.7066 18.585C13.1816 18.585 13.5846 18.578 14.7356 18.527C15.5176 18.49 16.0436 18.385 16.5326 18.196C16.9408 18.0456 17.3099 17.8053 17.6126 17.493C17.9496 17.157 18.1506 16.844 18.3166 16.413C18.5066 15.921 18.6126 15.395 18.6486 14.613C18.7006 13.51 18.7066 13.123 18.7066 10.585C18.7066 8.11096 18.6996 7.70696 18.6486 6.55596C18.6116 5.77396 18.5056 5.24596 18.3166 4.75796C18.1663 4.34979 17.926 3.98068 17.6136 3.67796C17.311 3.36523 16.9419 3.12462 16.5336 2.97396C16.0436 2.78396 15.5176 2.67896 14.7356 2.64296C13.6326 2.59096 13.2466 2.58496 10.7066 2.58496M10.7066 0.584961C13.4236 0.584961 13.7626 0.594961 14.8296 0.644961C15.8936 0.694961 16.6196 0.861961 17.2566 1.10996C17.9166 1.36396 18.4726 1.70796 19.0286 2.26296C19.5373 2.76269 19.9308 3.36743 20.1816 4.03496C20.4286 4.67196 20.5966 5.39796 20.6466 6.46296C20.6936 7.52896 20.7066 7.86796 20.7066 10.585C20.7066 13.302 20.6966 13.641 20.6466 14.707C20.5966 15.773 20.4286 16.497 20.1816 17.135C19.9308 17.8025 19.5373 18.4072 19.0286 18.907C18.5289 19.4157 17.9242 19.8091 17.2566 20.06C16.6196 20.307 15.8936 20.475 14.8296 20.525C13.7626 20.572 13.4236 20.585 10.7066 20.585C7.98963 20.585 7.65063 20.575 6.58363 20.525C5.51963 20.475 4.79463 20.307 4.15663 20.06C3.48911 19.8091 2.88437 19.4157 2.38463 18.907C1.87594 18.4072 1.48245 17.8025 1.23163 17.135C0.983635 16.498 0.816634 15.772 0.766634 14.707C0.718634 13.641 0.706635 13.302 0.706635 10.585C0.706635 7.86796 0.716634 7.52896 0.766634 6.46296C0.816634 5.39696 0.983635 4.67296 1.23163 4.03496C1.48245 3.36743 1.87594 2.76269 2.38463 2.26296C2.88437 1.75427 3.48911 1.36078 4.15663 1.10996C4.79363 0.861961 5.51863 0.694961 6.58363 0.644961C7.65163 0.597961 7.99063 0.584961 10.7076 0.584961"
                                            fill="#1D84C5" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19"
                                        fill="none">
                                        <path
                                            d="M16.7066 0.584961C17.2371 0.584961 17.7458 0.795675 18.1208 1.17075C18.4959 1.54582 18.7066 2.05453 18.7066 2.58496V16.585C18.7066 17.1154 18.4959 17.6241 18.1208 17.9992C17.7458 18.3742 17.2371 18.585 16.7066 18.585H2.70663C2.1762 18.585 1.66749 18.3742 1.29242 17.9992C0.917348 17.6241 0.706635 17.1154 0.706635 16.585V2.58496C0.706635 2.05453 0.917348 1.54582 1.29242 1.17075C1.66749 0.795675 2.1762 0.584961 2.70663 0.584961H16.7066ZM16.2066 16.085V10.785C16.2066 9.92035 15.8632 9.09116 15.2518 8.47979C14.6404 7.86842 13.8112 7.52496 12.9466 7.52496C12.0966 7.52496 11.1066 8.04496 10.6266 8.82496V7.71496H7.83663V16.085H10.6266V11.155C10.6266 10.385 11.2466 9.75496 12.0166 9.75496C12.3879 9.75496 12.744 9.90246 13.0066 10.165C13.2691 10.4276 13.4166 10.7837 13.4166 11.155V16.085H16.2066ZM4.58663 6.14496C5.0322 6.14496 5.45951 5.96796 5.77457 5.6529C6.08964 5.33784 6.26663 4.91052 6.26663 4.46496C6.26663 3.53496 5.51663 2.77496 4.58663 2.77496C4.13842 2.77496 3.70856 2.95301 3.39162 3.26995C3.07469 3.58689 2.89663 4.01675 2.89663 4.46496C2.89663 5.39496 3.65663 6.14496 4.58663 6.14496ZM5.97663 16.085V7.71496H3.20663V16.085H5.97663Z"
                                            fill="#1D84C5" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="20" viewBox="0 0 12 20"
                                        fill="none">
                                        <path
                                            d="M3.10263 19.585H7.10263V11.575H10.7066L11.1026 7.59496H7.10263V5.58496C7.10263 5.31974 7.20799 5.06539 7.39553 4.87785C7.58306 4.69032 7.83742 4.58496 8.10263 4.58496H11.1026V0.584961H8.10263C6.77655 0.584961 5.50478 1.11175 4.5671 2.04943C3.62942 2.98711 3.10263 4.25888 3.10263 5.58496V7.59496H1.10263L0.706635 11.575H3.10263V19.585Z"
                                            fill="#1D84C5" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19"
                                        fill="none">
                                        <path
                                            d="M11.4215 8.20684L18.1223 0.584961H16.5343L10.7161 7.20277L6.06897 0.584961H0.708984L7.73635 10.5924L0.708984 18.585H2.29703L8.44142 11.5963L13.349 18.585H18.709L11.4211 8.20684H11.4215ZM9.24651 10.6804L8.5344 9.68396L2.86916 1.75468H5.30829L9.88001 8.15396L10.592 9.15043L16.535 17.4684H14.0962L9.24651 10.6809V10.6804Z"
                                            fill="#1D84C5" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid-max">
        <div class="google-map-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15544.127155918764!2d80.1244362405913!3d13.097171895328328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526237656b9a93%3A0x37587770c442f4d5!2sAyappakkam%2C%20Chennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1721850667848!5m2!1sen!2sin"
                width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                            ${review.photo ?` <img src="${review.photo}" alt="" />`: ``}
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

    $(document).ready(function() {
        $("#contactForm").on('submit', function(e) {
            e.preventDefault();
            if ($(this).valid()) {
                $.ajax({
                    url: 'process_form.php',
                    type: 'POST',
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        $("#ContactSubmitMessage").html(
                            '<div class="alert alert-success my-1">' + data + '</div>');
                        $("#contactForm")[0].reset();
                    },
                    error: function() {
                        $("#ContactSubmitMessage").html(
                            '<div class="alert alert-danger">An error occurred.</div>');
                    }
                });
            }
        });

        $("#contactForm").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 10,
                },
                message: {
                    required: true,
                    minlength: 10
                }
            },
            messages: {
                name: {
                    required: "Please enter your name",
                    minlength: "Your name must consist of at least 2 characters"
                },
                email: {
                    required: "Please enter your email",
                    email: "Please enter a valid email address"
                },
                phone: {
                    required: "Please enter your phone number",
                    digits: "Please enter a valid phone number"
                },
                message: {
                    required: "Please write a message",
                    minlength: "Your message must consist of at least 10 characters"
                }
            }
        });
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