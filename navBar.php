<?php
$current_page = basename($_SERVER['PHP_SELF'], ".php");
?>

<div class="nav-container">
    <div class="container-fluid top-nav-bar h-100">
        <div class="row navigation h-100">
            <div class="col-12 d-flex flex-row align-items-center justify-content-between">
                <div class="logo-container div-center">
                    <a href="index.php">
                        <img class="nav-logo" src="images/logo.png" alt="" />
                    </a>
                </div>

                <div class="nav-control d-none d-md-block">
                    <ul class="main-nav text-decoration-none p-0 m-0 div-center">
                        <li class="hidenav <?php echo ($current_page == 'index') ? 'active' : ''; ?>">
                            <a href="index.php">Home <span class="nav-hover-line"></span></a>
                        </li>
                        <li class="hidenav <?php echo ($current_page == 'about') ? 'active' : ''; ?>">
                            <a href="about.php">About <span class="nav-hover-line"></span></a>
                        </li>
                        <li class="hidenav <?php echo ($current_page == 'services') ? 'active' : ''; ?>">
                            <a href="services.php">Service <span class="nav-hover-line"></span></a>
                        </li>
                        <li class="hidenav <?php echo ($current_page == 'projects'|| $current_page == 'project_page') ? 'active' : ''; ?>">
                            <a href="projects.php">Project <span class="nav-hover-line"></span></a>
                        </li>
                        <li class="hidenav <?php echo ($current_page == 'contact') ? 'active' : ''; ?>">
                            <a href="contact.php">Contact <span class="nav-hover-line"></span></a>
                        </li>
                    </ul>
                </div>

                <div class="mobile-nav d-md-none">
                    <input type="checkbox" id="main-navigation-toggle" class="btn btn--close"
                        title="Toggle main navigation" />
                    <label for="main-navigation-toggle">
                        <span></span>
                    </label>

                    <nav id="main-navigation" class="nav-main">
                        <ul class="menu">
                            <li class="menu__item">
                                <a class="menu__link" href="index.php">Home</a>
                            </li>
                            <li class="menu__item">
                                <a class="menu__link" href="about.php">About</a>
                            </li>
                            <li class="menu__item">
                                <a class="menu__link" href="services.php">Services</a>
                            </li>
                            <li class="menu__item">
                                <a class="menu__link" href="projects.php">Projects</a>
                            </li>
                            <li class="menu__item">
                                <a class="menu__link" href="contact.php">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>