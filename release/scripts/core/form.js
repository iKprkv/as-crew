var success = ' <a class="back t-19 t-w-800 t-lh-3 t-a-left c-fff underline text-appear anim">Back</a> <div class="success-area fade-in anim"> <div class="title t-100 c-fff t-w-800 t-lh-1-5 "> <div class="text-wrapper"> <div class="text text-appear anim">Thank you!</div></div></div><div class="short-contact t-19 c-fff t-w-nt-lh-1-5 text-appear anim">We will contact you shortly</div></div>';

$(document).on('change','#file-select' , function(e){
  let fileName = e.target.files[0].name;
  $('.file-list').append('<span class="file-item">'+fileName+'</span<')
  //alert('The file name is : "' + fileName);
});

$(".popup input[type=text]").focus(function() {
  $(this).parent().addClass("filled");
  $(this).parent().removeClass("error");
  $(this).parent().parent().find('.label').addClass("t-12");
});
$(".popup input[type=text]").focusout(function() {
  if (!$(this).val()) {
    $(this).parent().removeClass("filled");
    $(this).parent().parent().find('.label').removeClass("t-12");
  }
});
$(".popup input[type=mail]").focus(function() {
  $(this).parent().addClass("filled");
  $(this).parent().removeClass("error");
  $(this).parent().parent().find('.label').addClass("t-12");
});
$(".popup input[type=mail]").focusout(function() {
  if (!$(this).val()) {
    $(this).parent().removeClass("filled");
    $(this).parent().parent().find('.label').removeClass("t-12");
  }
});
$(".popup textarea").focus(function() {
  $(this).parent().addClass("filled");
  $(this).parent().parent().find('.label').addClass("t-12");
});
$(".popup textarea").focusout(function() {
  if (!$(this).val()) {
    $(this).parent().removeClass("filled");
    $(this).parent().parent().find('.label').removeClass("t-12");
  }
});
$('input[type="text"]').blur(function() {
  if (this.value != "") {
    $(this).parent().removeClass('error')
  } else {
    $(this).parent().addClass('error')
  }
});
$('textarea').blur(function() {
  if (this.value != "") {
    $(this).parent().removeClass('error')
  } else {
    $(this).parent().addClass('error')
  }
});
$('input[type="mail"]').blur(function() {
  var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
  if (testEmail.test(this.value)) {
    $(this).parent().removeClass('error')
  } else {
    $(this).parent().addClass('error')
  }
});
// Отправка данных на сервер
function send(event, php) {
  event.preventDefault ? event.preventDefault() : event.returnValue = false;
  var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
  let name = document.forms["send-new-project"]["name"].value,
  check = document.forms["send-new-project"]["last-name"].value,
  email = document.forms["send-new-project"]["email"].value,
  text  = document.forms["send-new-project"]["text"].value;
  if (name == "") {
    $('#explicit-label-name').parent().addClass('error');
    //alert("Name must be filled out");
    return false;
  }
  else if (email == "") {
    $('#explicit-label-email').parent().addClass('error');
    //alert("email must be filled out");
    return false;
  }
  else if (text == "" || testEmail.test($('input[type="mail"]').value) ) {
    $('#explicit-label-text').parent().addClass('error');
    //alert("text must be filled out");
    return false;
  }
  else if (check != "" ) {
    //$('#explicit-label-text').parent().addClass('error');
    //alert('Вы бот')
    return false;
  }
  else {
    console.log("Отправка запроса");
    var req = new XMLHttpRequest();
    console.log(check);
    req.open('POST', php, true);
    req.onload = function() {
      if (req.status >= 200 && req.status < 400) {
        json = JSON.parse(this.response); // Ебанный internet explorer 11
        console.log(json);

        // ЗДЕСЬ УКАЗЫВАЕМ ДЕЙСТВИЯ В СЛУЧАЕ УСПЕХА ИЛИ НЕУДАЧИ
        if (json.result == "success") {
          // Если сообщение отправлено
          //alert("Сообщение отправлено");
          $('.container.start-project').html(success);
          $('.popup .container.start-project').css('justify-content','flex-start');
          $(".popup .back").on('click', function(){
            $(".popup .container.main-menu").show();
            $(".popup .container.start-project").hide();
          });
        } else {
          // Если произошла ошибка
          //alert("Ошибка. Сообщение не отправлено");
        }
        // Если не удалось связаться с php файлом
      } else {
        //alert("Ошибка сервера. Номер: " + req.status);
      }
    };

    // Если не удалось отправить запрос. Стоит блок на хостинге
    req.onerror = function() {
      alert("Ошибка отправки запроса");
    };
    req.send(new FormData(event.target));
  }
}
