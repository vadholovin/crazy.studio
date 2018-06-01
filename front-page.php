<?php
/*
Template Name: Главная страница
*/
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <title><?php bloginfo( 'name' ); echo ' | '; bloginfo( 'description' ); ?></title>
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
  <?php wp_head(); ?>

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo( 'template_url' ); ?>/assets/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo( 'template_url' ); ?>/assets/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo( 'template_url' ); ?>/assets/favicon-16x16.png">
  <link rel="manifest" href="<?php bloginfo( 'template_url' ); ?>/assets/manifest.json">
  <link rel="mask-icon" href="<?php bloginfo( 'template_url' ); ?>/assets/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="theme-color" content="#ffffff">

  <!-- Google Web Fonts -->
  <link href="http://fonts.googleapis.com/css?family=Shadows+Into+Light|Oswald:400,300,700" rel="stylesheet prefetch" type="text/css">
    

  <script type="text/javascript">

    var isMobile = false;

    if( navigator.userAgent.match(/Android/i) || 
      navigator.userAgent.match(/webOS/i) ||
      navigator.userAgent.match(/iPhone/i) || 
      navigator.userAgent.match(/iPad/i)|| 
      navigator.userAgent.match(/iPod/i) || 
      navigator.userAgent.match(/BlackBerry/i)){
              
      isMobile = true;
            
    }
    
    /*iOS5 fixed-menu fix*/
    var iOS5 = false;
    
    if (navigator.userAgent.match(/OS 5(_\d)+ like Mac OS X/i)){
    
      iOS5 = true;
    
    }

  </script>
    
    
  
    <script type="text/javascript">

      jQuery(function(){

        jQuery("button").not(".command").click(function(){
          jQuery("button").not(".command").removeClass("sel");
          jQuery(this).addClass("sel");
        });

        //debug functions
        jQuery("#bgndVideo").on("YTPStart", function(){ jQuery("#eventListener").html("YTPStart")});
        jQuery("#bgndVideo").on("YTPEnd", function(){ jQuery("#eventListener").html("YTPEnd")});
        jQuery("#bgndVideo").on("YTPPause", function(){ jQuery("#eventListener").html("YTPPause")});
        jQuery("#bgndVideo").on("YTPBuffering", function(){ jQuery("#eventListener").html("YTPBuffering")});

        jQuery("#bgndVideo").mb_YTPlayer();

      });

    </script>
    <script>
    $(document).ready(function(){
      $("nav").sticky({topSpacing:0});
    });
  </script>

</head>

<body ontouchstart="">

<!-- Start Homepage -->
  <div id="homepage" class="homepage section">
    
    <div class="container">
      <div class="sixteen columns">
        <img alt="" class="logo" src="<?php bloginfo( 'template_url' ); ?>/assets/images/logo.png" />
      </div>
            
      <a id="bgndVideo" href="http://www.youtube.com/watch?v=Df8ofF1mbdA" class="movie {opacity:1, isBgndMovie:{width:'window',mute:false}, optimizeDisplay:true, showControls:true, ratio:'16/9',startAt:3,quality:'hd720',addRaster:true,lightCrop:true}"></a>

    </div>
  </div>      
  
<!--End homepage -->

<!-- Start Navigation -->
  <nav>
    <div class="flex-container">
      <div class="dropnav__hamburger"></div>

      <!-- Nav Menu -->
      <?php wp_nav_menu( array(
        'theme_location'    => 'primary',
        'container'         => false,
      ) ); ?>

      <!-- Dropmenu for mobile -->
      <div class="dropnav is-hidden">

        <?php wp_nav_menu( array(
          'theme_location'    => 'primary',
          'container'         => false,
          'menu_class'        => 'menu-mobile',
        ) ); ?>
        
      </div>
      
      <ul class="lang-switcher"><?php pll_the_languages();?></ul>

    </div>

  </nav>
<!-- End Navigation --> 



<!--start portfolio -->
  <div id="folio" class="page section">
    <div class="container">
      <div class="sixteen columns">
        <h1><?php _e('Портфолио', 'crazystudio'); ?></h1>
        <h3><span class="small"><?php _e('Те,', 'crazystudio'); ?></span> <span class="smallBold"><?php _e('кто', 'crazystudio'); ?></span>
        <br><span class="largeBold"> <?php _e('не хотят ничему', 'crazystudio'); ?></span><span class="large"> <?php _e('подражать', 'crazystudio'); ?></span>
        <br><span class="medium"><?php _e('ничего', 'crazystudio'); ?></span><span class="mediumBold"> <?php _e('не создают.', 'crazystudio'); ?></span> 
        <br><?php _e('Сальвадор Дали', 'crazystudio'); ?></h3>
      </div>
    </div>
    <div class="gallerySelector">
      <ul class="gallerySelectorList">
        <li class="current"><a data-filter="article.portfolio" href="#"><?php _e('Все', 'crazystudio'); ?></a></li>
        <li><a data-filter="article.portfolio[data-category~='site']" href="#"><?php _e('Веб-сайты', 'crazystudio'); ?></a></li>
        <li><a data-filter="article.portfolio[data-category~='land']" href="#"><?php _e('Лендинги', 'crazystudio'); ?></a></li>
        <li><a data-filter="article.portfolio[data-category~='design']" href="#"><?php _e('Веб-дизайн', 'crazystudio'); ?></a></li>
        <li><a data-filter="article.portfolio[data-category~='polygraphy']" href="#"><?php _e('Полиграфия', 'crazystudio'); ?></a></li>
      </ul>
    </div>
        
    <section class="portfolio_container">


      <?php
      global $posts;
      
      $args = array(
        'numberposts'     => -1,
        'post_type'       => 'portfolio',
      );
      
      $posts = get_posts( $args );
      foreach( $posts as $post ) { setup_postdata( $post );
        ?>

        <article class="portfolio" data-category="<?php the_field( 'folio_category' ); ?>">
          <section class="thumbImage">
            <img src="<?php the_field( 'folio_small_pic' ); ?>" alt="" class="fullwidth">
            <div class="thumbTextWrap">
              <div class="thumbText">
                <?php the_title( '<h3 class="sectionTitle">', '</h3>' ); ?>
                <p><?php the_field( 'folio_desc' ); ?></p>
                <a class="thumbLink" href="<?php the_field( 'folio_big_pic' ); ?>" rel="prettyPhoto[gallery1]" title="<?php the_field( 'folio_desc' ); ?>"><i class="icon-search"></i></a>
              </div>
            </div>
          </section>
        </article>

        <?php
      }
      wp_reset_postdata();
      ?>
    </section>

    <div class="portfolioBottom"></div>
        
    <!--start parallax 1-->
    <div id="parallax-1" class="parallax fixed" style="background-image: url(<?php bloginfo( 'template_url' ); ?>/assets/images/parallax/parallax-1.jpg);">
      <div class="quoteWrap">
        <div class="quote">
          <div class="container">
            <div class="sixteen columns">
              <h3><span class="large"><?php _e('Необычные', 'crazystudio'); ?></span> <span class="largeBold"><?php _e('проекты', 'crazystudio'); ?></span>
                <br><span class="medium"><?php _e('за', 'crazystudio'); ?></span> <span class="mediumBold"><?php _e('обычные деньги.', 'crazystudio'); ?></span></h3>      
            </div>
          </div>  
        </div>
      </div>
    </div>
    <!--end parallax-->
    
  </div>
<!--end portfolio-->       

<!--start About -->
  <div id="about" class="page section">
  
    <div class="container aboutContainer">
      <div class="sixteen columns">
        <h1><span>Crazy<br /></span>Studio</h1>       
          <h3>
            <br><span class="mediumBold"><?php _e('Коллективное творчество - ', 'crazystudio'); ?></span> <span class="medium"><?php _e('это чепуха,', 'crazystudio'); ?></span>
            <br><span class="medium"><?php _e('но творчество в коллективе - ', 'crazystudio'); ?></span><span class="mediumBold"><?php _e('это единственный вид', 'crazystudio'); ?></span>
            <br><span class="large"><?php _e('настоящего и плодотворного', 'crazystudio'); ?></span> <span class="largeBold"><?php _e('творчества.', 'crazystudio'); ?></span>
          </h3>
      </div>
        
      <div class="one-third column">
        <div class="teamImage">
          <img class="scale-with-grid" src="<?php bloginfo( 'template_url' ); ?>/assets/images/team/director.jpg" alt=""/> 
          <div class="teamName">
            <h2><?php _e('Коровай Артем', 'crazystudio'); ?></h2>
            <h3><?php _e('Креативный директор', 'crazystudio'); ?></h3>
            <ul class="socialLinksTeam tooltips">
              <li><a href="https://vk.com/artemgbweb" rel="tooltip" title="Vkontakte" target="_blank"><span class="ic-vk"></span></a></li>
              <li><a href="https://www.facebook.com/artemagent" rel="tooltip" title="Facebook" target="_blank"><span class="ic-facebook"></span></a></li>
              <li><a href="https://t.me/artemcrazy" rel="tooltip" title="Telegram" target="_blank"><span class="ic-telegram" target="_blank"></span></a></li>
            </ul>
          </div>
        </div>                        
        <p><?php _e('Успех директора на', 'crazystudio'); ?> <span class="highlight">15%</span> <?php _e('зависит от его профессиональных навыков и на', 'crazystudio'); ?> <span class="highlight">85%</span> <?php _e('– от умения общаться с людьми.', 'crazystudio'); ?></p>
        
        <h3 class="sectionTitle"><?php _e('Навыки', 'crazystudio'); ?></h3>
        <div class="teamSkill">
          <ul>
            <li>
              <p class="skill"><?php _e('Организация процессов', 'crazystudio'); ?></p>
              <div class="bar percent100">
              <p class="percent">100%</p></div>
            </li>
            <li>
              <p class="skill"><?php _e('Коммуникация с заказчиком', 'crazystudio'); ?></p>
              <div class="bar percent100">
              <p class="percent">100%</p></div>
            </li>
            <li>
              <p class="skill"><?php _e('Планирование', 'crazystudio'); ?></p>
              <div class="bar percent90">
              <p class="percent">90%</p></div>
            </li>
            <li>
              <p class="skill"><?php _e('Контроль процессов', 'crazystudio'); ?></p>
              <div class="bar percent80">
              <p class="percent">80%</p></div>
            </li>
            <li>
              <p class="skill">MS Word</p>
              <div class="bar percent25">
              <p class="percent">25%</p></div>
            </li>
          </ul>
        </div>
      </div>
        
      <div class="one-third column">
        <div class="teamImage">
          <img class="scale-with-grid" src="<?php bloginfo( 'template_url' ); ?>/assets/images/team/designer.jpg" alt=""/> 
          <div class="teamName">
            <h2><?php _e('Анастасия Зеленская', 'crazystudio'); ?></h2>
            <h3><?php _e('Арт-директор', 'crazystudio'); ?></h3>
            <ul class="socialLinksTeam tooltips">
              <li><a href="https://vk.com/a_zelenskay" rel="tooltip" title="Vkontakte" target="_blank"><span class="ic-vk"></span></a></li>
              <li><a href="https://www.facebook.com/anastasiya.zelenskaya.520" rel="tooltip" title="Facebook" target="_blank"><span class="ic-facebook" target="_blank"></span></a></li>
              <li><a href="" rel="tooltip" title="Telegram"><span class="ic-telegram" target="_blank"></span></a></li>
            </ul>
          </div>
        </div>                        
        <p><?php _e('Есть три ответа на результат дизайна – да, нет и', 'crazystudio'); ?> <span class="highlight"><?php _e('НИЧЕГО СЕБЕ', 'crazystudio'); ?></span>. <?php _e('«Ничего себе» – это то, к чему надо стремиться.', 'crazystudio'); ?></p>
          
        <h3 class="sectionTitle"><?php _e('Навыки', 'crazystudio'); ?></h3>
        <div class="teamSkill">
          <ul>
            <li>
              <p class="skill">Photoshop</p>
              <div class="bar percent100">
              <p class="percent">100%</p></div>
            </li>
            <li>
              <p class="skill">Illustrator</p>
              <div class="bar percent100">
              <p class="percent">100%</p></div>
            </li>
            <li>
              <p class="skill"><?php _e('Веб-дизайн', 'crazystudio'); ?></p>
              <div class="bar percent100">
              <p class="percent">100%</p></div>
            </li>
            <li>
              <p class="skill"><?php _e('Полиграфия', 'crazystudio'); ?></p>
              <div class="bar percent100">
              <p class="percent">100%</p></div>
            </li>
            <li>
              <p class="skill"><?php _e('Клининг', 'crazystudio'); ?></p>
              <div class="bar percent25">
              <p class="percent">25%</p></div>
            </li>
          </ul>
        </div>
      </div>
        
      <div class="one-third column">
        <div class="teamImage">
          <img class="scale-with-grid" src="<?php bloginfo( 'template_url' ); ?>/assets/images/team/developer.jpg" alt=""/> 
          <div class="teamName">
            <h2><?php _e('Вадим Головин', 'crazystudio'); ?></h2>
            <h3><?php _e('Веб-разработчик', 'crazystudio'); ?></h3>
            <ul class="socialLinksTeam tooltips">
              <li><a href="https://vk.com/id382163982" rel="tooltip" title="Vkontakte" target="_blank"><span class="ic-vk"></span></a></li>
              <li><a href="https://www.facebook.com/leder.lowenzahn" rel="tooltip" title="Facebook" target="_blank"><span class="ic-facebook"></span></a></li>
              <li><a href="https://t.me/vadhol" rel="tooltip" title="Telegram" target="_blank"><span class="ic-telegram"></span></a></li>
            </ul>
          </div>
        </div>                        
        <p><?php _e('Как видно,', 'crazystudio'); ?> <span class="highlight"><?php _e('совершенство', 'crazystudio'); ?></span> <?php _e('достигается не тогда, когда уже нечего прибавить, но когда уже ничего нельзя отнять.', 'crazystudio'); ?></p>
        
        <h3 class="sectionTitle"><?php _e('Навыки', 'crazystudio'); ?></h3>
        <div class="teamSkill">
          <ul>
            <li>
              <p class="skill">HTML5</p>
              <div class="bar percent100">
              <p class="percent">100%</p></div>
            </li>
            <li>
              <p class="skill">CSS3</p>
              <div class="bar percent100">
              <p class="percent">100%</p></div>
            </li>
            <li>
              <p class="skill">JavaScript</p>
              <div class="bar percent70">
              <p class="percent">70%</p></div>
            </li>
            <li>
              <p class="skill">WordPress</p>
              <div class="bar percent60">
              <p class="percent">60%</p></div>
            </li>
            <li>
              <p class="skill"><?php _e('Оптимизация', 'crazystudio'); ?></p>
              <div class="bar percent80">
              <p class="percent">80%</p></div>
            </li>
          </ul>
        </div>
      </div>
        
      <div class="sixteen columns">
        <h3 class="sectionTitle"><?php _e('Студия в цифрах', 'crazystudio'); ?></h3>
      </div>
        
      <div class="statsWrap">
        <div class="stats">
          <div class="statDummy"></div>
          <div class="statInfo">
              <p class="statNumber">98%</p>
              <p class="statText"><?php _e('Положительных отзывов', 'crazystudio'); ?></p>
          </div>
        </div>
      </div>
      <div class="statsWrap">
        <div class="stats">
          <div class="statDummy"></div>
          <div class="statInfo">
              <p class="statNumber">3</p>
              <p class="statText"><?php _e('Награды в 2017 году', 'crazystudio'); ?></p>
          </div>
        </div>
      </div>
      <div class="statsWrap">
        <div class="stats">
          <div class="statDummy"></div>
          <div class="statInfo">
              <p class="statNumber">14</p>
              <p class="statText"><?php _e('Сотрудников', 'crazystudio'); ?></p>
          </div>
        </div>
      </div>
      <div class="statsWrap">
        <div class="stats">
          <div class="statDummy"></div>
          <div class="statInfo">
              <p class="statNumber">36</p>
              <p class="statText"><?php _e('Чашек кофе в день', 'crazystudio'); ?></p>
          </div>
        </div>
      </div>
      <div class="statsWrap">
        <div class="stats">
          <div class="statDummy"></div>
          <div class="statInfo">
              <p class="statNumber">14</p>
              <p class="statText"><?php _e('Сайтов в ТОП-3', 'crazystudio'); ?></p>
          </div>
        </div>
      </div>
      <div class="statsWrap">
        <div class="stats">
          <div class="statDummy"></div>
          <div class="statInfo">
              <p class="statNumber">2</p>
              <p class="statText"><?php _e('Года на рынке', 'crazystudio'); ?></p>
          </div>
        </div>
      </div>
      <div class="statsWrap">
        <div class="stats">
          <div class="statDummy"></div>
          <div class="statInfo">
              <p class="statNumber">67</p>
              <p class="statText"><?php _e('Создано сайтов', 'crazystudio'); ?></p>
          </div>
        </div>
      </div>
      <div class="statsWrap">
        <div class="stats">
          <div class="statDummy"></div>
          <div class="statInfo">
              <p class="statNumber statNumberSmall">122,345</p>
              <p class="statText"><?php _e('Уникальных посетителей', 'crazystudio'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--end about--> 

<!--start parallax 2-->
  <div id="parallax-2" class="parallax fixed" style="background-image: url(<?php bloginfo( 'template_url' ); ?>/assets/images/parallax/parallax-2.jpg);">
    <div class="quoteWrap">
      <div class="quote">
        <div class="container">
          <div class="sixteen columns">
            <h3><span class="smallBold"><?php _e('Истинный', 'crazystudio'); ?></span> <span class="small"><?php _e('художник -', 'crazystudio'); ?></span>
            <br><span class="large"><?php _e('не тот, кто', 'crazystudio'); ?></span> <span class="largeBold"><?php _e('вдохновлен,', 'crazystudio'); ?></span>
            <br><span class="medium"><?php _e('а тот, кто', 'crazystudio'); ?></span><span class="mediumBold"> <?php _e('вдохновляет других.', 'crazystudio'); ?></span> 
            <br><span class="author"><?php _e('Сальвадор Дали', 'crazystudio'); ?></span></h3>
          </div>
        </div>  
      </div>
    </div>
  </div>
<!--end parallax 2-->    
    
<!--start Services -->
  <div id="services" class="page section">
    <div class="container servicesContainer">
      <div class="sixteen columns">
        <h1><span><?php _e('Наши', 'crazystudio'); ?></span><br/><?php _e('услуги', 'crazystudio'); ?></h1>
        <h3><span class="mediumBold"><?php _e('Уникальное', 'crazystudio'); ?></span> <span class="medium"><?php _e('сочетание', 'crazystudio'); ?></span>
        <br><span class="medium"><?php _e('талантов', 'crazystudio'); ?></span> <span class="mediumBold"><?php _e('позволяет нам', 'crazystudio'); ?></span>
        <br><span class="large"><?php _e('предложить', 'crazystudio'); ?></span> <span class="largeBold"><?php _e('такие', 'crazystudio'); ?></span>
        <br><span class="medium"><?php _e('разнообразные', 'crazystudio'); ?></span> <span class="mediumBold"><?php _e('услуги.', 'crazystudio'); ?></span> 
        </h3>
      </div>
  
      <div class="one-third column">
        <div class="serviceItem landing-page">
          <div class="serviceInfoWrap">
            <div class="serviceInfo">
              <div class="serviceInfoFront"></div>
              <div class="serviceInfoBack">
                <div class="serviceIcon"><i class="ic-rocket"></i></div>
                <h3><?php _e('Лендинг', 'crazystudio'); ?></h3>
                <a href="<?php echo get_page_link( 153 ); ?>" class="button button--big" target="_blank"><?php _e('Заказать', 'crazystudio'); ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="one-third column">
        <div class="serviceItem corp-site">
          <div class="serviceInfoWrap">
            <div class="serviceInfo">
              <div class="serviceInfoFront"></div>
              <div class="serviceInfoBack">
                <div class="serviceIcon"><i class="ic-sitemap"></i></div>
                <h3><?php _e('Многостраничный сайт', 'crazystudio'); ?></h3>
                <a href="<?php echo get_page_link( 157 ); ?>" class="button button--big" target="_blank"><?php _e('Заказать', 'crazystudio'); ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="one-third column">
        <div class="serviceItem online-shop">
          <div class="serviceInfoWrap">
            <div class="serviceInfo">
              <div class="serviceInfoFront"></div>
              <div class="serviceInfoBack">
                <div class="serviceIcon"><i class="ic-cart"></i></div>
                <h3><?php _e('Интернет-магазин', 'crazystudio'); ?></h3>
                <a href="<?php echo get_page_link( 162 ); ?>" class="button button--big" target="_blank"><?php _e('Заказать', 'crazystudio'); ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="one-third column">
        <div class="serviceItem logos">
          <div class="serviceInfoWrap">
            <div class="serviceInfo">
              <div class="serviceInfoFront"></div>
              <div class="serviceInfoBack">
                <div class="serviceIcon"><i class="ic-shield"></i></div>
                <h3><?php _e('Логотип', 'crazystudio'); ?></h3>
                <a href="<?php echo get_page_link( 155 ); ?>" class="button button--big" target="_blank"><?php _e('Заказать', 'crazystudio'); ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="one-third column">
        <div class="serviceItem polygraphy">
          <div class="serviceInfoWrap">
            <div class="serviceInfo">
              <div class="serviceInfoFront"></div>
              <div class="serviceInfoBack">
                <div class="serviceIcon"><i class="ic-newspaper"></i></div>
                <h3><?php _e('Полиграфия', 'crazystudio'); ?></h3>
                <a href="<?php echo get_page_link( 159 ); ?>" class="button button--big" target="_blank"><?php _e('Заказать', 'crazystudio'); ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="one-third column">
        <div class="serviceItem brand">
          <div class="serviceInfoWrap">
            <div class="serviceInfo">
              <div class="serviceInfoFront"></div>
              <div class="serviceInfoBack">
                <div class="serviceIcon"><i class="ic-briefcase"></i></div>
                <h3><?php _e('Фирменный стиль', 'crazystudio'); ?></h3>
                <a href="<?php echo get_page_link( 150 ); ?>" class="button button--big" target="_blank"><?php _e('Заказать', 'crazystudio'); ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--end services-->  

<!--start parallax 3-->
  <div id="parallax-3" class="parallax fixed" style="background-image: url(<?php bloginfo( 'template_url' ); ?>/assets/images/parallax/parallax-3.jpg);">
    <div class="quoteWrap">
      <div class="quote">
        <div class="container">
          <div class="sixteen columns">
            <h3><span class="largeBold"><?php _e('Интеллект', 'crazystudio'); ?></span> <span class="large"><?php _e('без амбиций -', 'crazystudio'); ?></span>
              <br><span class="medium"><?php _e('что птица', 'crazystudio'); ?></span> <span class="mediumBold"><?php _e('без крыльев.', 'crazystudio'); ?></span> 
              <br><span class="author"><?php _e('Сальвадор Дали', 'crazystudio'); ?></span>
            </h3>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--end parallax 3-->    
  
<!--start contact-->
  <div id="contact" class="page section">
    <div class="container contactContainer">
      <div class="sixteen columns">
        <h1><?php _e('Контакты', 'crazystudio'); ?></h1>
        <h3><span class="mediumBold"><?php _e('Напишите', 'crazystudio'); ?></span> <span class="medium"><?php _e('нам', 'crazystudio'); ?></span>
        <br><span class="medium"><?php _e('и мы', 'crazystudio'); ?></span> <span class="mediumBold"><?php _e('поможем', 'crazystudio'); ?></span>
        <br><span class="large"><?php _e('в развитии', 'crazystudio'); ?></span> <span class="largeBold"><?php _e('вашего бизнеса.', 'crazystudio'); ?></span></h3>
      </div> 
                    
      <div class="sixteen columns marginTop contactDetails">
        <ul>
          <li><span class="icon-phone"></span><?php _e('Тел.', 'crazystudio'); ?>: <a href="tel:<?php the_field( 'phone_link' ); ?>"><?php the_field( 'phone' ); ?></a></li>
          <li><span class="icon-envelop"></span>Email: <a href="mailto:<?php the_field( 'email' ); ?>"><?php the_field( 'email' ); ?></a></li>
          <li><span class="ic-telegram"></span>Telegram: <a href="<?php the_field( 'telegram_link' ); ?>" target="_blank"><?php the_field( 'telegram' ); ?></a></li>
        </ul>
      </div>
          
      <div id="contact_form">
        <div class="two-thirds column marginTop formWrap">
          <?php
          if ( isset( $_GET['lang'] ) && esc_attr( $_GET['lang'] == 'en' ) ) {
            echo do_shortcode( '[cf7-form cf7key="kontaktnaja-forma-1-eng"]' );
          } else {
            echo do_shortcode( '[cf7-form cf7key="kontaktnaja-forma-1"]' );
          }
          ?>
          <!-- <?php echo do_shortcode( '[contact-form-7 id="146" title="Контактная форма 1" html_class="contactForm"]' ); ?> -->
        </div>
      </div>
          
      <!-- Social -->
      <div class="sixteen columns">
        <h3 class="sectionTitle"><?php _e('Социальные сети', 'crazystudio'); ?></h3>
        <ul class="socialLinks">
          <li><a href="https://vk.com/crazy.studio" title="Vkontakte" target="_blank"><i class="ic-vk"></i></a></li>
          <li><a href="https://www.facebook.com/Crazystudio-924651561049957/" title="Facebook" target="_blank"><i class="ic-facebook"></i></a></li>
          <li><a href="https://www.instagram.com/crazy.studio.official/" title="Instagram" target="_blank"><i class="ic-instagram"></i></a></li>
        </ul>
      </div>
      <!-- Social -->
    </div>
  </div>
<!--end contact--> 

<?php get_footer(); ?>
