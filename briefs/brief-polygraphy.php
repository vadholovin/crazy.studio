<?php
/*
Template Name: Бриф техзадания для полиграфической продукции
*/
?>
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php the_title(); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="page">
      <header class="page-header">
        <div class="wrapper">
          <div class="flex-container">
            <div class="page-header__text">
              <h1 class="page-header__title">
                <?php _e( 'Бриф', 'crazystudio' ); ?> <b><?php _e( 'технического задания', 'crazystudio' ); ?></b> <?php _e( 'для', 'crazystudio' ); ?> <b><?php _e( 'полиграфической', 'crazystudio' ); ?></b> <?php _e( 'продукции', 'crazystudio' ); ?>
              </h1>
              
              <p class="page-header__subtitle">
                <?php _e( 'Заполните ниже представленную', 'crazystudio' ); ?> <b><?php _e( 'форму', 'crazystudio' ); ?></b>.<br>
                <?php _e( 'Если в', 'crazystudio' ); ?> <b><?php _e( 'чем-то', 'crazystudio' ); ?></b> <?php _e( 'вы не уверены,', 'crazystudio' ); ?> <b><?php _e( 'пропустите', 'crazystudio' ); ?></b>.
              </p>
              
              <p class="page-header__desc highlight">
                * <?php _e( 'обязательно к заполнению', 'crazystudio' ); ?>
              </p>
            </div><!-- .page-header__text end -->

            <a class="logo" href="<?php bloginfo( 'url' ); ?>" target="_blank">
              <img src="<?php bloginfo( 'template_url' ); ?>/assets/briefs/images/logo.png" alt="Crazy Studio logo">
            </a>
          </div><!-- .flex-container end -->
        </div><!-- .wrapper end -->
      </header>

      <!-- start .brief -->
      <section class="brief">
        <div class="wrapper">
          <form action="<?php echo admin_url( 'admin-ajax.php?action=send_mail' ); ?>" class="brief-form" id="brief-form" method="POST" data-polygraphy="data-polygraphy">
            <input type="hidden" name="subject" value="Бриф технического задания для полиграфической продукции">
            <input type="hidden" name="current-form" value="polygraphy">
            <div class="brief-slider">

              <div class="brief-slide" id="slide-1">
                <div class="brief-slide__title">
                  <div class="brief-slide__title-bkg"></div>
                  <h2>1 <?php _e( 'Постановка задачи', 'crazystudio' ); ?></h2>
                </div>

                <div class="brief-form__items form__items">
                  <div class="flex-container">
                    <div class="form__item">
                      <div class="form__item-title require">
                        - <?php _e( 'Укажите что вам требуется', 'crazystudio' ); ?>.
                      </div>
                      <div class="input-items input-items--big-stack">
                        <div class="input-item">
                          <label class="input-item__text input-item__text--paragraph">
                            <input class="input-item__radio" type="checkbox" name="task-instance1" value="Визитка">
                            <div class="input-item__indicator"></div>
                            <?php _e( 'Визитка', 'crazystudio' ); ?>
                          </label>
                        </div>
                        <div class="input-item">
                          <label class="input-item__text input-item__text--paragraph">
                            <input class="input-item__radio" type="checkbox" name="task-instance2" value="Рекламный буклет">
                            <div class="input-item__indicator"></div>
                            <?php _e( 'Рекламный буклет', 'crazystudio' ); ?>
                          </label>
                        </div>
                        <div class="input-item">
                          <label class="input-item__text input-item__text--paragraph">
                            <input class="input-item__radio" type="checkbox" name="task-instance3" value="Каталог продукции">
                            <div class="input-item__indicator"></div>
                            <?php _e( 'Каталог продукции', 'crazystudio' ); ?>
                          </label>
                        </div>
                        <div class="input-item">
                          <label class="input-item__text input-item__text--paragraph">
                            <input class="input-item__radio" type="checkbox" name="task-instance4" value="Афиша">
                            <div class="input-item__indicator"></div>
                            <?php _e( 'Афиша', 'crazystudio' ); ?>
                          </label>
                        </div>
                        <div class="input-item">
                          <label class="input-item__text input-item__text--paragraph">
                            <input class="input-item__radio" type="checkbox" name="task-instance5" value="Коммерческое предложение">
                            <div class="input-item__indicator"></div>
                            <?php _e( 'Коммерческое предложение', 'crazystudio' ); ?>
                          </label>
                        </div>
                        <div class="input-item">
                          <label class="input-item__text input-item__text--paragraph">
                            <input class="input-item__radio" type="checkbox" name="task-instance6" value="Фирменный бланк">
                            <div class="input-item__indicator"></div>
                            <?php _e( 'Фирменный бланк', 'crazystudio' ); ?>
                          </label>
                        </div>
                        <div class="input-item">
                          <label class="input-item__text input-item__text--paragraph">
                            <input class="input-item__radio" type="checkbox" name="task-instance7" value="Папка">
                            <div class="input-item__indicator"></div>
                            <?php _e( 'Папка', 'crazystudio' ); ?>
                          </label>
                        </div>
                        <div class="input-item">
                          <label class="input-item__text input-item__text--paragraph">
                            <input class="input-item__radio" type="checkbox" name="task-instance8" value="Другое">
                            <div class="input-item__indicator"></div>
                            <?php _e( 'Другое', 'crazystudio' ); ?>: <input class="input-item__field" type="text" name="task-instance9">
                          </label>
                        </div>
                      </div>
                    </div><!-- .form__item end -->
                    
                    <div class="form__item">
                      <label for="task" class="form__item-title require">
                        - <?php _e( 'Какую задачу вы ставите перед нами? (Например, односторонняя или двухсторонняя визитка)', 'crazystudio' ); ?>
                      </label>
                      <textarea name="task" class="form__field mt-0" id="task"></textarea>
                    </div><!-- .form__item end -->
                  </div><!-- .flex-container end -->
                </div><!-- .brief-form__items end -->
              </div><!-- .brief-slide slide-1 end -->
              
              <div class="brief-slide active" id="slide-2">
                <div class="brief-slide__title">
                  <div class="brief-slide__title-bkg"></div>
                  <h2>2 <?php _e( 'Общая информация', 'crazystudio' ); ?></h2>
                </div>
                
                <div class="brief-form__items form__items">
                  <div class="flex-container">
                    <div class="form__item">
                      <label for="name" class="form__item-title require">
                        - <?php _e( 'Имя контактного лица', 'crazystudio' ); ?>
                      </label>
                      <input type="text" name="name" class="form__field form__field--input" id="name">
                    </div><!-- .form__item end -->

                    <div class="form__item">
                      <label for="company" class="form__item-title require">
                        - <?php _e( 'Полное название компании и адрес сайта (если есть)', 'crazystudio' ); ?>
                      </label>
                      <textarea name="company" class="form__field" id="company"></textarea>
                    </div><!-- .form__item end -->

                    <div class="form__item form__item--up">
                      <div class="form__item-title require">
                        - <?php _e( 'Контактные данные для связи (отметьте, если имеются', 'crazystudio' ); ?> Viber, WhatsApp, Telegram)
                      </div>
                      
                      <div class="form__field-wrap">
                        <input type="text" name="phone" class="form__field form__field--input" id="phone">
                        <label for="phone" class="form__item-label">
                        <?php _e( 'Телефон', 'crazystudio' ); ?>
                        </label>
                        <div class="messangers">
                          <div class="messangers-item">
                            <input type="checkbox" name="viber" id="viber" value="есть">
                            <label for="viber" class="messangers-viber"></label>
                            <svg class="ic-viber" enable-background="new 0 0 100 100" height="100px" version="1.1" viewBox="0 0 100 100" width="100px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><circle class="viber-circle" cx="50" cy="49.999" r="45"/><g><path d="M49.758,31.413c0.285-0.262,0.487-0.299,1.48-0.268c0.521,0.018,1.279,0.078,1.695,0.127    c2.098,0.262,3.795,0.768,5.653,1.674c1.829,0.896,3.001,1.742,4.55,3.283c1.449,1.455,2.255,2.557,3.109,4.268    c1.189,2.387,1.866,5.225,1.982,8.348c0.042,1.066,0.012,1.305-0.231,1.607c-0.464,0.592-1.483,0.494-1.829-0.17    c-0.112-0.219-0.143-0.408-0.178-1.262c-0.061-1.309-0.152-2.154-0.336-3.166c-0.72-3.963-2.621-7.129-5.658-9.4    c-2.532-1.898-5.147-2.826-8.573-3.025c-1.16-0.066-1.361-0.109-1.623-0.311C49.312,32.733,49.287,31.833,49.758,31.413z     M57.026,39.255c-1.226-0.73-3.037-1.271-4.688-1.406c-0.6-0.049-0.928-0.17-1.153-0.432c-0.348-0.396-0.384-0.932-0.092-1.377    c0.317-0.492,0.804-0.572,2.261-0.354c3.702,0.543,6.569,2.26,8.446,5.049c1.058,1.57,1.715,3.416,1.941,5.395    c0.077,0.725,0.077,2.045-0.009,2.264c-0.077,0.207-0.335,0.488-0.554,0.604c-0.237,0.121-0.745,0.109-1.025-0.037    c-0.468-0.236-0.609-0.615-0.609-1.637c0-1.578-0.408-3.24-1.115-4.529C59.623,41.319,58.453,40.103,57.026,39.255z     M59.087,47.372c-0.359,0.328-1.025,0.34-1.428,0.031c-0.291-0.221-0.384-0.453-0.451-1.078c-0.078-0.834-0.224-1.42-0.476-1.961    c-0.536-1.15-1.481-1.748-3.079-1.943c-0.749-0.09-0.976-0.176-1.219-0.463c-0.446-0.529-0.274-1.387,0.342-1.705    c0.231-0.113,0.327-0.127,0.841-0.096c0.316,0.018,0.786,0.072,1.036,0.127c1.201,0.256,2.123,0.713,2.908,1.449    c1.014,0.957,1.569,2.113,1.813,3.775C59.539,46.593,59.471,47.019,59.087,47.372z M68.196,63.368    c-0.449,1.162-2.206,3.342-3.432,4.273c-1.109,0.84-1.897,1.162-2.935,1.213c-0.852,0.041-1.206-0.033-2.297-0.482    c-8.562-3.525-15.399-8.785-20.827-16.014c-2.834-3.775-4.993-7.689-6.471-11.752c-0.857-2.367-0.899-3.396-0.193-4.609    c0.306-0.51,1.603-1.777,2.551-2.482c1.573-1.17,2.299-1.602,2.876-1.725c0.398-0.086,1.086-0.018,1.525,0.141    c0.212,0.072,0.544,0.244,0.731,0.365c1.16,0.768,4.385,4.889,5.439,6.947c0.604,1.176,0.806,2.045,0.616,2.691    c-0.196,0.693-0.52,1.059-1.963,2.223c-0.58,0.469-1.124,0.949-1.208,1.078c-0.22,0.316-0.397,0.938-0.397,1.375    c0.006,1.018,0.666,2.861,1.531,4.281c0.672,1.102,1.871,2.514,3.062,3.598c1.396,1.279,2.627,2.15,4.019,2.838    c1.785,0.889,2.878,1.113,3.676,0.742c0.202-0.09,0.416-0.213,0.481-0.268c0.061-0.055,0.53-0.627,1.044-1.26    c0.987-1.242,1.214-1.443,1.89-1.674c0.861-0.293,1.738-0.215,2.622,0.236c0.672,0.348,2.135,1.256,3.079,1.912    c1.245,0.871,3.904,3.039,4.264,3.471C68.515,61.267,68.625,62.265,68.196,63.368z" fill="#FFFFFF"/></g></g></svg>
                          </div>

                          <div class="messangers-item">
                            <input type="checkbox" name="whatsapp" id="whatsapp" value="есть">
                            <label for="whatsapp" class="messangers-whatsapp"></label>
                            <svg class="ic-whatsapp" height="60px" version="1.1" viewBox="0 0 60 60" width="60px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g fill="none" fill-rule="evenodd" id="flat" stroke="none" stroke-width="1"><g><path class="whatsapp-circle" d="M30,60 C46.5685433,60 60,46.5685433 60,30 C60,13.4314567 46.5685433,0 30,0 C13.4314567,0 0,13.4314567 0,30 C0,46.5685433 13.4314567,60 30,60 Z"/><path d="M30.0712615,46.2210462 C27.2108308,46.2210462 24.5235692,45.4899692 22.1856,44.2068923 L13.1538462,47.0769231 L16.0980923,38.3918769 C14.6130462,35.9523692 13.7575385,33.0915692 13.7575385,30.0336 C13.7575385,21.0934154 21.0612923,13.8461538 30.0716308,13.8461538 C39.0808615,13.8461538 46.3846154,21.0934154 46.3846154,30.0336 C46.3846154,38.9737846 39.0812308,46.2210462 30.0712615,46.2210462 Z M30.0712615,16.4241231 C22.5079385,16.4241231 16.3558154,22.5293538 16.3558154,30.0336 C16.3558154,33.0114462 17.3265231,35.7692308 18.9681231,38.0130462 L17.2548923,43.0670769 L22.5252923,41.3918769 C24.6912,42.8137846 27.2854154,43.6430769 30.0712615,43.6430769 C37.6334769,43.6430769 43.7867077,37.5382154 43.7867077,30.0339692 C43.7867077,22.5297231 37.6334769,16.4241231 30.0712615,16.4241231 L30.0712615,16.4241231 Z M38.3088,33.7617231 C38.2083692,33.5966769 37.9417846,33.4969846 37.5426462,33.2987077 C37.1424,33.1004308 35.1758769,32.1400615 34.8099692,32.0082462 C34.4429538,31.8760615 34.176,31.8092308 33.9097846,32.2065231 C33.6435692,32.6038154 32.8770462,33.4969846 32.6433231,33.7617231 C32.4099692,34.0268308 32.1769846,34.0600615 31.7771077,33.8614154 C31.3776,33.6631385 30.0889846,33.2440615 28.5611077,31.8923077 C27.3725538,30.8407385 26.5698462,29.5425231 26.3368615,29.1448615 C26.1035077,28.7479385 26.3121231,28.5334154 26.5122462,28.3358769 C26.6920615,28.1579077 26.9121231,27.8724923 27.1122462,27.6409846 C27.3123692,27.4091077 27.3788308,27.2440615 27.5117538,26.9789538 C27.6454154,26.7142154 27.5785846,26.4827077 27.4785231,26.2836923 C27.3784615,26.0854154 26.5783385,24.1329231 26.2452923,23.3383385 C25.9122462,22.5444923 25.5795692,22.6766769 25.3458462,22.6766769 C25.1124923,22.6766769 24.8459077,22.6434462 24.5793231,22.6434462 C24.3127385,22.6434462 23.8792615,22.7427692 23.5126154,23.1396923 C23.1463385,23.5369846 22.1136,24.4969846 22.1136,26.4491077 C22.1136,28.4016 23.5458462,30.288 23.7463385,30.5523692 C23.9460923,30.8167385 26.5118769,34.9536 30.5767385,36.5424 C34.6430769,38.1308308 34.6430769,37.6009846 35.3763692,37.5348923 C36.1085538,37.4688 37.7412923,36.5752615 38.0754462,35.6488615 C38.4081231,34.7217231 38.4081231,33.9271385 38.3088,33.7617231 L38.3088,33.7617231 Z" fill="#FFFFFF"/></g></g></svg>
                          </div>

                          <div class="messangers-item">
                            <input type="checkbox" name="telegram" id="telegram" value="есть">
                            <label for="telegram" class="messangers-telegram"></label>
                            <svg class="ic-telegram" enable-background="new 0 0 100 100" height="100px" version="1.1" viewBox="0 0 100 100" width="100px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><circle class="telegram-sircle" cx="50" cy="50" r="45"/><path clip-rule="evenodd" d="M51.474,60.754c-1.733,1.688-3.451,3.348-5.153,5.021   c-0.595,0.586-1.264,0.91-2.118,0.865c-0.583-0.031-0.909-0.287-1.088-0.84c-1.304-4.047-2.627-8.084-3.924-12.135   c-0.126-0.393-0.312-0.584-0.71-0.707c-3.072-0.938-6.138-1.898-9.199-2.871c-0.471-0.15-0.946-0.346-1.353-0.623   c-0.629-0.426-0.721-1.121-0.157-1.621c0.521-0.461,1.143-0.863,1.789-1.119c3.755-1.488,7.53-2.928,11.299-4.381   c9.565-3.693,19.13-7.383,28.696-11.076c1.819-0.703,3.217,0.287,3.028,2.254c-0.121,1.258-0.447,2.496-0.71,3.738   c-2.077,9.807-4.156,19.615-6.244,29.42c-0.496,2.328-2.131,2.936-4.047,1.523c-3.209-2.365-6.415-4.738-9.622-7.107   C51.808,60.984,51.649,60.877,51.474,60.754z M44.271,63.732c0.036-0.01,0.072-0.02,0.108-0.029   c0.02-0.092,0.049-0.182,0.057-0.273c0.206-2.223,0.424-4.445,0.603-6.672c0.04-0.496,0.21-0.848,0.583-1.182   c2.958-2.645,5.898-5.307,8.844-7.963c3.261-2.941,6.523-5.879,9.772-8.832c0.201-0.182,0.285-0.492,0.423-0.744   c-0.306-0.033-0.634-0.156-0.912-0.084c-0.379,0.098-0.738,0.318-1.076,0.531c-7.197,4.533-14.388,9.074-21.59,13.598   c-0.407,0.256-0.483,0.473-0.328,0.92c0.531,1.525,1.014,3.064,1.515,4.6C42.937,59.646,43.604,61.689,44.271,63.732z" fill="#FFFFFF" fill-rule="evenodd"/></g></svg>
                          </div>
                        </div>
                      </div>

                      <div class="form__field-wrap">
                        <input type="text" name="email" class="form__field form__field--input" id="email">
                        <label for="email" class="form__item-label">
                          E-mail
                        </label>
                      </div>

                      <div class="form__field-wrap">
                        <input type="text" name="skype" class="form__field form__field--input" id="skype">
                        <label for="skype" class="form__item-label">
                          Skype
                        </label>
                      </div>
                    </div><!-- .form__item end -->

                    <div class="form__item">
                      <label for="days" class="form__item-title require">
                        - <?php _e( 'Каковы планируемые сроки проекта', 'crazystudio' ); ?>?
                      </label>
                      <div class="form__field-container">
                        <input type="number" name="days" class="form__field form__field--days" id="js-amount-days" min="0" max="30" placeholder="1">
                        <span class="sup"><?php _e( 'дней', 'crazystudio' ); ?></span>
                      </div>

                      <div class="range">
                        <input type="range" id="js-amount-range" value="1" min="0" max="30">
                        <span class="title-min"><?php _e( 'от 1 дня', 'crazystudio' ); ?></span>
                        <span class="title-max">
                          <?php _e( 'до месяца', 'crazystudio' ); ?><br>
                          <?php _e( 'и больше', 'crazystudio' ); ?>
                        </span>
                      </div>
                    </div><!-- .form__item end -->

                    <div class="form__item">
                      <label for="budget" class="form__item-title">
                        - <?php _e( 'Ориентировочный бюджет проекта', 'crazystudio' ); ?>
                      </label>
                      <input type="text" name="budget" class="form__field form__field--input" id="budget">

                      <div class="input-item mt-16">
                        <label class="input-item__text input-item__text--paragraph fs-20 d-b">
                          <input class="input-item__radio" type="checkbox" name="contract" value="Да">
                          <div class="input-item__indicator"></div>
                          <?php _e( 'Нажмите, если вы хотите работать по договору с юр. лицом', 'crazystudio' ); ?>
                        </label>
                      </div>
                    </div><!-- .form__item end -->
                  </div><!-- .flex-container end -->
                </div><!-- .brief-form__items end -->
              </div><!-- .brief-slide slide-2 end -->

              <div class="brief-slide" id="slide-3">
                <div class="brief-slide__title">
                  <div class="brief-slide__title-bkg"></div>
                  <h2>3 <?php _e( 'Информация о компании', 'crazystudio' ); ?></h2>
                </div>

                <div class="brief-form__items form__items">
                  <div class="flex-container">
                    <div class="form__item">
                      <label for="area" class="form__item-title require">
                        - <?php _e( 'Укажите область деятельности компании, какие товары или услуги вы предлагаете', 'crazystudio' ); ?>?
                      </label>
                      <textarea name="area" class="form__field" id="area"></textarea>
                    </div><!-- .form__item end -->

                    <div class="form__item">
                      <label for="differences" class="form__item-title">
                        - <?php _e( 'Какие есть ключевые отличия от конкурентов, которые надо выделить', 'crazystudio' ); ?>?
                      </label>
                      <textarea name="differences" class="form__field" id="differences"></textarea>
                    </div><!-- .form__item end -->
                    
                    <div class="form__item">
                      <label for="competitors" class="form__item-title">
                        - <?php _e( 'Укажите ссылки на сайты ваших прямых или косвенных конкурентов. Оцените их фирменный стиль, укажите, что вам нравится, а что нет', 'crazystudio' ); ?>.
                      </label>
                      <textarea name="competitors" class="form__field" id="competitors"></textarea>
                    </div><!-- .form__item end -->
                    
                    <div class="form__item">
                      <label for="info-notes" class="form__item-title">
                        - <?php _e( 'Примечания', 'crazystudio' ); ?>:
                      </label>
                      <textarea name="info-notes" class="form__field" id="info-notes"></textarea>
                    </div><!-- .form__item end -->
                  </div><!-- .flex-container end -->
                </div><!-- .brief-form__items end -->
              </div><!-- .brief-slide slide-3 end -->

              <div class="brief-slide" id="slide-4">
                <div class="brief-slide__title">
                  <div class="brief-slide__title-bkg"></div>
                  <h2>4 <?php _e( 'Целевая аудитория', 'crazystudio' ); ?></h2>
                </div>

                <div class="brief-form__items form__items">
                  <div class="flex-container">
                    <div class="form__item">
                      <div class="form__item-title require">
                        - <?php _e( 'Должны ли мы сами определить целевую аудиторию', 'crazystudio' ); ?>?
                      </div>
                      <div class="input-items mt-0">
                        <div class="input-item">
                          <label class="input-item__text">
                            <input class="input-item__radio" type="radio" name="is-target" value="да">
                            <div class="input-item__indicator input-item__indicator--radio"></div>
                            <?php _e( 'Да', 'crazystudio' ); ?>
                          </label>
                        </div>
                        <div class="input-item">
                          <label class="input-item__text">
                            <input class="input-item__radio" type="radio" name="is-target" value="нет">
                            <div class="input-item__indicator input-item__indicator--radio"></div>
                            <?php _e( 'Нет', 'crazystudio' ); ?>
                          </label>
                        </div>
                      </div>
                    </div><!-- .form__item end -->
                    
                    <div class="form__item">
                      <label for="audience" class="form__item-title">
                        - <?php _e( 'Если нет, опишите группы целевой аудитории. Укажите их характерные черты и особенности', 'crazystudio' ); ?>.
                      </label>
                      <textarea name="audience" class="form__field" id="audience"></textarea>
                    </div><!-- .form__item end -->
                  </div><!-- .flex-container end -->
                </div><!-- .brief-form__items end -->
              </div><!-- .brief-slide slide-4 end -->

              <div class="brief-slide" id="slide-5">
                <div class="brief-slide__title">
                  <div class="brief-slide__title-bkg"></div>
                  <h2>5 <?php _e( 'Содержание', 'crazystudio' ); ?></h2>
                </div>

                <div class="brief-form__items form__items">
                  <div class="flex-container">
                    <div class="form__item">
                      <label for="catalog-sections" class="form__item-title">
                        - <?php _e( 'Если вы заказываете каталог или буклет, укажите разделы', 'crazystudio' ); ?>.
                      </label>
                      <textarea name="catalog-sections" class="form__field" id="catalog-sections"></textarea>
                    </div><!-- .form__item end -->

                    <div class="form__item">
                      <label for="content-info" class="form__item-title require">
                        - <?php _e( 'Укажите всю информацию, которая должна содержаться в визитке/буклете/афише/другое', 'crazystudio' ); ?>.
                      </label>
                      <textarea name="content-info" class="form__field" id="content-info"></textarea>
                    </div><!-- .form__item end -->

                    <div class="form__item">
                      <div class="form__item-title">
                        - <?php _e( 'Нужно ли делать другие языковые варианты', 'crazystudio' ); ?>?
                      </div>
                      <div class="input-items mt-0">
                        <div class="input-item">
                          <label class="input-item__text">
                            <input class="input-item__radio" type="radio" name="other-language" value="да">
                            <div class="input-item__indicator input-item__indicator--radio"></div>
                            <?php _e( 'Да', 'crazystudio' ); ?>
                          </label>
                        </div>
                        <div class="input-item">
                          <label class="input-item__text">
                            <input class="input-item__radio" type="radio" name="other-language" value="нет">
                            <div class="input-item__indicator input-item__indicator--radio"></div>
                            <?php _e( 'Нет', 'crazystudio' ); ?>
                          </label>
                        </div>
                      </div>
                    </div><!-- .form__item end -->

                    <div class="form__item">
                      <label for="task-content" class="form__item-title require">
                        - <?php _e( 'Кто занимается подготовкой контента, нужна ли подготовка изображений или текста', 'crazystudio' ); ?>?
                      </label>
                      <textarea name="task-content" class="form__field" id="task-content"></textarea>
                    </div><!-- .form__item end -->

                    <div class="form__item">
                      <label for="content-notes" class="form__item-title">
                        - <?php _e( 'Примечания', 'crazystudio' ); ?>:
                      </label>
                      <textarea name="content-notes" class="form__field" id="content-notes"></textarea>
                    </div><!-- .form__item end -->
                  </div><!-- .flex-container end -->
                </div><!-- .brief-form__items end -->
              </div><!-- .brief-slide slide-5 end -->

              <div class="brief-slide last-slide" id="slide-6">
                <div class="brief-slide__title">
                  <div class="brief-slide__title-bkg"></div>
                  <h2>6 <?php _e( 'Дизайн', 'crazystudio' ); ?></h2>
                </div>

                <div class="brief-form__items form__items">
                  <div class="flex-container">
                    <div class="form__item">
                      <div class="form__item-title require">
                        - <?php _e( 'Есть ли логотип и/или фирменный стиль, которые надо использовать', 'crazystudio' ); ?>?
                      </div>
                      <div class="input-items">
                        <div class="input-item">
                          <label class="input-item__text">
                            <input class="input-item__radio" type="radio" name="logo" value="да">
                            <div class="input-item__indicator input-item__indicator--radio"></div>
                            <?php _e( 'Да', 'crazystudio' ); ?>
                          </label>
                        </div>
                        <div class="input-item">
                          <label class="input-item__text">
                            <input class="input-item__radio" type="radio" name="logo" value="нет">
                            <div class="input-item__indicator input-item__indicator--radio"></div>
                            <?php _e( 'Нет', 'crazystudio' ); ?>
                          </label>
                        </div>
                      </div>
                    </div><!-- .form__item end -->

                    <div class="form__item">
                      <div class="form__item-title">
                        - <?php _e( 'Если нет, требуется ли их разработка', 'crazystudio' ); ?>?
                      </div>
                      <div class="input-items">
                        <div class="input-item">
                          <label class="input-item__text">
                            <input class="input-item__radio" type="radio" name="create-logo" value="да">
                            <div class="input-item__indicator input-item__indicator--radio"></div>
                            <?php _e( 'Да', 'crazystudio' ); ?>
                          </label>
                        </div>
                        <div class="input-item">
                          <label class="input-item__text">
                            <input class="input-item__radio" type="radio" name="create-logo" value="нет">
                            <div class="input-item__indicator input-item__indicator--radio"></div>
                            <?php _e( 'Нет', 'crazystudio' ); ?>
                          </label>
                        </div>
                      </div>
                    </div><!-- .form__item end -->

                    <div class="form__item">
                      <label for="link-logo" class="form__item-title">
                        - <?php _e( 'Если есть логотип, приложите ссылку. Если нет логотипа в векторном формате, укажите это', 'crazystudio' ); ?>.
                      </label>
                      <textarea name="link-logo" class="form__field" id="link-logo"></textarea>
                    </div><!-- .form__item end -->

                    <div class="form__item">
                      <label for="cool-design" class="form__item-title require">
                        - <?php _e( 'Укажите примеры дизайна, которые вам нравятся (не обязательно компаний из вашей индустрии)', 'crazystudio' ); ?>. 
                      </label>
                      <textarea name="cool-design" class="form__field" id="cool-design"></textarea>
                    </div><!-- .form__item end -->

                    <div class="form__item">
                      <label for="shit-design" class="form__item-title">
                        - <?php _e( 'Укажите примеры дизайна, которые вам НЕ нравятся (не обязательно компаний из вашей индустрии)', 'crazystudio' ); ?>. 
                      </label>
                      <textarea name="shit-design" class="form__field" id="shit-design"></textarea>
                    </div><!-- .form__item end -->

                    <div class="form__item">
                      <label for="design-effect" class="form__item-title">
                        - <?php _e( 'Опишите впечатление, которое должен производить дизайн', 'crazystudio' ); ?>.
                      </label>
                      <textarea name="design-effect" class="form__field" id="design-effect"></textarea>
                    </div><!-- .form__item end -->

                    <div class="form__item">
                      <div class="form__item-title">
                        - <?php _e( 'Надо ли придерживаться текущего дизайна (в случае редизайна)', 'crazystudio' ); ?>?
                      </div>
                      <div class="input-items mt-0">
                        <div class="input-item">
                          <label class="input-item__text">
                            <input class="input-item__radio" type="radio" name="current-style" value="да">
                            <div class="input-item__indicator input-item__indicator--radio"></div>
                            <?php _e( 'Да', 'crazystudio' ); ?>
                          </label>
                        </div>
                        <div class="input-item">
                          <label class="input-item__text">
                            <input class="input-item__radio" type="radio" name="current-style" value="нет">
                            <div class="input-item__indicator input-item__indicator--radio"></div>
                            <?php _e( 'Нет', 'crazystudio' ); ?>
                          </label>
                        </div>
                      </div>
                    </div><!-- .form__item end -->

                    <div class="form__item">
                      <label for="design-notes" class="form__item-title">
                        - <?php _e( 'Примечания', 'crazystudio' ); ?>:
                      </label>
                      <textarea name="design-notes" class="form__field" id="design-notes"></textarea>
                    </div><!-- .form__item end -->

                    <div class="form__item">
                      <label for="design-additions" class="form__item-title">
                        - <?php _e( 'Что еще мы должны знать', 'crazystudio' ); ?>?
                      </label>
                      <textarea name="design-additions" class="form__field" id="design-additions"></textarea>
                    </div><!-- .form__item end -->
                  </div><!-- .flex-container end -->
                </div><!-- .brief-form__items end -->
              </div><!-- .brief-slide slide-6 end -->

              <div class="brief-slider__controls slider__controls">
                <div class="slider__controls-container">
                  <a href="#brief-form" class="slider-controls--prev">
                    <button class="btn" type="button" id="btn-prev"><?php _e( 'Назад', 'crazystudio' ); ?></button>
                  </a>
                  <a href="#brief-form" class="slider-controls--next">
                    <button class="btn" type="button" id="btn-next"><?php _e( 'Далее', 'crazystudio' ); ?></button>
                  </a>
                  <button type="submit" class="btn btn-submit feedback" id="submit"><?php _e( 'Отправить', 'crazystudio' ); ?></button>
                </div>
              </div><!-- .brief-slider__controls end -->
            </div><!-- .brief-slider end -->
          </form>
        </div><!-- .wrapper end -->
      </section><!-- .brief end -->

      <!-- MODAL CONTENT -->
      <div class="modal-box is-hidden">
        <div class="modal-background"></div>
        <div class="modal-content">
          <h2 class="modal-content__title">Отправлено!</h2>
          <p class="modal-content__text">
            Спасибо, что заполнили наш бриф!<br>
            Менеджер свяжется с вами в ближайшее время.
          </p>
          <div class="modal-content__close"></div>
        </div>
      </div>

    </div><!-- .page end -->
    
    <?php wp_footer(); ?>
  </body>
</html>
