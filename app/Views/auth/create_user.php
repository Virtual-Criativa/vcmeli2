<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <title>VC Price | Login</title>


    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url();?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>/dist/css/adminlte.min.css">

    <link rel="icon" href="<?php echo base_url();?>/images/favicon.png">
    <style>.login-page, .register-page{height: auto}</style>
  </head>

  <body class="hold-transition login-page">
  <div class="register-box">
      <div class="card card-outline card-primary">
      <div class="card-header text-center">
      
        <h1><img src="<?php echo base_url();?>/images/vcprice-logo-login.png" alt="VC Price Monitoramento de Preço"></h1>
      </div>
        <div class="card-body">
          <p class="login-box-msg">Cria sua conta Grátis</p>
        <?php 
		if($message)
		{
		   echo '<div class="alert alert-warning" role="alert">'.$message.'</div>';
		}
		?>
          <section class="login_content">
            <?php 
            $attributes = array('class' => 'register', 'id' => 'register');
            echo form_open('/appAuth/create_user', $attributes); 
            ?>

              <div class="input-group mb-3">
                <input type="text" name="first_name" class="form-control" placeholder="Nome" required value="<?php echo set_value('first_name'); ?>" />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" name="last_name" class="form-control" placeholder="Sobrenome" required value="<?php echo set_value('last_name'); ?>" />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                  <input type="email" name="email" class="form-control" placeholder="Email" required value="<?php echo set_value('email'); ?>" />
                  <div class="input-group-append">
                  <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                  </div>
                  </div>  
              </div>
              <div class="input-group mb-3">
                <input type="text" name="phone" class="form-control" placeholder="Telefone" required value="<?php echo set_value('phone'); ?>" />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" name="company" class="form-control" placeholder="Empresa" required value="<?php echo set_value('company'); ?>" />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" name="password" class="form-control" placeholder="Senha" required />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
			        <div class="input-group mb-3">
                <input type="password" name="password_confirm" class="form-control" placeholder="Repita sua senha" required />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <input type="submit" class="btn btn-primary btn-block" name="Enviar" value="Enviar">
              </div>

              <?php echo form_close(); ?> 

              <a href="login" class="text-center">Já sou cliente</a>

              <div class="clearfix"></div>
              <br />

              <div>
                
                <p>©2020 Todos os direitos reservados. Virtual Criativa</p>
                <p>
                <a href="#" onclick="window.open('https://www.sitelock.com/verify.php?site=vcprice.com.br','SiteLock','width=600,height=600,left=160,top=170');" ><img class="img-responsive" alt="SiteLock" title="SiteLock" src="//shield.sitelock.com/shield/vcprice.com.br" /></a>
                </p>
              </div>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>
</body>



</html>
