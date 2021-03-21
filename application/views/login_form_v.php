<!DOCTYPE html>
<html lang="tr">
<head>

    <?php $this->load->view('inc/head') ?>

    <title>Login Sayfası</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Giriş yap</h1>
        <hr>
        <?php if($this->session->userdata('error')): ?>
            <div class="row">    
                <div class="alert alert-danger col-md-6 col-md-offset-3">
                    <?php echo $this->session->userdata('error'); ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="row ">
            <div class="col-md-6 col-md-offset-3 well">
                <form action="<?php echo base_url('giris'); ?>" method="POST">
                    <div class="form-group">
                        <label for="username">Kullanıcı Adı</label>
                        <input type="text" class="form-control" name="username" placeholder="Kullanıcı adı">
                    </div>
                    <div class="form-group">
                        <label for="password">Şifre</label>
                        <input type="password" class="form-control" name="password" placeholder="Şifre">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

    
</body>
</html>