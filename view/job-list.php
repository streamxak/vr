	
	<?php include (ROOT.'/view/layouts/header.php'); ?>
	
    <!-- Page header -->
    <header class="page-header bg-img" style="background-image: url(/view/assets/img/bg-banner1.jpg);">
      <div class="container page-name">
        <h1 class="text-center">Список вакансий</h1>
        <p class="lead text-center">Используйте фильтр поиска для уточнения выбора</p>
      </div>

      <div class="container">
        <form action="#">

          <div class="row">
            <div class="form-group col-xs-12 col-sm-4">
              <input type="text" class="form-control" placeholder="Название вакансии или компании">
            </div>

            <div class="form-group col-xs-12 col-sm-4">
              <input type="text" class="form-control" placeholder="Выберите город">
            </div>

            <div class="form-group col-xs-12 col-sm-4">
              <select class="form-control selectpicker" multiple>
                <?php foreach ($catList as $catItem): ?>
                <option <?php if ($catItem['url'] == $category) echo 'selected'; ?>><?php echo $catItem['title']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>


            <div class="form-group col-xs-12 col-sm-4">
              <h6>Занятость</h6>
              <div class="checkall-group">
                <div class="checkbox">
                  <input type="checkbox" id="contract1" name="contract" checked>
                  <label for="contract1">All types</label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="contract2" name="contract">
                  <label for="contract2">Full-time <small>(354)</small></label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="contract3" name="contract">
                  <label for="contract3">Part-time <small>(284)</small></label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="contract4" name="contract">
                  <label for="contract4">Internship <small>(169)</small></label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="contract5" name="contract">
                  <label for="contract5">Freelance <small>(480)</small></label>
                </div>
              </div>
            </div>


            <div class="form-group col-xs-12 col-sm-4">
              <h6>Заработная плата</h6>
              <div class="checkall-group">
                <div class="checkbox">
                  <input type="checkbox" id="rate1" name="rate" checked>
                  <label for="rate1">All rates</label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="rate2" name="rate">
                  <label for="rate2">$0 - $50 <small>(364)</small></label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="rate3" name="rate">
                  <label for="rate3">$50 - $100 <small>(684)</small></label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="rate4" name="rate">
                  <label for="rate4">$100 - $200 <small>(195)</small></label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="rate5" name="rate">
                  <label for="rate5">$200+ <small>(39)</small></label>
                </div>
              </div>
            </div>


            <div class="form-group col-xs-12 col-sm-4">
              <h6>Образование</h6>
              <div class="checkall-group">
                <div class="checkbox">
                  <input type="checkbox" id="degree1" name="degree" checked>
                  <label for="degree1">All degrees</label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="degree2" name="degree">
                  <label for="degree2">Associate degree <small>(216)</small></label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="degree3" name="degree">
                  <label for="degree3">Bachelor's degree <small>(569)</small></label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="degree4" name="degree">
                  <label for="degree4">Master's degree <small>(439)</small></label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="degree5" name="degree">
                  <label for="degree5">Doctoral degree <small>(84)</small></label>
                </div>
              </div>
            </div>

          </div>

          <div class="button-group">
            <div class="action-buttons">
              <button class="btn btn-primary">Применить фильтр</button>
            </div>
          </div>

        </form>

      </div>

    </header>
    <!-- END Page header -->


    <!-- Main container -->
    <main>
      <section class="no-padding-top bg-alt">
        <div class="container">
          <div class="row">

            <div class="col-xs-12">
              <br>
              <h5>Найдено <strong><?php echo $total; ?></strong> записи, показано с <i>1</i> по <i><?php echo ($page); ?></i></h5>
            </div>

			<?php foreach ($jobList as $jobItem): ?>
            <!-- Job item -->
            <div class="col-xs-12">
              <a class="item-block" href="/job/<?php echo $jobItem['category']; ?>/<?php echo $jobItem['id']; ?>">
                <header>
                  <img src="/view/assets/img/logo-google.jpg" alt="">
                  <div class="hgroup">
                    <h4><?php echo $jobItem['title']; ?></h4>
                    <h5><?php echo $jobItem['company']; ?> <span class="label label-success"><?php echo $jobItem['worktime']; ?></span></h5>
                  </div>
                  <time datetime="2016-03-10 20:00"><?php echo $jobItem['date']; ?></time>
                </header>

                <div class="item-body">
                  <p><?php echo $jobItem['description']; ?></p>
                </div>

                <footer>
                  <ul class="details cols-3">
                    <li>
                      <i class="fa fa-map-marker"></i>
                      <span><?php echo $jobItem['location']; ?></span>
                    </li>

                    <li>
                      <i class="fa fa-rub"></i>
                      <span><?php echo ($jobItem['cash'].' в месяц'); ?></span>
                    </li>

                    <li>
                      <i class="fa fa-certificate"></i>
                      <span><?php echo $jobItem['ascendancy']; ?></span>
                    </li>
                  </ul>
                </footer>
              </a>
            </div>
            <!-- END Job item -->
			<?php endforeach; ?>

          </div>

          <!-- Page navigation -->
			<?php echo $pagination->get(); ?>
          <!-- END Page navigation -->

        </div>
      </section>
    </main>
    <!-- END Main container -->
    
	<?php include (ROOT.'/view/layouts/footer.php'); ?>
	