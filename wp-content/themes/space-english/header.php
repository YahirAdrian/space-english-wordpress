<?php require_once get_template_directory() . '/utils/utils.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description'); ?>"/>
        <?php wp_head(); ?>

        <style>
            .banner{
                background: linear-gradient(0deg, rgb(0 0 0 / 60%) 0%, rgba(0, 0, 0, 0.25) 100%), url('<?= ternaryArgs($args, 'image_url', 'http://space-english.com/wp-content/uploads/2024/06/studying-together.jpg'); ?>'), lightgray -12.493px -447.687px / 100.92% 204.8% no-repeat;
                background-position: bottom center, bottom;
                box-shadow: 0px 0px 8px 0px rgba(0, 0, 0, 0.25);
                background-size: cover;
                background-repeat: no-repeat;
            }
        </style>
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg bg-primary px-1 px-lg-4 navbar-dark position-fixed z-1 w-100">
            <a href="<?= get_site_url() . '/' ?>" class="navbar-brand d-flex align-items-center">
                <img src="<?php site_icon_url('small'); ?>" alt="Space English logo" width="64" height="64"/>
                <h1 class="font-nunito text-white fw-bold d-inline"><?= get_bloginfo('name') ?></h1>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-lg-end me-lg-4" id="navigation">
                <form class="d-flex mx-3" role="search" id="search-form">
                    <input class="form-control ms-2 ms-lg-4" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn-transparent" type="submit" id="search-button">
                        <img src="<?= get_template_directory_uri() . '/src/icons/search.svg' ?>" alt="Search icon" width="18" height="18"/>
                    </button>
                </form>
                <ul class="navbar-nav mt-3 mt-lg-0 mb-2 mb-lg-0 fw-bold">
                    <li class="nav-item mx-3 mx-lg-0">
                        <a href="/" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item dropdown mx-3 mx-lg-0">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Practice
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/practice/index.html#reading">Reading</a></li>
                            <li><a class="dropdown-item" href="/practice/index.html#listening">Listening</a></li>
                            <li><a class="dropdown-item" href="/practice/index.html#speaking">Speaking</a></li>
                            <li><a class="dropdown-item" href="/practice/index.html#writing">Writing</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/practice/index.html#vocabulary">Vocabulary</a></li>
                            <li><a class="dropdown-item" href="/practice/index.html#grammar">Grammar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mx-3 mx-lg-0">
                        <a href="#topics" class="nav-link">Topics</a>
                    </li>
                    <li class="nav-item mx-3 mx-lg-0">
                        <a href="#grammar" class="nav-link">Grammar</a>
                    </li>
                    <li class="nav-item mx-3 mx-lg-0">
                        <a href="#vocabulary" class="nav-link">Vocabulary</a>
                    </li>
                    <li class="nav-item mx-3 mx-lg-0">
                        <a href="/about-us" class="nav-link">About us</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="nav-block" style="width: 100%; height: 90px;"></div>

        <header class="container-fluid banner">
            <div class="header-card">
                <h2 class="fw-bold font-nunito"><?= ternaryArgs($args, 'title', 'English resources to practice together'); ?></h2>
                <p><?= ternaryArgs($args, 'description', 'We provide you specialized online tools to improve your English level.  <br/>Learning a new language has never been so easy and interesting until now!'); ?></p>
            </div>

        </header>