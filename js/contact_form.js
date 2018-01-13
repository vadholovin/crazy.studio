(function($){
	$(document).ready(function() {
		$('#submit-form').click(function(e){
		
			e.preventDefault();
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            var name  = $('#form_name').val(),
				email  = $('#form_email').val(),
				subject  = $('#form_subject').val(),
				message  = $('#form_message').val(),
				data_html,
				success = $('#success');
				
    		if(name == "")
                $('#form_name').val('Введите, пожалуйста, свое имя.');
				
			if(subject == "")
                $('#form_subject').val('Введите, пожалуйста, тему сообщения.');

            if(email == ""){
                $('#form_email').val('Необходимо указать email.');
            }else if(reg.test(email) == false){
                $('#form_email').val('Ошибка email.');
            }
			
            if(message == "")
                $('#form_message').val('Текст сообщения обязателен.');

            if(message != "" && name != "" && reg.test(email) != false) {
            	data_html = "name=" + name + "&email="+ email + "&message=" + message + "&subject="+ subject;

                //alert(data_html);
                $.ajax({
                    type: 'POST',
                    url: 'contact_form.php',
                    data: data_html,
                    success: function(msg){
						
						if (msg == 'sent'){
                        	success.html('<div class="alert alert-success">Сообщение <strong>успешно</strong> отправлено!</div>')  ;
                            $('#form_name').val('');
							$('#form_email').val('');
							$('#form_message').val('');
                        }else{
                            success.html('<div class="alert alert-error">Сообщение <strong>не</strong> отправлено! Попробуйте снова!</div>')  ; 
                        }
                    }
                });
    
            }
            return false;
        });
	});
})(jQuery);