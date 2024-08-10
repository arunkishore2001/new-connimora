<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/styles.css" />
    <link rel="stylesheet" href="./css/contact.css" />
    <link rel="stylesheet" href="./css/navBar.css" />
    <link rel="stylesheet" href="./css/project.css" />
    <link rel="stylesheet" href="./css/about.css" />
    <link rel="stylesheet" href="./css/animation.css" />
    <link rel="stylesheet" href="./css/aos.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <script src="https://kit.fontawesome.com/22cd64f621.js" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

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
</head>

<body>
    <!-- Nav bar -->
    <?php include 'navBar.php'; ?>

    <div class="container-fluid-max secondary-pages-hero-section-container">
        <div class="row">
            <div class="col-md-6" data-animation="slideInRight">
                <div class="left-landing-image">
                    <div class="box">
                        <!-- Add your content here -->
                        <h1>Where Dimension Takes Shape</h1>
                    </div>
                    <img src="./images/about-img.png" alt="" />
                </div>
            </div>

            <div class="col-md-6" data-animation="slideInLeft">
                <div class="right-landing-image">
                    <div class="right-loca">
                        <div class="about-item">
                            <h6>Home</h6>
                        </div>
                        <div class="about-line"></div>
                        <div class="about-item">
                            <p>Contact</p>
                        </div>
                    </div>

                    <div class="right-box">
                        <h1>Contact</h1>
                        <div class="button-container mt-5 landing-btn working-btn">
                            <button class="custom-button">Learn More</button>
                            <div class="line learn-line"></div>
                        </div>
                    </div>
                    <img src="./images/contact-landing2.png" alt="" />
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid-max rolling-text"data-animation="slideInDown" >
        <div class="wrapper">
            <ul class="tabs-box">
                <li class="tab">FARM LAND</li>
                <li class="tab">INTERIOR</li>
                <li class="tab">HOTELS</li>
                <li class="tab">CONSTRUCTIONS</li>
                <li class="tab">RENOVATIONS</li>
                <li class="tab">Unboxing</li>
                <li class="tab">History</li>
                <li class="tab">Programming</li>
                <li class="tab">Gadgets</li>
                <li class="tab">Algorithms</li>
                <li class="tab">Comedy</li>
                <li class="tab">Gaming</li>
                <li class="tab">Share Market</li>
                <li class="tab">Smartphones</li>
                <li class="tab">Data Structure</li>
            </ul>
            <div class="icon">
                <i id="right" class="fa-solid fa-angle-right"></i>
            </div>
        </div>
    </div>

    <script src="./aos.js"></script>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script>
    document.addEventListener("DOMContentLoaded", () => {
        const tabsBox = document.querySelector(".tabs-box");

        // Clone the list items and append to create a continuous effect
        const items = tabsBox.innerHTML;
        tabsBox.innerHTML += items;

        // Adjust the width of the container dynamically
        const updateWidth = () => {
            const tabWidth = document.querySelector(".tab").offsetWidth;
            const totalTabs = document.querySelectorAll(".tab").length;
            tabsBox.style.width = `${tabWidth * totalTabs * 2}px`; // Double the total width
        };

        // Initial width adjustment
        updateWidth();

        // Adjust on window resize
        window.addEventListener("resize", updateWidth);
    });
    </script>
</body>

</html>