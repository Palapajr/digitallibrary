<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Digital Library - Perpustakaan Online Digital RSD Madani</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?= base_url() ?>public/assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url() ?>public/assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>public/assets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="<?= base_url() ?>public/assets/css/codebase.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="<?= base_url() ?>public/assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <div id="page-container" class="main-content-boxed">

            <!-- Main Container -->
            <main id="main-container">

                <!-- Hero -->
                <div class="row no-gutters hero-static">
                    <div class="col-xl-12 d-flex bg-gd-light hero-static">
                        <div class="content content-full d-flex align-items-center text-center">
                            <div class="w-100 px-20 py-100">
                                <div class="animated fadeIn mb-10" data-toggle="appear">
                                    <i class="si si-book-open fa-3x text-primary"></i>
                                </div>
                                <h1 class="font-w600 display-3 invisible mb-10" data-toggle="appear">
                                    Digital Library 
                                    <!-- <small class="font-w300 text-primary">Versi 1.0</small> -->
                                </h1>
                                <h2 class="h3 font-w300 text-muted mb-50 invisible" data-toggle="appear" data-timeout="150">Selamat Datang Di Sistem Digital Library. ingin membaca buku jurnal atau situs website? silakan klik pada button tertentu yang telah di tentukan di bawah ini</h2>
                                <div class="invisible" data-toggle="appear" data-timeout="300">
                                    <a class="btn btn-hero btn-noborder btn-success min-width-175 mb-10 mx-5" href="<?= site_url('Home/ebook') ?>">
                                        <i class="si si-book-open mr-5"></i> Jurnal Book
                                    </a>
                                    <a class="btn btn-hero btn-noborder btn-primary min-width-175 mb-10 mx-5" href="<?= site_url('Home/sitebook') ?>">
                                    <i class="si si-globe"></i> Site Book
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <!-- END Hero -->

                <!-- Call to Action -->
                <div class="bg-white">
                    <div class="content content-full text-center overflow-hidden">
                        <div class="py-100">
                            <h3 class="font-w700 mb-10">
                                Created by <a class="link-effect" href="">IT RSD Madani <i class="fa fa-heart text-danger"></i></a>
                            </h3>                            
                        </div>
                    </div>
                </div>
                <!-- END Call to Action -->

            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

       
        <script src="<?= base_url() ?>public/assets/js/codebase.core.min.js"></script>
        <script src="<?= base_url() ?>public/assets/js/codebase.app.min.js"></script>
    </body>
</html>
