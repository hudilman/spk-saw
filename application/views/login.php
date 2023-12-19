<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Web Metode SAW - SPK">
    <meta name="author" content="Mohamad Ilman Huda">

    <title><?php echo $this->lang->line('form_login_submit'); ?> | <?php echo $this->lang->line('title'); ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/startbootstrap-sb-admin-2/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/startbootstrap-sb-admin-2/'); ?>css/sb-admin-2.css" rel="stylesheet">
</head>

<body class="bg-gradient-info">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6">

                <div class="card" style="margin-top: 50px">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><?php echo $this->lang->line('welcome'); ?>!</h1>
                                        <small style="color: red;"><?php echo $this->session->flashdata('error'); ?></small>
                                    </div>
                                    <form class="user" action="<?php echo base_url('user/login'); ?>" method="POST">
                                        <div class="form-group">
                                            <input name="username" type="text" class="form-control form-control-user"
                                                id="username" placeholder="<?php echo $this->lang->line('form_login_phone'); ?>">
                                        </div>
                                        <div class="form-group">
                                            <input name = "password" type="password" class="form-control form-control-user"
                                                id="password" placeholder="<?php echo $this->lang->line('form_login_password'); ?>">
                                        </div>
                                        <div class="form-group">
                                            <!-- <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div> -->
                                        </div>
                                        <button class="btn btn-info btn-user btn-block">
                                            <?php echo $this->lang->line('form_login_submit'); ?>
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <!-- <a class="small" href="forgot-password.html">Forgot Password?</a> -->
                                    </div>
                                    <!-- <div class="text-center">
                                        <select class="form-control form-control-user" onchange="javascript:window.location.href='<?php echo base_url('language/switcher/'); ?>'+this.value;">
                                            <option value="english" <?php if($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>>English</option>
                                            <option value="tetun" <?php if($this->session->userdata('site_lang') == 'tetun') echo 'selected="selected"'; ?>>Tetun</option>
                                        </select>
                                        <div style="margin-top: 10px"></div>
                                        <a class="small" href="<?php echo base_url('payment/user/check'); ?>">
                                            <strong><?php echo $this->lang->line('payment_chek_history'); ?></strong>
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/startbootstrap-sb-admin-2/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/startbootstrap-sb-admin-2/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/startbootstrap-sb-admin-2/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/startbootstrap-sb-admin-2/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>