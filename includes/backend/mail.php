<?php

function send_mail() {
  $to = get_option( 'admin_email' );
  $email = "brief@crazy.wp"; // отправитель
  $subject = $_POST['subject'];
  $name = $_POST['name'];

  // Styles for mail
  $table_style = "color:#333; border-collapse: collapse; margin-left: auto; margin-right: auto; font-size: 14px;";
  $td_subtitle_style = "text-align: center; padding-top: 8px; padding-bottom: 8px; font-size: 18px; border: solid 1px #000000;";
  $td_style = "width: 50%; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; border: solid 1px #000000; text-align: left;";

  // Messages for different briefs
  switch ( $_POST['current-form'] ) {
    case 'identity': // Message for Identity's Brief
      ob_start();
      ?>

      <h2 style="text-align: center;"><?php echo $subject; ?></h2>
      <table style="<?php echo $table_style; ?>">
      <tr>
        <td colspan="2" style="<?php echo $td_subtitle_style; ?>"><b>1 Общая информация</b></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Имя контактного лица:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $name; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Полное название компании и адрес сайта (если есть):</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['company']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Телефон:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['phone']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Viber:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['viber']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Whatsapp:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['whatsapp']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Telegram:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['telegram']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Email:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['email']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Skype:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['skype']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Каковы планируемые сроки проекта?:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['days']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Бюджет проекта:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['budget']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Работать по договору с юр. лицом:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['contract']; ?></td>
      </tr>
      <tr>
        <td colspan="2" style="<?php echo $td_subtitle_style; ?>"><b>2 Информация о компании</b></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Укажите область деятельности компании:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['area']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Укажите ссылки на сайты ваших прямых или косвенных конкурентов. Оцените их фирменный стиль:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['competitors']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Какие есть ключевые отличия от конкурентов, которые надо выделить?:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['differences']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Примечания:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['info-notes']; ?></td>
      </tr>
      <tr>
        <td colspan="2" style="<?php echo $td_subtitle_style; ?>"><b>3 Целевая аудитория</b></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Должны ли мы сами определить целевую аудиторию?:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['is-target']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Если нет, опишите группы целевой аудитории:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['audience']; ?></td>
      </tr>
      <tr>
        <td colspan="2" style="<?php echo $td_subtitle_style; ?>"><b>4 Постановка задачи</b></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Какую задачу вы ставите перед нами?:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['task']; ?></td>
      </tr>
      <tr>
        <td colspan="2" style="<?php echo $td_subtitle_style; ?>"><b>5 Содержание</b></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Есть ли логотип:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['logo']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Если есть, нужно ли вносить изменения в логотип:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['edit-logo']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Если есть логотип, вставьте ссылку на него или прикрепите файл:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['link-logo']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Перечислите на чём будет располагаться ваш фирменный стиль:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['identity-products']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Примечания:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['content-notes']; ?></td>
      </tr>
      <tr>
        <td colspan="2" style="<?php echo $td_subtitle_style; ?>"><b>6 Дизайн</b></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Примеры фирменных стилей, которые нравятся:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['cool-design']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Примеры фирменных стилей, которые НЕ нравится:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['shit-design']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Опишите впечатление, которое должен производить дизайн:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['design-effect']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Надо ли придерживаться текущего фирменного стиля (в случае редизайна):</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['current-style']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Примечания:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['design-notes']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Что еще мы должны знать:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['design-additions']; ?></td>
      </tr>
      </table>

      <?php
      $message = ob_get_contents();
      ob_end_clean();
      break;
    case 'logo': // Message for Logo's Brief
      ob_start();
      ?>

      <h2 style="text-align: center;"><?php echo $subject; ?></h2>
      <table style="<?php echo $table_style; ?>">
      <tr>
        <td colspan="2" style="<?php echo $td_subtitle_style; ?>"><b>1 Общая информация</b></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Имя контактного лица:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $name; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Полное название компании и адрес сайта (если есть):</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['company']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Телефон:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['phone']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Viber:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['viber']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Whatsapp:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['whatsapp']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Telegram:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['telegram']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Email:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['email']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Skype:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['skype']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Каковы планируемые сроки проекта?</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['days']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Бюджет проекта:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['budget']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Работать по договору с юр. лицом:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['contract']; ?></td>
      </tr>
      <tr>
        <td colspan="2" style="<?php echo $td_subtitle_style; ?>"><b>2 Информация о компании</b></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Укажите область деятельности компании:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['area']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Укажите ссылки на сайты ваших прямых или косвенных конкурентов. Оцените их логотипы, укажите, что вам нравится, а что нет:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['competitors']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Какие есть ключевые отличия от конкурентов, которые надо выделить?</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['differences']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Примечания:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['info-notes']; ?></td>
      </tr>
      <tr>
        <td colspan="2" style="<?php echo $td_subtitle_style; ?>"><b>3 Целевая аудитория</b></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Должны ли мы сами определить целевую аудиторию?:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['is-target']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Если нет, опишите группы целевой аудитории:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['audience']; ?></td>
      </tr>
      <tr>
        <td colspan="2" style="<?php echo $td_subtitle_style; ?>"><b>4 Постановка задачи</b></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Какую задачу вы ставите перед нами?:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['task']; ?></td>
      </tr>
      <tr>
        <td colspan="2" style="<?php echo $td_subtitle_style; ?>"><b>5 Дизайн</b></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>В случае редизайна, приложите ссылку с логотипом и/или фирменным стилем:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['current-style']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Примеры дизайна логотипа, которые нравятся:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['cool-design']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Примеры дизайна логотипа, которые НЕ нравятся:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['shit-design']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Опишите впечатление, которое должен производить дизайн:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['design-effect']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Примечания:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['design-notes']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Что еще мы должны знать:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['design-additions']; ?></td>
      </tr>
      </table>

      <?php
      $message = ob_get_contents();
      ob_end_clean();
      break;
    case 'polygraphy': // Message for Polygraphy's Brief
      ob_start();
      ?>
      
      <h2 style="text-align: center;"><?php echo $subject; ?></h2>
      <table style="<?php echo $table_style; ?>">
      <tr>
        <td colspan="2" style="<?php echo $td_subtitle_style; ?>"><b>1 Общая информация</b></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Имя контактного лица:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $name; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Полное название компании и адрес сайта (если есть):</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['company']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Телефон:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['phone']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Viber:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['viber']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Whatsapp:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['whatsapp']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Telegram:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['telegram']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Email:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['email']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Skype:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['skype']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Каковы планируемые сроки проекта?</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['days']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Бюджет проекта:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['budget']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Работать по договору с юр. лицом:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['contract']; ?></td>
      </tr>
      <tr>
        <td colspan="2" style="<?php echo $td_subtitle_style; ?>"><b>2 Информация о компании</b></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Укажите область деятельности компании:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['area']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Укажите ссылки на сайты ваших прямых или косвенных конкурентов. Оцените их фирменный стиль:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['competitors']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Какие есть ключевые отличия от конкурентов, которые надо выделить?:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['differences']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Примечания:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['info-notes']; ?></td>
      </tr>
      <tr>
        <td colspan="2" style="<?php echo $td_subtitle_style; ?>"><b>3 Целевая аудитория</b></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Должны ли мы сами определить целевую аудиторию?:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['is-target']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Если нет, опишите группы целевой аудитории:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['audience']; ?></td>
      </tr>
      <tr>
        <td colspan="2" style="<?php echo $td_subtitle_style; ?>"><b>4 Постановка задачи</b></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Укажите что вам требуется:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['task-instance1'] . ", " . $_POST['task-instance2'] . ", " . $_POST['task-instance3'] . ", " . $_POST['task-instance4'] . ", " . $_POST['task-instance5'] . ", " . $_POST['task-instance6'] . ", " . $_POST['task-instance7'] . ", " . $_POST['task-instance8'] . ", " . $_POST['task-instance9']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Какую задачу вы ставите перед нами?:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['task']; ?></td>
      </tr>
      <tr>
        <td colspan="2" style="<?php echo $td_subtitle_style; ?>"><b>5 Содержание</b></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Если вы заказываете каталог или буклет, укажите разделы:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['catalog-sections']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Укажите всю информацию, которая должна содержаться в визитке/буклете/афише/другое:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['content-info']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Нужно ли делать другие языковые варианты:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['other-language']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Кто занимается подготовкой контента, нужна ли подготовка изображений или текста:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['task-content']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Примечания:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['content-notes']; ?></td>
      </tr>
      <tr>
        <td colspan="2" style="<?php echo $td_subtitle_style; ?>"><b>6 Дизайн</b></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Есть ли логотип и/или фирменный стиль, которые надо использовать:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['logo']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Если нет, требуется ли их разработка:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['create-logo']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Если есть логотип, приложите ссылку или прикрепите файл:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['link-logo']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Примеры дизайна, которые нравятся:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['cool-design']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Примеры дизайна, которые НЕ нравятся:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['shit-design']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Опишите впечатление, которое должен производить дизайн:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['design-effect']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Надо ли придерживаться текущего дизайна (в случае редизайна):</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['current-style']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Примечания:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['design-notes']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Что еще мы должны знать:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['design-additions']; ?></td>
      </tr>
      </table>

      <?php
      $message = ob_get_contents();
      ob_end_clean();
      break;
    case 'land': // Message for Landing Page's Brief
      ob_start();
      ?>
      
      <h2 style="text-align: center;"><?php echo $subject; ?></h2>
      <table style="<?php echo $table_style; ?>">
      <tr>
        <td colspan="2" style="<?php echo $td_subtitle_style; ?>"><b>1 Общая информация</b></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Имя контактного лица:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $name; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Полное название компании и адрес сайта (если есть):</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['company']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Телефон:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['phone']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Viber:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['viber']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Whatsapp:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['whatsapp']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Telegram:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['telegram']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Email:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['email']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Skype:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['skype']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Каковы планируемые сроки проекта?</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['days']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Бюджет проекта:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['budget']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Работать по договору с юр. лицом:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['contract']; ?></td>
      </tr>
      <tr>
        <td colspan="2" style="<?php echo $td_subtitle_style; ?>"><b>2 Информация о компании</b></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Укажите область деятельности компании:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['area']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Укажите ссылки на сайты ваших прямых или косвенных конкурентов:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['competitors-link']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Оцените их:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['competitors']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Какие есть ключевые отличия от конкурентов, которые надо выделить?</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['differences']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>География работы компании:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['geo']; ?></td>
      </tr>
      <tr>
        <td colspan="2" style="<?php echo $td_subtitle_style; ?>"><b>3 Целевая аудитория</b></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Должны ли мы сами определить целевую аудиторию?:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['is-target']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Если нет, опишите группы целевой аудитории:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['audience']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Каких результатов вы хотите добиться с помощью нового сайта?:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['results']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Что хотят получить от вашего сайта посетители?:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['client-desires']; ?></td>
      </tr>
      <tr>
        <td colspan="2" style="<?php echo $td_subtitle_style; ?>"><b>4 Техническое задание</b></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Есть ли у вас дизайн сайта?:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['site-design']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>CMS сайта?</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['cms']; ?></td>
      </tr>
      <tr><td style="text-align: center;"><b>Функциональные возможности сайта:</b></td></tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Формы обратной связи:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['feedback']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Калькулятор:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['calc']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Чат:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['chat']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Размещение файлов для скачивания:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['downloads']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Фотогалерея:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['gallery']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Мультиязычный сайт:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['multi-lang']; ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Перечислите все информационные блоки, которые должны присутствовать на лендинге:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['info-blocks']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Есть ли у вас готовый контент для наполнения сайта?:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['own-content']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Укажите все, что, по-вашему мнению, может уточнить задачу по созданию сайта:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['tech-notes']; ?></td>
      </tr>
      <tr>
        <td colspan="2" style="<?php echo $td_subtitle_style; ?>"><b>5 Компоновка и дизайн</b></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Укажите адреса сайтов, дизайн которых вам нравится:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['cool-design']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Укажите адреса сайтов, дизайн которых вам НЕ нравится:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['shit-design']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Настроение и ассоциации, которые должен вызывать дизайн:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['mood']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Другое:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['mood-other']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Цветовая гамма и насыщенность:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['gamma']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Другое:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['gamma-other']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Укажите все, что, по-вашему мнению, может уточнить задачу по созданию дизайна:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['multi-lang']; ?></td>
      </tr>
      </table>

      <?php
      $message = ob_get_contents();
      ob_end_clean();
      break;
    case 'multi': // Message for Multipage Site's Brief
      ob_start();
      ?>

      <h2 style="text-align: center;"><?php echo $subject; ?></h2>
      <table style="<?php echo $table_style; ?>">
      <tr>
        <td colspan="2" style="<?php echo $td_subtitle_style; ?>"><b>1 Общая информация</b></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Имя контактного лица:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $name; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Полное название компании и адрес сайта (если есть):</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['company']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Телефон:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['phone']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Viber:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['viber']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Whatsapp:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['whatsapp']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Telegram:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['telegram']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Email:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['email']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Skype:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['skype']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Каковы планируемые сроки проекта?</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['days']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Бюджет проекта:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['budget']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Работать по договору с юр. лицом:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['contract']; ?></td>
      </tr>
      <tr>
        <td colspan="2" style="<?php echo $td_subtitle_style; ?>"><b>2 Информация о компании</b></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Укажите область деятельности компании:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['area']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Укажите ссылки на сайты ваших прямых или косвенных конкурентов:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['competitors-link']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Оцените их:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['competitors']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Какие есть ключевые отличия от конкурентов, которые надо выделить?:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['differences']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>География работы компании:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['geo']; ?></td>
      </tr>
      <tr>
        <td colspan="2" style="<?php echo $td_subtitle_style; ?>"><b>3 Целевая аудитория</b></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Должны ли мы сами определить целевую аудиторию?:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['is-target']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Если нет, опишите группы целевой аудитории:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['audience']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Каких результатов вы хотите добиться с помощью нового сайта?:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['results']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Что хотят получить от вашего сайта посетители?:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['client-desires']; ?></td>
      </tr>
      <tr>
        <td colspan="2" style="<?php echo $td_subtitle_style; ?>"><b>4 Техническое задание</b></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Есть ли у вас дизайн сайта?:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['site-design']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>CMS сайта?:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['cms']; ?></td>
      </tr>
      <tr><td style="text-align: center;"><b>Функциональные возможности сайта:</b></td></tr>
      <tr><td style="text-align: center;"><b>a) Взаимодействие с посетителями</b></td></tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Публикация статей (блог):</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['blog']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Подписка на рассылку новостей:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['subscribe']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Формы обратной связи:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['feedback']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Калькулятор:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['calc']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Отзывы:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['reviews']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Чат:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['chat']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Личный кабинет:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['personal-area']; ?></td>
      </tr>
      <tr><td style="text-align: center;"><b>б) Дополнительные опции</b></td></tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Размещение файлов для скачивания:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['downloads']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Фотогалерея:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['gallery']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Поиск по сайту:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['search']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Система помощи:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['helper']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Интеграция CRM:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['crm']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Мультиязычный сайт:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['multi-lang']; ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Перечислите все информационные блоки, которые обязательно должны присутствовать на главной и на внутренних страницах сайта:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['info-blocks']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Есть ли у вас готовый контент для наполнения сайта?:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['own-content']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Укажите все, что, по-вашему мнению, может уточнить задачу по созданию сайта:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['tech-notes']; ?></td>
      </tr>
      <tr>
        <td colspan="2" style="<?php echo $td_subtitle_style; ?>"><b>5 Компоновка и дизайн</b></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Укажите адреса сайтов, дизайн которых вам нравится:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['cool-design']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Укажите адреса сайтов, дизайн которых вам НЕ нравится:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['shit-design']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Общая композиция сайта:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['composition']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Другое:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['composition-other']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Настроение и ассоциации, которые должен вызывать дизайн:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['mood']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Другое:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['mood-other']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Цветовая гамма и насыщенность:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['gamma']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Другое:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['gamma-other']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Укажите все, что, по-вашему мнению, может уточнить задачу по созданию дизайна:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['multi-lang']; ?></td>
      </tr>
      </table>
      
      <?php
      $message = ob_get_contents();
      ob_end_clean();
      break;
    case 'shop': // Message for Shop's Brief
      ob_start();
      ?>
      
      <h2 style="text-align: center;"><?php echo $subject; ?></h2>
      <table style="<?php echo $table_style; ?>">
      <tr>
        <td colspan="2" style="<?php echo $td_subtitle_style; ?>"><b>1 Общая информация</b></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Имя контактного лица:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $name; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Полное название компании и адрес сайта (если есть):</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['company']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Телефон:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['phone']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Viber:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['viber']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Whatsapp:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['whatsapp']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Telegram:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['telegram']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Email:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['email']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Skype:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['skype']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Каковы планируемые сроки проекта?</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['days']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Бюджет проекта:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['budget']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Работать по договору с юр. лицом:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['contract']; ?></td>
      </tr>
      <tr>
        <td colspan="2" style="<?php echo $td_subtitle_style; ?>"><b>2 Информация о компании</b></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Укажите область деятельности компании:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['area']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Укажите ссылки на сайты ваших прямых или косвенных конкурентов:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['competitors-link']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Оцените их:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['competitors']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Какие есть ключевые отличия от конкурентов, которые надо выделить?:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['differences']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>География работы компании:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['geo']; ?></td>
      </tr>
      <tr>
        <td colspan="2" style="<?php echo $td_subtitle_style; ?>"><b>3 Целевая аудитория</b></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Должны ли мы сами определить целевую аудиторию?:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['is-target']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Если нет, опишите группы целевой аудитории:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['audience']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Каких результатов вы хотите добиться с помощью нового сайта?:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['results']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Что хотят получить от вашего сайта посетители?:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['client-desires']; ?></td>
      </tr>
      <tr>
        <td colspan="2" style="<?php echo $td_subtitle_style; ?>"><b>4 Техническое задание</b></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Есть ли у вас дизайн сайта?:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['site-design']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>CMS сайта?:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['cms']; ?></td>
      </tr>
      <tr><td style="text-align: center;"><b>Функциональные возможности сайта:</b></td></tr>
      <tr><td style="text-align: center;"><b>a) Электронная коммерция</b></td></tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Онлайн-платежи:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['online-pay']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Акции и скидки:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['stock']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Корзина:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['basket']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Интеграция 1С:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['include-1c']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Информация о доставке:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['delivery']; ?></td>
      </tr>
      <tr><td style="text-align: center;"><b>б) Взаимодействие с клиентом</b></td></tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Публикация статей (блог):</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['blog']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Подписка на рассылку новостей:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['subscribe']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Формы обратной связи:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['feedback']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Калькулятор:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['calc']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Отзывы:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['reviews']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Чат:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['chat']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Личный кабинет:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['personal-area']; ?></td>
      </tr>
      <tr><td style="text-align: center;"><b>в) Другое</b></td></tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Размещение файлов для скачивания:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['downloads']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Фотогалерея:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['gallery']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Поиск по сайту:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['search']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Система помощи:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['helper']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Интеграция CRM:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['crm']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Мультиязычный сайт:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['multi-lang']; ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Перечислите все информационные блоки, которые обязательно должны присутствовать на главной и на внутренних страницах сайта:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['info-blocks']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Есть ли у вас готовый контент для наполнения сайта?:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['own-content']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Количество товаров на сайте:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['goods']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Добавление товара:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['add-goods']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Укажите все, что, по-вашему мнению, может уточнить задачу по созданию сайта:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['tech-notes']; ?></td>
      </tr>
      <tr>
        <td colspan="2" style="<?php echo $td_subtitle_style; ?>"><b>5 Компоновка и дизайн</b></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Укажите адреса сайтов, дизайн которых вам нравится:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['cool-design']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Укажите адреса сайтов, дизайн которых вам НЕ нравится:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['shit-design']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Общая композиция сайта:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['composition']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Другое:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['composition-other']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Настроение и ассоциации, которые должен вызывать дизайн:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['mood']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Другое:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['mood-other']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Цветовая гамма и насыщенность:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['gamma']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Другое:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['gamma-other']; ?></td>
      </tr>
      <tr>
        <td style="<?php echo $td_style; ?>"><b>Укажите все, что, по-вашему мнению, может уточнить задачу по созданию дизайна:</b></td>
        <td style="<?php echo $td_style; ?>"><?php echo $_POST['multi-lang']; ?></td>
      </tr>
      </table>

      <?php
      $message = ob_get_contents();
      ob_end_clean();
      break;
  }
  
  remove_all_filters( 'wp_mail_from' );
  remove_all_filters( 'wp_mail_from_name' );
    
  $headers = "MIME-Version: 1.0\r\nContent-type: text/html; charset=utf-8\r\n";
  $headers .= "From: brief@crazy.wp\r\n";
  $headers .= "X-Priority: 1\r\n";

  $sentMail = wp_mail($to, $subject, $message, $headers);
  if ($sentMail) { //output success or failure messages
    echo 'done';
    exit;
  } else {
    echo 'error';
    exit;
  }
}