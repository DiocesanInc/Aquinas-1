jQuery(document).ready(function ($) {
  $(".desktop-search").clone().appendTo("#mega-menu-wrap-menu-1 .mega-menu-toggle");
  $(".search-container .header-search").on("click", function () {
    $(this)
      .parent(".search-container")
      .find(".search-form")
      .addClass("active");
  });
  $(document).mouseup(function (e) {
    if ($(e.target).closest(".search-container .search-form").length === 0) {
      $(".search-container .header-search").parent(".search-container").find(".search-form").removeClass("active");
    }
  });
});
