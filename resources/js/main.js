

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


