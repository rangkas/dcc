<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SIPP</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php base_url(); ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php base_url(); ?>/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php base_url(); ?>/assets/css/app.css">
    <link rel="stylesheet" href="<?php base_url(); ?>/assets/css/pages/auth.css">
</head>

<body>

    <?php
    $session = session();
    $login = $session->getFlashdata('login');
    $username = $session->getFlashdata('nip_pegawai');
    $password = $session->getFlashdata('password');
    ?>

    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="/"><img style="width:100%; height:100%;" src="<?php base_url(); ?>/assets/images/logo/logo.png"></a>
                    </div>


                    <?php if (!empty(session()->getFlashdata('username'))) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo session()->getFlashdata('username'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty(session()->getFlashdata('password'))) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo session()->getFlashdata('password'); ?>
                        </div>
                    <?php endif; ?>


                    <form action="/auth/valid_login" method="post">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="username" class="form-control form-control-xl" placeholder="Username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" name="password" class="form-control form-control-xl" placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>

                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <!-- <p><a class="font-bold" href="lupa_password.php">Forgot password?</a>.</p> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
</body>

</html>