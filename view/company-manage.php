
	<?php include (ROOT.'/view/layouts/header.php'); ?>

    <!-- Page header -->
    <header class="page-header bg-img size-lg" style="background-image: url(/view/assets/img/bg-banner1.jpg)">
      <div class="container no-shadow">
        <h1 class="text-center">Управиление компаниями</h1>
        <p class="lead text-center">Здесь вы можете создать новую, редактировать или удалить существующую компанию.</p>
      </div>
    </header>
    <!-- END Page header -->


    <!-- Main container -->
    <main>
      <section class="no-padding-top bg-alt">
        <div class="container">
          <div class="row item-blocks-condensed">

            <div class="col-xs-12 text-right">
              <br>
              <a class="btn btn-primary btn-sm" href="/company/add/">Создать новую компанию</a>
            </div>

			<?php foreach ($companylist as $companyItem): ?>
            <!-- Company item -->
            <div class="col-xs-12">
              <div class="item-block">
                <header>
                  <a href="company-detail.html"><img src="<?php echo $companyItem['logo']; ?>" alt=""></a>
                  <div class="hgroup">
                    <h4><a href="/company/detail/<?php echo $companyItem['url_category']; ?>/<?php echo $companyItem['url_name']; ?>/<?php echo $companyItem['id']; ?>/"><?php echo $companyItem['name']; ?></a></h4>
                    <h5><?php echo $companyItem['category']; ?> <a href="/company/detail/<?php echo $companyItem['url_category']; ?>/<?php echo $companyItem['url_name']; ?>/<?php echo $companyItem['id']; ?>/#open-positions"><span class="label label-info"><?php echo $companyItem['job_count']; ?> вакансий</span></a></h5>
                  </div>
                  <div class="action-btn">
                    <a class="btn btn-xs btn-gray" href="#">Редактировать</a>
                    <a class="btn btn-xs btn-danger" href="#">Удалить</a>
                  </div>
                </header>
              </div>
            </div>
            <!-- END Company item -->
            <?php endforeach; ?>


          </div>
        </div>
      </section>
    </main>
    <!-- END Main container -->

	<?php include (ROOT.'/view/layouts/footer.php');?>
	