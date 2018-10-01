<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>TheJobs - Register</title>

    <!-- Styles -->
    <link href="/view/assets/css/app.min.css" rel="stylesheet">
    <link href="/view/assets/css/custom.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/view/assets/img/apple-touch-icon.png">
    <link rel="icon" href="/view/assets/img/favicon.ico">
  </head>

  <body class="login-page">


    <main>

      <div class="login-block">
        <a href="/"><img src="/view/assets/img/logo.png" alt=""></a>
        <h1>Регистрация аккаунта</h1>

		<?php if ($register): ?>
			<div class="alert alert-success" role="alert">
			<strong>Успешно.</strong>
			<p>Вы зарегистрировались!</p>
		    </div>
		    
		    <hr class="hr-xs">
		    <button type="button" class="btn btn-block btn-primary">Личный кабинет</button>
		<?php else: ?>

        <form action="#" method="post">
          
          <?php if (isset($errors['empty'])) { echo (
          '<div class="alert alert-warning" role="alert">
			<strong>Ошибка данных!</strong>
			<p>'.$errors['empty'].'</p>
		  </div>'); } ?>
          
          <?php if (isset($errors['name'])) { echo (
          '<div class="alert alert-warning" role="alert">
			<strong>Ошибка в имени!</strong>
			<p>'.$errors['name'].'</p>
		  </div>'); } ?>

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-user"></i></span>
              <input type="text" name="name" class="form-control" placeholder="Ваше имя" value="<?php echo $name; ?>">
            </div>
          </div>
          
          <hr class="hr-xs">
          
          <?php if (isset($errors['email'])) { echo (
          '<div class="alert alert-warning" role="alert">
			<strong>Ошибка E-mail!</strong>
			<p>'.$errors['email'].'</p>
		  </div>'); } ?>
		  
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-email"></i></span>
              <input type="text" name="email" class="form-control" placeholder="Ваш e-mail" value="<?php echo $email; ?>">
            </div>
          </div>
          
          <hr class="hr-xs">
          
          <?php if (isset($errors['password'])) { echo (
          '<div class="alert alert-warning" role="alert">
			<strong>Ошибка пароля!</strong>
			<p>'.$errors['password'].'</p>
		  </div>'); } ?>

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-unlock"></i></span>
              <input type="password" name="password" class="form-control" placeholder="Придумайте пароль" value="<?php echo $password; ?>">
            </div>
          </div>

          <button class="btn btn-primary btn-block" type="submit" name="submit">Зарегистрироваться</button>

          <div class="login-footer">
            <h6>Или зарегестрироваться через</h6>
            <ul class="social-icons">
              <li><a class="vk" href="#"><i class="fa fa-vk"></i></a></li>
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            </ul>
          </div>

        </form>
        <?php endif; ?>
      </div>

      <div class="login-links">
        <p class="text-center">У вас уже есть аккаунт? <a class="txt-brand" href="/user/login/">Войти</a></p>
      </div>

    </main>


    <!-- Scripts -->
    <script src="/view/assets/js/app.min.js"></script>
    <script src="/view/assets/js/custom.js"></script>

  </body>
</html>