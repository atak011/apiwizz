var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 50,
      },
    },
  });
var swiper = new Swiper(".mySwiper2", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 50,
      },
    },
  });
var swiper = new Swiper(".mySwiper3", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 50,
      },
    },
  });
var swiper = new Swiper(".mySwiper4", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 50,
      },
    },
  });

  $(document).ready(function () {
    $('#menu-toggle').click(function () {
      $('#mobile-menu').toggleClass('menu-open');
    });

    $('#close-btn').click(function () {
      $('#mobile-menu').removeClass('menu-open');
    });
  });

  $(document).ready(function () {
    // Varsayılan olarak ilk sekmeyi aktif hale getir
    $(".tab-menu a:first-child").addClass("active border-b-2 border-blue-500");

    // Sekme tıklama işlemi
    $(".tab-menu a").click(function (event) {
      event.preventDefault();

      // Aktif sekme sınıfı
      $(".tab-menu a.active").removeClass("active border-b-2 border-blue-500");
      $(this).addClass("active border-b-2 border-blue-500");

      // Gösterilecek içerik
      const target = $(this).attr("href");
      $(".tab-content > div").addClass("hidden");
      $(target).removeClass("hidden");
    });
  });