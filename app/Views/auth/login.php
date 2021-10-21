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
  </head>

  <body class="hold-transition login-page">
  <div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      
      <h1><img src="<?php echo base_url();?>/images/vcprice-logo-login.png" alt="VC Price Monitoramento de Preço"></h1>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Faça o login para acessar</p>
        <?php echo $message;?>

        <?php 
        $attributes = array('class' => 'login', 'id' => 'login');
        echo form_open('AppAuth/login', $attributes); 
        ?>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="identity" required="" value="juliano@virtualcriativa.com.br<?php echo set_value('email'); ?>" />
          
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="Senha" name="password" required="" value="12345678<?php echo set_value('senha'); ?>" />
          
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
            <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
            <label for="remember">
                Lembrar acesso
              </label>
                
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Acessar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


      <p class="mb-1">
        <a href="forgot-password.html">Esqueci minha senha</a>
      </p>
      <p class="mb-0">
        <a href="<?php echo base_url();?>auth/create_user" class="text-center">Criar uma conta</a>
      </p>
      <div class="clearfix"></div>
      <br />

      <div>
        
        <p>©2020 Todos os direitos reservados. Virtual Criativa</p>
        <p>
        <a href="#" onclick="window.open('https://www.sitelock.com/verify.php?site=vcprice.com.br','SiteLock','width=600,height=600,left=160,top=170');" ><img class="img-responsive" alt="SiteLock" title="SiteLock" src="//shield.sitelock.com/shield/vcprice.com.br" /></a>
        </p>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url();?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>/dist/js/adminlte.min.js"></script>
</body>



</html>