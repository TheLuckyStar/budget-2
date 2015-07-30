
// The module pattern
var NavbarModule = (function() {



    // Container for navbar
    var navbar = $('#navbar-wrapper');

    // URL to fetch navbar content from
    var url = navbar.data('url');



    // Empty horizontal menu to force refresh on next activeLinks
    var emptyHorizontalMenu = function (callback) {
        var horizontalMenu = navbar.find('.navbar-nav.top-nav');

        horizontalMenu.empty();
    };

    // Empty vertical menu to force refresh on next activeLinks
    var emptyVerticalMenu = function (callback) {
        var verticalMenu = navbar.find('.navbar-nav.side-nav');

        verticalMenu.empty();
    };

    // Refresh navbar with ajax call
    var refresh = function (callback) {
        var currentUrl = url + '/index/' + PageModule.getAccountId();
        console.log('Refresh navbar from '+currentUrl);
        $.get(currentUrl).always(function (data) {
            render(data.content, callback);
        });
    };

    // Render navbar with string content
    var render = function (content, callback) {
        console.log('Render navbar');
        navbar.html(content);

        if (callback instanceof Function) {
            callback();
        }
    };

    // Set active classes
    var activeLinks = function (allowRefresh) {
        if (typeof allowRefresh === 'undefined') {
            allowRefresh = true;
        }

        var horizontalMenu = navbar.find('.navbar-nav.top-nav');
        var horizontalUrl = PageModule.getHorizontalUrl();
        var horizontalLink = horizontalMenu.find('.link-to-page[href="'+horizontalUrl+'"]');

        var verticalMenu = navbar.find('.navbar-nav.side-nav');
        var verticalUrl = PageModule.getVerticalUrl();
        var verticalLink = verticalMenu.find('.link-to-page[href="'+verticalUrl+'"]');

        if (allowRefresh === true && (horizontalLink.length === 0 || verticalLink.length === 0)) {
            refresh(function () {
                activeLinks(false);
            });
        }

        $(navbar).find('.link-to-page').removeClass('active');
        $(navbar).find('.link-to-page').closest('li').removeClass('active');
        $(navbar).find('.link-to-page').closest('ul.collapse').removeClass('in');

        horizontalLink.addClass('active');
        horizontalLink.closest('li').addClass('active');
        verticalLink.addClass('active');
        verticalLink.closest('li').addClass('active');
        verticalLink.closest('ul.collapse').addClass('in');
    }

    // Called on module loading
    var init = function () {
        // Click on some links should reload page asynchronously
        $(navbar).on('click', '.link-to-page', function () {
            PageModule.linkToPage($(this));
            return false;
        });

    };



    // Define public methods
    return {
        init: init,
        activeLinks: activeLinks,
        emptyHorizontalMenu: emptyHorizontalMenu,
        emptyVerticalMenu: emptyVerticalMenu,
    };



})();



// Trigger module initilization
NavbarModule.init();