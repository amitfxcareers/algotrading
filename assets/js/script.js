
    // mobile menu dropdows
    $(".moblie-dropdwon").on("click", function () {
        var current_dropdown = $(this).next(".dropdown-mb-menu");
        $(".dropdown-mb-menu").not(current_dropdown).slideUp();
        current_dropdown.slideToggle();
        return false;
    });
    