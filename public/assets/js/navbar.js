
// The module pattern
var NavbarModule = (function() {



    // Container for navbar
    var navbar = $('#navbar-wrapper');



    // Return account id for URL building
    var getAccountId = function () {
        return $('#page-wrapper').children(':first').data('account-id');
    };



    // Refresh navbar content
    var refresh = function () {
        var url = navbar.data('url') + '/index/' + getAccountId();

        console.log('Load ' + url + ' to navbar');
        if (navbar.find('.top-nav, .side-nav').length) {
            navbar.find('.top-nav, .side-nav').fadeTo('fast', 0.5, function() {
                navbar.load(url, null, function() {
                    activateLinks(true);
                });
            });
        } else {
            navbar.load(url, null, function() {
                activateLinks(true);
            });
        }
    };



    // Set active classes on horizontal navbar links
    var activateLinks = function (preventRefresh) {
        if (typeof preventRefresh === 'undefined') {
            preventRefresh = false;
        }

        var horizontalUrl = $('#page-wrapper').children(':first').data('horizontal-url');
        var verticalUrl = $('#page-wrapper').children(':first').data('vertical-url');

        var horizontalLink = navbar.find('.top-nav .routable[href="' + horizontalUrl + '"]');
        var verticalLink = navbar.find('.side-nav .routable[href="' + verticalUrl + '"]');

        if ((horizontalUrl && horizontalLink.length === 0) || (verticalUrl && verticalLink.length === 0)) {
            if (preventRefresh === false) {
                refresh();
                return;
            }
        }

        navbar.find('.routable').removeClass('active');
        navbar.find('.routable').closest('li').removeClass('active');
        navbar.find('.routable').closest('ul.collapse').removeClass('in');

        horizontalLink.addClass('active');
        verticalLink.addClass('active');

        horizontalLink.closest('li').addClass('active');
        verticalLink.closest('li').addClass('active');
    }



    // Called on module loading
    var init = function () {
    };



    // Define public methods
    return {
        init: init,
        refresh: refresh,
        activateLinks: activateLinks,
    };



})();
