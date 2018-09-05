  <style>
        img#logo_login {
          width: 150px;
          height: 150px;
          top: 50%;
          left: 50%;
          margin-top: 50px;
          margin-left: 70px;
          margin-bottom: 10px;
        }

        body {
            background: url("<?= base_url('include');?>/img/bk1.jpg") no-repeat center top fixed;

            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
  </head>

  <body>
    <div class="container">

      <form class="form-signin" role="form" method="post" action="<?= base_url('index.php/login/logar') ?>">
        <img src="<?= base_url('include');?>/img/aevb_logo.jpg" title="AEVB" id="logo_login">
        <input type="text" class="form-control" placeholder="Seu Usuario" required autofocus name="usuario">
        <input type="password" class="form-control" placeholder="Sua senha" required name="senha">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Fazer login</button>
        <? if (isset($erro)): ?>
			<div class="alert alert-danger" role="alert" style="margin-top: 10px;"><?= $erro; ?></div>
		<? endif; ?>
      </form>
    </div> <!-- /container -->
  </body>
</html>
