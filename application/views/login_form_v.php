<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css'); ?>">

    <title>Login Sayfası</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Giriş yap</h1>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="<?php echo base_url('giris'); ?>" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">kullanıcı Adı</label>
                        <input type="text" class="form-control" id="username" placeholder="Kullanıcı adı">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Şifre</label>
                        <input type="password" class="form-control" id="password" placeholder="Şifre">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('assets/js/jquery-3.6.0.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
    
</body>
</html>