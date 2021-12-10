let password;

//name section
$('.name').on("change keyup paste",
  function(){
    if($(this).val()){
      $('.icon-paper-plane').addClass("next");
    } else {
      $('.icon-paper-plane').removeClass("next");
    }
  }
);

$('.next-button').hover(
  function(){
    $(this).css('cursor', 'pointer');
  }
);

$('.next-button.name').click(
  function(){
    console.log("Something name");
    $('.name-section').addClass("fold-up");
    $('.surname-section').removeClass("folded");
  }
);

//surname section
$('.surname').on("change keyup paste",
  function(){
    if($(this).val()){
      $('.icon-address-card').addClass("next");
    } else {
      $('.icon-address-card').removeClass("next");
    }
  }
);

$('.next-button').hover(
  function(){
    $(this).css('cursor', 'pointer');
  }
);

$('.next-button.surname').click(
  function(){
    console.log("Something surname");
    $('.surname-section').addClass("fold-up");
    $('.email-section').removeClass("folded");
  }
);


//email section
$('.email').on("change keyup paste",
  function(){
    if($(this).val()){
      $('.icon-email').addClass("next");
    } else {
      $('.icon-email').removeClass("next");
    }
  }
);

$('.next-button').hover(
  function(){
    $(this).css('cursor', 'pointer');
  }
);

$('.next-button.email').click(
  function(){
    console.log("Something email");
    $('.email-section').addClass("fold-up");
    $('.password-section').removeClass("folded");
  }
);

//password section
$('.password').on("change keyup paste",
  function(){
    if($(this).val()){
      $('.icon-lock').addClass("next");
    } else {
      $('.icon-lock').removeClass("next");
    }
  }
);

$('.next-button').hover(
  function(){
    $(this).css('cursor', 'pointer');
  }
);

$('.next-button.password').click(
  function(){
    
    console.log("Something password");
    $('.password-section').addClass("fold-up");
    $('.repeat-password-section').removeClass("folded");
  }
);

//repeat password section
$('.repeat-password').on("change keyup paste",
  function(){
    if($(this).val()){
      $('.icon-repeat-lock').addClass("next");
    } else {
      $('.icon-repeat-lock').removeClass("next");
    }
  }
);

$('.next-button').hover(
  function(){
    $(this).css('cursor', 'pointer');
  }
);

$('.next-button.repeat-password').click(
  function(){
    console.log("Something repeat-password");
    $('.repeat-password-section').addClass("fold-up");
    $('.tel-section').removeClass("folded");
  }
);

//telephone section
$('.tel').on("change keyup paste",
  function(){
    if($(this).val()){
      $('.icon-tel').addClass("next");
    } else {
      $('.icon-tel').removeClass("next");
    }
  }
);

$('.next-button.tel').click(
  function(){
    console.log("Something tel");
    $('.tel-section').addClass("fold-up");
    $('.success').css("marginTop", 0);
  }
);