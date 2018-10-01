<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>Вся работа</title>

    <!-- Styles -->
    <link href="/view/assets/css/app.min.css" rel="stylesheet">
    <link href="/view/assets/css/custom.css" rel="stylesheet">
    <!-- Только для страниц с текстовым редактором -->
    <link href="/view/assets/vendors/summernote/summernote.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/view/assets/img/apple-touch-icon.png">
    <link rel="icon" href="/view/assets/img/job-icon.png">
  </head>

  <body class="nav-on-header smart-nav">

    <!-- Navigation bar -->
    <nav class="navbar">
      <div class="container">

        <!-- Logo -->
        <div class="pull-left">
          <a class="navbar-toggle" href="#" data-toggle="offcanvas"><i class="ti-menu"></i></a>

          <div class="logo-wrapper">
            <!--a class="logo" href="/"><img src="/view/assets/img/logo.png" alt="logo"></a>
            <a class="logo-alt" href="/"><img src="/view/assets/img/logo-alt.png" alt="logo-alt"></a-->
            <a class="logo" href="/"><img src="/view/assets/img/job-alt.png" alt="logo"></a>
            <a class="logo-alt" href="/"><img src="/view/assets/img/job-alt.png" alt="logo-alt"></a>
          </div>

        </div>
        <!-- END Logo -->

		<?php if (!login_m::checkLogin()): ?>
        <!-- User account -->
        <div class="pull-right user-login">
          <a class="btn btn-sm btn-primary" href="/user/login/">Войти</a> или <a href="/user/register/">зарегистрироваться</a>
        </div>
        <!-- END User account -->
        <?php else: ?>
        <!-- User account -->
        <div class="pull-right">

          <div class="dropdown user-account">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown">
              <img src="/view/assets/img/logo-envato.png" alt="avatar">
              <img src="/view/assets/img/logo-envato.png" alt="avatar">
              <img src="/view/assets/img/logo-envato.png" alt="avatar">
            </a>

            <ul class="dropdown-menu dropdown-menu-right">
              <li><a href="user-login.html">Сообщения</a></li>
              <li><a href="user-register.html">Настройки</a></li>
              <li><a href="/user/logout/">Выйти</a></li>
            </ul>
          </div>

        </div>
        <!-- END User account -->
        <?php endif; ?>

        <!-- Navigation menu -->
        <ul class="nav-menu">
          <li>
            <a class="active" href="/">Главная</a>
          </li>
          <li>
            <a href="#">Вакансии</a>
            <ul>
              <li><a href="job-list-1.html">Browse jobs - 1</a></li>
              <li><a href="job-list-2.html">Browse jobs - 2</a></li>
              <li><a href="job-list-3.html">Browse jobs - 3</a></li>
              <li><a href="job-detail.html">Job detail</a></li>
              <li><a href="job-apply.html">Apply for job</a></li>
              <li><a href="job-add.html">Post a job</a></li>
              <li><a href="job-manage.html">Manage jobs</a></li>
              <li><a href="job-candidates.html">Candidates</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Резюме</a>
            <ul>
              <li><a href="resume-list.html">Browse resumes</a></li>
              <li><a href="resume-detail.html">Resume detail</a></li>
              <li><a href="resume-add.html">Create a resume</a></li>
              <li><a href="resume-manage.html">Manage resumes</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Компании</a>
            <ul>
              <li><a href="company-list.html">Browse companies</a></li>
              <li><a href="company-detail.html">Company detail</a></li>
              <li><a href="/company/add/">Создать компанию</a></li>
              <li><a href="/company/manage/">Управление компаниями</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Дополнительно</a>
            <ul>
              <li><a href="page-blog.html">Blog</a></li>
              <li><a href="page-post.html">Blog-post</a></li>
              <li><a href="page-about.html">About</a></li>
              <li><a href="page-contact.html">Contact</a></li>
              <li><a href="page-faq.html">FAQ</a></li>
              <li><a href="page-pricing.html">Pricing</a></li>
              <li><a href="page-typography.html">Typography</a></li>
              <li><a href="page-ui-elements.html">UI elements</a></li>
            </ul>
          </li>
        </ul>
        <!-- END Navigation menu -->

      </div>
    </nav>
    <!-- END Navigation bar -->