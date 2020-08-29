<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $this->page_title; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php $this->get_required_header_files() ?>

</head>
<body class="hold-transition login-page mt-md-n5">
<div class="container">
    <div class="row w-100">
        <div class="col-lg-6 mt-sm-n5 d-flex align-items-center justify-content-center text-center">
            <h1>Blood Bank Management System</h1>
        </div>
        <div class="col-lg-6 d-flex justify-content-center">
            <div class="login-box">
                <div class="login-logo">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="<?= IMG_DIR ?>logo/logo.png" alt="" width="50px" height="50px"
                            class="bg-primary rounded-circle mb-2">
                    </div>
                    <a href=""><b>Sign </b>In</a>
                </div>
                <!-- /.login-logo -->
                <div class="card">
                    <div class="card-body login-card-body">
                        <form action="login" method="post" class="mt-2">
                            <label class="font-weight-bold">Username</label>
                            <div class="input-group mb-1">
                                <input type="email" class="form-control">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <label class="font-weight-bold">Password</label>
                            <div class="input-group mb-4">
                                <input type="password" class="form-control">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success btn-block mb-3">Sign In</button>

                            <div class="d-flex flex-column">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">
                                        Remember Me
                                    </label>
                                </div>
                                <!--                    <p class="mb-1">-->
                                <!--                        <a href="forgot-password.html">I forgot my password</a>-->
                                <!--                    </p>-->
                            </div>

                        </form>
                    </div>
                    <!-- /.login-card-body -->
                </div>
            </div>
            <!-- /.login-box -->
        </div>
    </div>
</div>
<?php $this->get_required_footer_files() ?>
</body>
</html>
