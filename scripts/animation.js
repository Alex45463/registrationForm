//name section
$('.name').on("change keyup paste",
  function(){
    if($(this).val()){
      $('.icon-name').addClass("next");
    } else {
      $('.icon-name').removeClass("next");
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
      $('.icon-surname').addClass("next");
    } else {
      $('.icon-surname').removeClass("next");
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
    $('.username-section').removeClass("folded");
  }
);

//username section
$('.username').on("change keyup paste",
  function(){
    if($(this).val()){
      $('.icon-username').addClass("next");
    } else {
      $('.icon-username').removeClass("next");
    }
  }
);

$('.next-button').hover(
  function(){
    $(this).css('cursor', 'pointer');
  }
);

$('.next-button.username').click(
  function(){
    console.log("Something username");
    $('.username-section').addClass("fold-up");
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
	if($('.password').attr('login')=== "true") {
		$('.success').css("marginTop", 0);
		setTimeout(() => {
		  $('#submit').click();
		}, 700);
	} else {
		$('.billing-section').removeClass("folded");
	}
  }
);

//billing section
$('.billing').change(
  function(){
    if($(this).val()){
      $('.icon-billing').addClass("next");
    } else {
      $('.icon-billing').removeClass("next");
    }
  }
);

$('.next-button').hover(
  function(){
    $(this).css('cursor', 'pointer');
  }
);

$('.next-button.billing').click(
  function(){
    console.log("Something billing");
    $('.billing-section').addClass("fold-up");
    $('.preference-section').removeClass("folded");
  }
);

//preference section
$('.preference').change(
  function(){
    if($(this).val()){
      $('.icon-preference').addClass("next");
    } else {
      $('.icon-preference').removeClass("next");
    }
  }
);

$('.next-button').hover(
  function(){
    $(this).css('cursor', 'pointer');
  }
);

$('.next-button.preference').click(
  function(){
    console.log("Something preference");
    $('.preference-section').addClass("fold-up");
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

$('.next-button').hover(
  function(){
    $(this).css('cursor', 'pointer');
  }
);

$('.next-button.tel').click(
  function(){
    console.log("Something tel");
    $('.tel-section').addClass("fold-up");
    $('.newsletter-section').removeClass("folded");
    $('.newsletter').trigger("classChange");
  }
);

//newsletter section
$('.newsletter').on("classChange",
  function(){
    $('.icon-newsletter').addClass("next");
  }
);

$('.next-button.newsletter').click(
  function(){
    console.log("Something newsletter");
    $('.newsletter-section').addClass("fold-up");
    $('.success').css("marginTop", 0);
    setTimeout(() => {
      $('#submit').click();
    }, 700);
  }
);

//prevent submit on enter
$('html').keydown(function (e) {
  var key = e.keyCode || e.which; 
  if(key == 13 || key == 9)  // the enter key code
  {
    return false; 
  }
 });