
// The module pattern
var NavbarModule = (function() {



    // Container for navbar
    var navbar = $('.navbar.navbar-fixed-top');



    // Called on module loading
    var init = function () {
        // Click on some links should reload page asynchronously
        $(navbar).on('click', '.link-to-page', function () {
            var url = $(this).attr('href');
            PageModule.refreshPage(url);
            $(this).parents('.dropdown').children('.dropdown-toggle').dropdown("toggle");
            return false;
        });
    };



    // Define public methods
    return {
        init: init,
    };



})();



// Trigger module initilization
NavbarModule.init();