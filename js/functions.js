$(function () {




  $('.hamburger').on('click', function () {
    $('body').toggleClass('open_Menu');
    $('header .overlay').fadeToggle('slow');
  });

  $('.overlay').on('click', function () {
    $('body').removeClass('open_Menu');
    $('header .overlay').fadeOut('slow');
  });


  var batch = 8;

  $("#VideoGallery .gallery_grid").each(function (index) {
    if (index >= batch) {
      $(this).fadeOut("slow").addClass("hide");
    }
  });

  $(".gallery_grid_wrapp .load-more-btn").on("click", function (e) {
    e.preventDefault();
    $(this).parents(".gallery_grid_wrapp").find(".gallery_grid:hidden").slice(0, batch).slideDown();
    if ($(this).parents(".gallery_grid_wrapp").find(".gallery_grid:hidden").length == 0) {
      $(this).fadeOut("slow");
    }
  });
  if ($(".gallery_grid_wrapp .gallery_grid:hidden").length == 0) {
    // $(".gallery_grid_wrapp .load-more-btn").fadeOut("slow");
  } else {
    $(".gallery_grid_wrapp .load-more-btn").fadeIn("slow");
  }


  $('[data-fancybox]').fancybox({
    afterShow: function () {

    },
    beforeClose: function () {
      //   alert('Closed');

    }
  });


  $('.videolink').on('mouseover', function () {
    //alert();
    $(this).find('video').get(0).play();
  });
  $('.videolink').on('mouseleave', function () {
    $(this).find('video').get(0).pause();
  });


  Splitting();


  var swiper = new Swiper(".full_page_swiper", {
    slidesPerView: 2,
    centeredSlides: true,
    spaceBetween: 0,
    speed: 1000,
    mousewheel: false,
    grabCursor: false,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 4,
      },
    },
  });


  if ($('body').hasClass('homepage')) {
    $(".homepage").addClass("active");
  }
  if ($('body').hasClass('projects')) {
    $(".projects").addClass("active");
  }
  if ($('body').hasClass('about')) {
    $(".about").addClass("active");
  }
  if ($('body').hasClass('contact')) {
    $(".contact").addClass("active");
  }


});
