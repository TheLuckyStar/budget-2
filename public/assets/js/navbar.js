
// The module pattern
var NavbarModule = (function() {



    // Container for navbar
    var navbar = $('#navbar-wrapper');

    // URL to fetch navbar content from
    var url = navbar.data('url');



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
        $(navbar).find('.link-to-page').parent('li').removeClass('active');

        horizontalLink.addClass('active');
        horizontalLink.parent('li').addClass('active');
        verticalLink.addClass('active');
        verticalLink.parent('li').addClass('active');
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
    };



})();



// Trigger module initilization
NavbarModule.init();