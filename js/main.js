function ValidateEmail(mail) {
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.emailAddr.value)) {
   return (true)
  }
  alert("You have entered an invalid email address!")
  return (false)
}

$('#slider').slick({
  centerPadding: '60px',
  slidesToShow: 3,
  autoplay: false,
  autoplaySpeed: 2000,
  slidesToScroll: 1,
  arrows: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3,
        infinite: true
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1,
        dots: true,
        lazyLoad: 'ondemand'
      }
    }
  ]
});

$(function () {
  count = 0;
  wordsArray = ["AWESOME.", "PROFESSIONAL.", "CREATIVE.", "FAST."];
  setInterval(function () {
    count++;
    $("#dynamicBuzzword").fadeOut(400, function () {
      $(this).text(wordsArray[count % wordsArray.length]).fadeIn(400);
    });
  }, 2000);
});
