
	<?php include (ROOT.'/view/layouts/header.php'); ?>

    <form action="#" method="post" enctype="multipart/form-data">

      <!-- Page header -->
      <header class="page-header">
        <div class="container page-name">
          <h1 class="text-center">Добавить новую компанию</h1>
          <p class="lead text-center">Создайте профайл вашей организации онлайн.</p>
        </div>

        <div class="container">

          <div class="row">
            <div class="col-xs-12">
              <div class="row">
                
                <?php if ($errors): ?>
        		<div class="alert alert-danger" role="alert">
				  <strong>Ошибка данных формы!</strong>
				  <?php foreach ($errors as $errnum => $errtext) {
				  	echo ('<p>'.$errtext.'</p>');
				  } ?>
				</div>
				<?php endif; ?>
                
                <div class="col-xs-12 col-sm-4 col-lg-2">
                  <div class="form-group">
                    <input type="file" name="logo" class="dropify" data-default-file="<?php echo $logo; ?>" accept="image/*">
                    <span class="help-block">* квадратный логотип</span>
                  </div>
                </div>

                <div class="col-xs-12 col-sm-8 col-lg-10">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control input-lg" placeholder="Название организации" value="<?php echo $name; ?>">
                  </div>
                  <div class="form-group">
                    <input type="text" name="category" class="form-control" placeholder="Сфера деятельности (например: Информационные технологии)" value="<?php echo $category; ?>">
                  </div>

                  <div class="form-group">
                    <textarea name="description" class="form-control" rows="3" placeholder="Краткое описание"><?php echo $description; ?></textarea>
                  </div>
                </div>

              </div>
            </div>

            <div class="col-xs-12">
              <div class="row">

                <div class="form-group col-xs-12 col-sm-6 col-md-4">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                    <input type="text" name="location" class="form-control" placeholder="Город" value="<?php echo $location; ?>">
                  </div>
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-users"></i></span>
                    <select class="form-control selectpicker" name="employ">
                      <option <?php if ($employ == '1 - 9') echo 'selected'; ?>>1 - 9</option>
                      <option <?php if ($employ == '10 - 49') echo 'selected'; ?>>10 - 49</option>
                      <option <?php if ($employ == '50 - 99') echo 'selected'; ?>>50 - 99</option>
                      <option <?php if ($employ == '100 - 499') echo 'selected'; ?>>100 - 499</option>
                      <option <?php if ($employ == '500 - 1000') echo 'selected'; ?>>500 - 1000</option>
                      <option <?php if ($employ == '1000+') echo 'selected'; ?>>1000+</option>
                    </select>
                    <span class="input-group-addon">сотрудников</span>
                  </div>
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                    <input type="text" name="website" class="form-control" placeholder="Веб-сайт" value="<?php echo $website; ?>">
                  </div>
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
                    <input type="date" name="found" class="form-control" placeholder="Дата основания" value="<?php echo $found; ?>">
                    <span class="input-group-addon">дата основания</span>
                  </div>
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                    <input type="text" name="phone" class="form-control" placeholder="Контактный телефон" value="<?php echo $phone; ?>">
                  </div>
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="text" name="email" class="form-control" placeholder="Электронная почта" value="<?php echo $email; ?>">
                  </div>
                </div>

              </div>
            </div>


          </div>

          <div class="button-group">
            <div class="action-buttons">
              <div class="upload-button">
                <button class="btn btn-block btn-primary">Выберите обложку компании</button>
                <input id="cover_img_file" type="file" name="image">
              </div>
            </div>
          </div>

        </div>
      </header>
      <!-- END Page header -->


      <!-- Main container -->
      <main>

        <!-- Social media -->
        <section>
          <div class="container">

            <header class="section-header">
              <span>Всегда на связи</span>
              <h2>Социальные сети</h2>
            </header>

            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-vk"></i></span>
                    <input type="text" name="social_vk" class="form-control" placeholder="Вконтакте" value="<?php echo $social_vk; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                    <input type="text" name="social_fb" class="form-control" placeholder="Facebook" value="<?php echo $social_fb; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                    <input type="text" name="social_tw" class="form-control" placeholder="Twitter" value="<?php echo $social_tw; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-google-plus"></i></span>
                    <input type="text" name="social_gp" class="form-control" placeholder="Google Plus" value="<?php echo $social_gp; ?>">
                  </div>
                </div>
              </div>

              <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-github"></i></span>
                    <input type="text" name="social_gh" class="form-control" placeholder="GitHub" value="<?php echo $social_gh; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-pinterest"></i></span>
                    <input type="text" name="social_pi" class="form-control" placeholder="Pinterest" value="<?php echo $social_pi; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                    <input type="text" name="social_in" class="form-control" placeholder="Instagram" value="<?php echo $social_in; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-youtube"></i></span>
                    <input type="text" name="social_yt" class="form-control" placeholder="YouTube" value="<?php echo $social_yt; ?>">
                  </div>
                </div>
              </div>
            </div>

          </div>
        </section>
        <!-- Social media -->

        <!-- Company detail -->
        <section class=" bg-alt">
          <div class="container">

            <header class="section-header">
              <span>Детали</span>
              <h2>Почему именно вы?</h2>
              <p>Расскажите о перспективах и преимуществах работы в вашей организации.</p>
            </header>
            
            <textarea class="summernote-editor" name="detail" id="summernote"><?php echo $detail; ?></textarea>

          </div>
        </section>
        <!-- END Company detail -->


        <!-- Submit -->
        <section>
          <div class="container">
            <header class="section-header">
              <span>Создание профайла</span>
              <h2>Готово?</h2>
              <p>Пожалуйста, проверьте данные перед отправкой.</p>
            </header>

            <p class="text-center"><button class="btn btn-success btn-xl btn-round" name="submit">Создать компанию</button></p>

          </div>
        </section>
        <!-- END Submit -->


      </main>
      <!-- END Main container -->

    </form>

    <?php include (ROOT.'/view/layouts/footer.php');?>
