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