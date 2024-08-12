<?php
include './admin_php/config.php';
include './admin_php/functions.php';




session_start();

$videoQuery = mysqli_query($conn, "SELECT * FROM video_links");
$result = mysqli_query($conn, "SELECT * FROM images");
$allImages = mysqli_fetch_all($result, MYSQLI_ASSOC);

$projectQuery = mysqli_query($conn, "SELECT DISTINCT project_name FROM images");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/about.css" />
    <link rel="stylesheet" href="./css/styles.css" />
    <link rel="stylesheet" href="./css/contact.css" />
    <link rel="stylesheet" href="./css/navBar.css" />
    <link rel="stylesheet" href="./css/about.css" />
    <link rel="stylesheet" href="./css/project.css" />
    <link rel="stylesheet" href="./css/animation.css" />
    <link rel="stylesheet" href="./css/aos.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="https://kit.fontawesome.com/22cd64f621.js" crossorigin="anonymous"></script>

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

    <div class="inside">
        <div class="float">
            <a href="./contact.html">
                <div class="trigger">
                    <i class="fa fa-send" aria-hidden="true"></i>
                </div>
            </a>
        </div>

        <div class="container-fluid-max secondary-pages-hero-section-container">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-landing-image" data-animation="slideInRight">
                        <div class="box">
                            <!-- Add your content here -->
                            <h1>Where Dimension Takes Shape</h1>
                        </div>
                        <img src="./images/project-left.jpg" alt="" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="right-landing-image" data-animation="slideInLeft">
                        <div class="right-loca">
                            <div class="about-item">
                                <h6>Home</h6>
                            </div>
                            <div class="about-line"></div>
                            <div class="about-item">
                                <p>Project</p>
                            </div>
                        </div>

                        <div class="right-box">
                            <h1>Project</h1>

                            <div class="button-container mt-5 landing-btn working-btn">
                                <button class="custom-button">Learn More</button>
                                <div class="line learn-line"></div>
                            </div>
                        </div>
                        <img src="./images/project-work.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid-max rolling-text" data-animation="slideInDown">
            <div class="wrapper">

            <ul class="tabs-box">
                    <li class="tab">FARM LAND</li>
                    <li class="tab">PROPERTY MANAGEMENT</li>
                    <li class="tab">RETAIL STORE</li>
                    <li class="tab">STAR MART</li>
                    <li class="tab">CAFE</li>
                    <li class="tab">RESORT</li>
                    <li class="tab">COMMERCIAL PROJECT</li>
    
                </ul>
                <div class="icon">
                   
                </div>
            </div>
        </div>


     


        <!----------------- New Added Project File----------------- -->



        <?php
    // Fetch the most recently updated project
    $recentProjectQuery = mysqli_query($conn, "SELECT * FROM images ORDER BY id DESC LIMIT 1");

    while ($recentProjectResult = mysqli_fetch_assoc($recentProjectQuery)) {
        $recentProjectName = $recentProjectResult['project_name'];

    // Fetch all images associated with this project
    $recentImageQuery = mysqli_query($conn, "SELECT * FROM images WHERE project_name = '$recentProjectName' ORDER BY id");
    $recentImages = mysqli_fetch_all($recentImageQuery, MYSQLI_ASSOC);
    
    if (count($recentImages) > 0) {
        $recentProjectAddress = $recentImages[0]['address']; // Assuming all images share the same address
        ?>

        <div class="container-fluid mb-5">
            <div class="desk-line"></div>
            <div class="about-page-heading">
                <h6 class="comman-sub-heading">[ Recent Project ]</h6>
                <h2 data-animation="slideInDown" class="m-0" data-animation-delay="200ms"><?php echo $recentProjectName; ?></h2>
                <p data-animation="slideInDown" class="mb-3" data-animation-delay="400ms">
                    <?php echo $recentProjectAddress; ?>
                </p>
            </div>
            <div class="images-gallery">
                <div id="gallery">
                    <?php foreach ($recentImages as $key => $recentImage) { ?>
                    <div class="img-responsive">
                        <img data-animation="zoomIn" loading='lazy'
                            src="<?php echo $recentImage['url']; ?>" alt="">
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <?php 
    }}?>


<div class="container-fluid-max mt-5">
        <div>
            <div class="yt-heading">
            <h6 class="comman-sub-heading">[ Project Videos ]</h6>
                    </div>
                    

            </div>
                       
    <div class="flex-container">
        <?php while ($video = mysqli_fetch_assoc($videoQuery)): ?>
            <div class="flex-item" data-animation="slideInDown">
                <?php
                // Extract video ID from the embed URL
                preg_match("/embed\/([^\?]+)/", $video['embed_url'], $matches);
                $video_id = $matches[1];
                ?>
                <a href="https://www.youtube.com/watch?v=<?php echo $video_id; ?>" target="_blank">
                    <img src="https://img.youtube.com/vi/<?php echo $video_id; ?>/hqdefault.jpg" class="img-fluid" alt="YouTube Video Thumbnail">
                </a>
            </div>
        <?php endwhile; ?>
    </div>
</div>

        <?php
            $i = 0;
          while ($projectResult = mysqli_fetch_assoc($projectQuery)) {
            $projectName = $projectResult['project_name'];
            $imageQuery = mysqli_query($conn, "SELECT * FROM images WHERE project_name = '$projectName' ORDER BY id LIMIT 2");
            $images = mysqli_fetch_all($imageQuery, MYSQLI_ASSOC);
            if (count($images) >= 2) {
              $imageUrl1 = $images[0]['url'];
              $imageAddress = $images[0]['address']; 
              $imageUrl2 = $images[1]['url'];
              $i++;?>
        <div class="container-fluid-max ">
            <div class="project-background" data-animation="slideInRight" data-animation-delay="200ms"></div>

            <div class="container-fluid project-detail ">
                <div class="row">
                    <div class="col-md-6" data-animation="slideInRight" data-animation-delay="400ms">
                        <div class="projeccts-contents-wrapper">
                            <div class="project-back-heading" data-animation="slideInRight"
                                data-animation-delay="500ms">
                                <h2><?php echo $projectName; ?></h2>
                                <h1>0<?php echo $i; ?></h1>
                            </div>
                            <div class="whole-project-readmore">
                                <div class="project-back-para" data-animation="slideInRight"
                                    data-animation-delay="600ms">
                                    <p><?php echo $imageAddress ?></p>
                                </div>
                                <div class="" data-animation="slideInRight" data-animation-delay="700ms">
                                    <a class="read-more"
                                        href="project_page.php?project=<?php echo urlencode($projectName); ?>&image=<?php echo urlencode($imageUrl1); ?>">
                                        <div class="project-line"></div>
                                        <h6>Read more &gt;&gt;</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="project-img">
                            <img data-animation="slideInRight" loading='lazy' data-animation-delay="200ms"
                                src="<?php echo $imageUrl1; ?>" alt="">
                            <img data-animation="slideInRight" loading='lazy' data-animation-delay="400ms"
                                src="<?php echo $imageUrl2; ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div data-animation="slideInUp" data-animation-delay="500ms" class="project-complete-line"></div>
        </div>
        <?php }
          } ?>

        <script src="./aos.js"></script>


        <!----------------- Ended Added Project File----------------- -->

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

        document.querySelectorAll(".project-item").forEach((item) => {
            item.addEventListener("mousemove", (e) => {
                const rect = item.getBoundingClientRect();
                const x = (e.clientX - rect.left) / rect.width;
                const y = (e.clientY - rect.top) / rect.height;

                const background = item.querySelector(".background-image");
                background.style.transform = `translate(-${x * 20}px, -${y * 20
            }px)`;
            });

            item.addEventListener("mouseleave", () => {
                const background = item.querySelector(".background-image");
                background.style.transform = `translate(0, 0)`;
            });
        });


        
        </script>
    </div>
</body>

</html>