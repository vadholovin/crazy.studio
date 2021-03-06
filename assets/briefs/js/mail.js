  jQuery(document).ready(function($) {
    var form = $('#brief-form');
    var action = form.attr('action');

    form.submit(function(e){
      e.preventDefault();
      var name  = $('#name').val(),
          email  = $('#email').val(),
          phone  = $('#phone').val(),
          skype  = $('#skype').val();

      var proceed = true;
      var $this = $(this);

      if(name == '' && email == '' && phone == '' && skype == '') {
        $('.modal-box').removeClass('is-hidden');
        $('.modal-content__title').html('Ошибка!');
        $('.modal-content__text').html('Не указаны имя и контактные данные.');
        proceed = false;
      } else if (name == '') {
        $('.modal-box').removeClass('is-hidden');
        $('.modal-content__title').html('Ошибка!');
        $('.modal-content__text').html('Забыли указать имя.');
        proceed = false;
      } else if (email == '' && phone == '' && skype == '') {
        $('.modal-box').removeClass('is-hidden');
        $('.modal-content__title').html('Ошибка!');
        $('.modal-content__text').html('Забыли указать контактные данные.');
        proceed = false;
      }

      if(proceed){
        $.ajax({
          url : action,
          type: 'POST',
          data: $this.serialize(),
        }).done(function(res) {
          answer(res);
        });
      }
    });

    function answer(res) {
      if(res == 'error'){
        $('.modal-box').removeClass('is-hidden');
        $('.modal-content__title').html('Ошибка отправки!');
        $('.modal-content__text').html('Попробуйте снова.');
      }
      if(res == 'done'){
        $('.modal-box').removeClass('is-hidden');
        $('.modal-content__title').html('Отправлено!');
        $('.modal-content__text').html('Спасибо, что заполнили наш бриф!<br> Менеджер свяжется с вами в ближайшее время.');
      }
    }
  });