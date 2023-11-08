$(".menu > ul > li").click(function (e) {
    // remove active from already active
    $(this).siblings().removClass("active");
    // add active to clicked
    $(this).toggleClass("active");
    // if has sub menu open it
    $(this).find("ul").slideToggle();
    // close other sub menu if any open
    $(this).find("ul").slideToggle();
});

$(".menu-btn").click(function () {
    $(".sidebar").toggleClass("active");
});
