	
	<?php include (ROOT.'/view/layouts/header.php'); ?>

    <!-- Page header -->
    <header class="page-header bg-img size-lg" style="background-image: url(../../view/assets/img/bg-banner2.jpg)">
      <div class="container">
        <div class="header-detail">
          <img class="logo" src="../../view/assets/img/logo-google.jpg" alt="">
          <div class="hgroup">
            <h1><?php echo $jobItem['title']; ?></h1>
            <h3><a href="#"><?php echo $jobItem['company']; ?></a></h3>
          </div>
          <time datetime="2016-03-03 20:00"><?php echo $jobItem['date']; ?></time>
          <hr>
          <p class="lead"><?php echo $jobItem['description']; ?></p>

          <ul class="details cols-3">
            <li>
              <i class="fa fa-map-marker"></i>
              <span><?php echo $jobItem['location']; ?></span>
            </li>

            <li>
              <i class="fa fa-briefcase"></i>
              <span><?php echo $jobItem['worktime']; ?></span>
            </li>

            <li>
              <i class="fa fa-money"></i>
              <span><?php echo $jobItem['cash']; ?> в месяц</span>
            </li>

            <li>
              <i class="fa fa-clock-o"></i>
              <span><?php echo $jobItem['weektime']; ?> часов в неделю</span>
            </li>

            <li>
              <i class="fa fa-flask"></i>
              <span>Опыт работы <?php echo $jobItem['experience']; ?>+ / лет</span>
            </li>

            <li>
              <i class="fa fa-certificate"></i>
              <span><?php echo $jobItem['ascendancy']; ?></span>
            </li>
          </ul>

          <div class="button-group">
            <ul class="social-icons">
              <li class="title">Share on</li>
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>

            <div class="action-buttons">
              <a class="btn btn-primary" href="#">Apply with linkedin</a>
              <a class="btn btn-success" href="job-apply.html">Apply now</a>
            </div>
          </div>

        </div>
      </div>
    </header>
    <!-- END Page header -->


    <!-- Main container -->
    <main>

      <!-- Job detail -->
      <section>
        <div class="container">

          <?php echo $jobItem['details']; ?>

        </div>
      </section>
      <!-- END Job detail -->

    </main>
    <!-- END Main container -->

	<?php include (ROOT.'/view/layouts/footer.php'); ?>
