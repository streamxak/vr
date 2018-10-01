
	<?php include (ROOT.'/view/layouts/header.php'); ?>
	
    <!-- Site header -->
    <header class="site-header size-lg text-center" style="background-image: url(/view/assets/img/bg-banner1.jpg)">
      <div class="container">
        <div class="col-xs-12">
          <br><br>
          <h2>На сайте <mark><?php echo $jobcount; ?></mark> открытых вакансий!</h2>
          <h5 class="font-alt">Найди свою работу за одну минуту</h5>
          <br><br><br>
          <form class="header-job-search">
            <div class="input-keyword">
              <input type="text" class="form-control" placeholder="Название вакансии или компании" list="jobs" onClick="this.select();">
              <datalist id="jobs">
					<?php
						foreach ($joblist as $jobnum => $jobline) {
    						echo ('<option value="' . $jobline . '">');
						}
					?>
			  </datalist>
            </div>

            <div class="input-location">
              <input type="text" class="form-control" placeholder="Выберите город" list="cities" value="<?php if (isset($location)) echo $location['city']; ?>" onClick="this.select();">
              <datalist id="cities">
					<?php
						foreach ($citylist as $citynum => $cityline) {
    						echo ('<option value="' . $cityline . '">');
						}
					?>
			  </datalist>
            </div>

            <div class="btn-search">
              <button class="btn btn-primary" type="submit">Найти вакансии</button>
              <a href="/job">Расширенный поиск</a>
            </div>
          </form>
        </div>

      </div>
    </header>
    <!-- END Site header -->

    <!-- Main container -->
    <main>



      <!-- Recent jobs -->
      <section>
        <div class="container">
          <header class="section-header">
            <span>Срочно требуются</span>
            <h2>Свежие вакансии</h2>
          </header>

          <div class="row item-blocks-connected">

            <!-- Job item -->
            <div class="col-xs-12">
              <a class="item-block" href="job-detail.html">
                <header>
                  <img src="/view/assets/img/logo-google.jpg" alt="">
                  <div class="hgroup">
                    <h4>Senior front-end developer</h4>
                    <h5>Google</h5>
                  </div>
                  <div class="header-meta">
                    <span class="location">Menlo park, CA</span>
                    <span class="label label-success">Full-time</span>
                  </div>
                </header>
              </a>
            </div>
            <!-- END Job item -->


            <!-- Job item -->
            <div class="col-xs-12">
              <a class="item-block" href="job-detail.html">
                <header>
                  <img src="/view/assets/img/logo-linkedin.png" alt="">
                  <div class="hgroup">
                    <h4>Software Engineer (Entry or Senior)</h4>
                    <h5>Linkedin</h5>
                  </div>
                  <div class="header-meta">
                    <span class="location">Livermore, CA</span>
                    <span class="label label-warning">Part-time</span>
                  </div>
                </header>
              </a>
            </div>
            <!-- END Job item -->

            <!-- Job item -->
            <div class="col-xs-12">
              <a class="item-block" href="job-detail.html">
                <header>
                  <img src="/view/assets/img/logo-envato.png" alt="">
                  <div class="hgroup">
                    <h4>Full Stack Web Developer</h4>
                    <h5>Envato</h5>
                  </div>
                  <div class="header-meta">
                    <span class="location">San Francisco, CA</span>
                    <span class="label label-info">Freelance</span>
                  </div>
                </header>
              </a>
            </div>
            <!-- END Job item -->

            <!-- Job item -->
            <div class="col-xs-12">
              <a class="item-block" href="job-detail.html">
                <header>
                  <img src="/view/assets/img/logo-facebook.png" alt="">
                  <div class="hgroup">
                    <h4>Web Applications Developer</h4>
                    <h5>Facebook</h5>
                  </div>
                  <div class="header-meta">
                    <span class="location">Lexington, MA</span>
                    <span class="label label-danger">Internship</span>
                  </div>
                </header>
              </a>
            </div>
            <!-- END Job item -->

            <!-- Job item -->
            <div class="col-xs-12">
              <a class="item-block" href="job-detail.html">
                <header>
                  <img src="/view/assets/img/logo-microsoft.jpg" alt="">
                  <div class="hgroup">
                    <h4>Sr. SQL Server Developer</h4>
                    <h5>Microsoft</h5>
                  </div>
                  <div class="header-meta">
                    <span class="location">Palo Alto, CA</span>
                    <span class="label label-success">Remote</span>
                  </div>
                </header>
              </a>
            </div>
            <!-- END Job item -->

          </div>

          <br><br>
          <p class="text-center"><a class="btn btn-info" href="job-list.html">Browse all jobs</a></p>
        </div>
      </section>
      <!-- END Recent jobs -->


      <!-- Facts -->
      <section class="bg-img bg-repeat no-overlay section-sm" style="background-image: url(/view/assets/img/bg-pattern.png)">
        <div class="container">

          <div class="row">
            <div class="counter col-md-3 col-sm-6">
              <p><span data-from="0" data-to="<?php echo $jobcount; ?>"></span>+</p>
              <h6>Вакансий</h6>
            </div>

            <div class="counter col-md-3 col-sm-6">
              <p><span data-from="0" data-to="<?php echo $cvcount; ?>"></span>+</p>
              <h6>Резюме</h6>
            </div>

            <div class="counter col-md-3 col-sm-6">
              <p><span data-from="0" data-to="<?php echo $firmcount; ?>"></span>+</p>
              <h6>Компаний</h6>
            </div>

            <div class="counter col-md-3 col-sm-6">
              <p><span data-from="0" data-to="<?php echo $usercount; ?>"></span>+</p>
              <h6>Пользователей</h6>
            </div>
          </div>

        </div>
      </section>
      <!-- END Facts -->


      <!-- How it works -->
      <section>
        <div class="container">

          <div class="col-sm-12 col-md-6">
            <header class="section-header text-left">
              <span>Workflow</span>
              <h2>How it works</h2>
            </header>

            <p class="lead">Pellentesque et pulvinar orci. Suspendisse sed euismod purus. Pellentesque nunc ex, ultrices eu enim non, consectetur interdum nisl. Nam congue interdum mauris, sed ultrices augue lacinia in. Praesent turpis purus, faucibus in tempor vel, dictum ac eros.</p>
            <p>Nulla quis felis et orci luctus semper sit amet id dui. Aenean ultricies lectus nunc, vel rhoncus odio sagittis eu. Sed at felis eu tortor mattis imperdiet et sed tortor. Nullam ac porttitor arcu. Vivamus tristique elit id tempor lacinia. Donec auctor at nibh eget tincidunt. Nulla facilisi. Nunc condimentum dictum mattis.</p>
            
            
            <br><br>
            <a class="btn btn-primary" href="page-typography.html">Learn more</a>
          </div>

          <div class="col-sm-12 col-md-6 hidden-xs hidden-sm">
            <br>
            <img class="center-block" src="/view/assets/img/how-it-works.png" alt="how it works">
          </div>

        </div>
      </section>
      <!-- END How it works -->


      <!-- Categories -->
      <section class="bg-alt">
        <div class="container">
          <header class="section-header">
            <span>Categories</span>
            <h2>Popular categories</h2>
            <p>Here's the most popular categories</p>
          </header>

          <div class="category-grid">
            <a href="/job/it/">
              <i class="fa fa-laptop"></i>
              <h6>Информационные технологии</h6>
              <p>Дизайнер, Программист, Системный администратор, Менеджер проектов</p>
            </a>

            <a href="/job/marketing/">
              <i class="fa fa-line-chart"></i>
              <h6>Маркетинг, реклама и PR</h6>
              <p>Финансист, Аналитик, Менеджер по рекламе, SEO специалист, Копирайтер</p>
            </a>

            <a href="/job/trade/">
              <i class="fa fa-gavel"></i>
              <h6>Торговля, Продажи</h6>
              <p>Продавец, Торговый представитель, Менеджер, Маркетолог, Супервайзер</p>
            </a>

            <a href="/job/cook/">
              <i class="fa fa-cutlery"></i>
              <h6>Пищевая промышленность</h6>
              <p>Технолог, Повар, Кондитер, Самелье, Винодел, Пивовар, Кулинар</p>
            </a>

            <a href="/job/publishers/">
              <i class="fa fa-newspaper-o"></i>
              <h6>СМИ, издательство, полиграфия</h6>
              <p>Журналист, Верстальщик, Репортер, Обозреватель, Редактор, Критик</p>
            </a>

            <a href="/job/transport/">
              <i class="fa fa-bus"></i>
              <h6>Транспорт, авиация, автобизнес</h6>
              <p>Водитель, Экспедитор, Бортпроводник, Диспетчер, Автослесарь</p>
            </a> 
          </div>

        </div>
      </section>
      <!-- END Categories -->


      <!-- Newsletter -->
      <section class="bg-img text-center" style="background-image: url(/view/assets/img/bg-facts.jpg)">
        <div class="container">
          <h2><strong>Subscribe</strong></h2>
          <h6 class="font-alt">Get weekly top new jobs delivered to your inbox</h6>
          <br><br>
          <form class="form-subscribe" action="#">
            <div class="input-group">
              <input type="text" class="form-control input-lg" placeholder="Your eamil address">
              <span class="input-group-btn">
                <button class="btn btn-success btn-lg" type="submit">Subscribe</button>
              </span>
            </div>
          </form>
        </div>
      </section>
      <!-- END Newsletter -->


    </main>
    <!-- END Main container -->
    
    <?php include (ROOT.'/view/layouts/footer.php');?>
