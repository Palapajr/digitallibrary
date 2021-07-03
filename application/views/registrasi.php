<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Codebase - Bootstrap 4 Admin Template &amp; UI Framework</title>

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

                <!-- Page Content -->
                <div class="bg-image" style="background-image: url('<?= base_url() ?>public/assets/media/photos/photo34@2x.jpg');">
                    <div class="row mx-0 bg-earth-op">
                        <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                            <div class="p-30 invisible" data-toggle="appear">
                                <p class="font-size-h3 font-w600 text-white mb-5">
                                    We're very happy you are joining our community!
                                </p>
                                <p class="font-size-h5 text-white">
                                    <i class="fa fa-angles-right"></i> Create your account today and receive 50% off.
                                </p>
                                <p class="font-italic text-white-op">
                                    Copyright &copy; <span class="js-year-copy">2017</span>
                                </p>
                            </div>
                        </div>
                        <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white">
                            <div class="content content-full">
                                <!-- Header -->
                                <div class="px-30 py-10">
                                    <a class="link-effect font-w700" href="index.html">
                                        <i class="si si-fire"></i>
                                        <span class="font-size-xl text-primary-dark">code</span><span class="font-size-xl">base</span>
                                    </a>
                                    <h1 class="h3 font-w700 mt-30 mb-10">Create New Account</h1>
                                    <h2 class="h5 font-w400 text-muted mb-0">Please add your details</h2>
                                </div>
                                <!-- END Header -->
  
                                <form class="js-validation-signup px-30" action="be_pages_auth_all.html" method="post">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="text" class="form-control" name="first_name" placeholder="FIRST NAME" value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>" required>
                                                <?php echo form_error('first_name','<p class="help-block">','</p>'); ?>
                                                <label for="first_name">First Name</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="text" class="form-control" name="last_name" placeholder="LAST NAME" value="<?php echo !empty($user['last_name'])?$user['last_name']:''; ?>" required>
                                                <?php echo form_error('last_name','<p class="help-block">','</p>'); ?>
                                                <label for="last_name">Last Name</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="email" class="form-control" name="email" placeholder="EMAIL" value="<?php echo !empty($user['email'])?$user['email']:''; ?>" required>
                                                <?php echo form_error('email','<p class="help-block">','</p>'); ?>
                                                <label for="email">Email</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="password" class="form-control" id="password" name="password">
                                                <?php echo form_error('password','<p class="help-block">','</p>'); ?>
                                                <label for="password">Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="password" class="form-control" id="conf_password" name="conf_password">
                                                <?php echo form_error('conf_password','<p class="help-block">','</p>'); ?>
                                                <label for="conf_password">Password Confirmation</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <label>Gender: </label>
                                    <?php 
                                        if(!empty($user['gender']) && $user['gender'] == 'Female'){ 
                                            $fcheck = 'checked="checked"'; 
                                            $mcheck = ''; 
                                        }else{ 
                                            $mcheck = 'checked="checked"'; 
                                            $fcheck = ''; 
                                        } 
                                    ?>
                                        <div class="col-6">
                                            <div class="form-material floating">
                                            <input type="radio" name="gender" value="Male" <?php echo $mcheck; ?>>
                                                <label class="form-check-label" for="gender">
                                                Male
                                                </label>
                                            </div>
                                        </div>
                                    
                                        <div class="col-6">
                                            <div class="form-material floating">
                                            <input type="radio" name="gender" value="Female" <?php echo $fcheck; ?>>
                                                <label class="form-check-label" for="gender">
                                                Female
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="text" name="phone" placeholder="PHONE NUMBER" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
                                                <?php echo form_error('phone','<p class="help-block">','</p>'); ?>
                                                <label for="signup-username">PHONE NUMBER</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-sm btn-hero btn-alt-success">
                                            <i class="fa fa-plus mr-10"></i> Create Account
                                        </button>
                                    </div>
                                </form>
                                <!-- END Sign Up Form -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->


        <!--
            Codebase JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out <?= base_url() ?>public/assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the <?= base_url() ?>public/assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            <?= base_url() ?>public/assets/js/core/jquery.min.js
            <?= base_url() ?>public/assets/js/core/bootstrap.bundle.min.js
            <?= base_url() ?>public/assets/js/core/simplebar.min.js
            <?= base_url() ?>public/assets/js/core/jquery-scrollLock.min.js
            <?= base_url() ?>public/assets/js/core/jquery.appear.min.js
            <?= base_url() ?>public/assets/js/core/jquery.countTo.min.js
            <?= base_url() ?>public/assets/js/core/js.cookie.min.js
        -->
        <script src="<?= base_url() ?>public/assets/js/codebase.core.min.js"></script>

        <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at <?= base_url() ?>public/assets/_es6/main/app.js
        -->
        <script src="<?= base_url() ?>public/assets/js/codebase.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="<?= base_url() ?>public/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="<?= base_url() ?>public/assets/js/pages/op_auth_signup.min.js"></script>

    </body>
</html>