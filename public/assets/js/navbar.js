 /* exported NavbarModule */

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
                    updateLanguageLinks();
                });
            });
        } else {
            navbar.load(url, null, function() {
                activateLinks(true);
                updateLanguageLinks();
            });
        }
    };



    // Update language links
    var updateLanguageLinks = function () {
        navbar.find('.language-link').each(function () {
            var href = $(this).attr('href');

            if (href.indexOf('#') > -1) {
                href = href.substring(0, href.indexOf('#'));
            }
            href += window.location.hash;

            $(this).attr('href', href);
        });
    };



    // Set active classes on horizontal navbar links
    var activateLinks = function (preventRefresh) {
        var horizontalLink = getHorizontalLinkToActivate();
        var verticalLink = getVerticalLinkToActivate();

        if (horizontalLink.length === 0 || verticalLink.length === 0) {
            if (preventRefresh !== true) {
                refresh();
                return;
            }
        }

        refreshActivatedLinks(horizontalLink, verticalLink);
    };

    var getHorizontalLinkToActivate = function () {
        var url = $('#page-wrapper').children(':first').data('horizontal-url');
        var link = navbar.find('.top-nav .routable[href="' + url + '"]');

        return link;
    };

    var getVerticalLinkToActivate = function () {
        var url = $('#page-wrapper').children(':first').data('vertical-url');
        var link = navbar.find('.side-nav .routable[href="' + url + '"]');

        return link;
    };

    var refreshActivatedLinks = function (horizontalLink, verticalLink) {
        navbar.find('.routable').removeClass('active');
        navbar.find('.routable').closest('li').removeClass('active');
        navbar.find('.routable').closest('ul.collapse').removeClass('in');

        horizontalLink.addClass('active').closest('li').addClass('active');
        verticalLink.addClass('active').closest('li').addClass('active');
        verticalLink.closest('.collapse').addClass('in');
    };



    // Called on module loading
    var init = function () {
    };



    // Define public methods
    return {
        init: init,
        refresh: refresh,
        activateLinks: activateLinks,
        updateLanguageLinks: updateLanguageLinks,
    };



})();
