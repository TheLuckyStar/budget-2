
// The module pattern
var NavbarModule = (function() {



    // Container for navbar
    var navbar = $('#navbar-wrapper');

    // URL to fetch navbar content from
    var url = navbar.data('url');



    // Refresh navbar with ajax call
    var refresh = function (callback) {
        console.log('Refresh navbar from '+url);
        $.get(url).always(function (data) {
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
    var activeLinks = function (horizontalUrl, verticalUrl, allowRefresh) {
        console.log('activeLinks');
        if (typeof allowRefresh === 'undefined') {
            allowRefresh = true;
        }

        var horizontalLink = $(navbar).find('.link-to-page[href="'+horizontalUrl+'"]');
        var verticalLink = $(navbar).find('.link-to-page[href="'+verticalUrl+'"]');

        console.log(horizontalUrl);
        console.log(verticalUrl);
        console.log(horizontalLink);
        console.log(verticalLink);

        if (allowRefresh === true && (horizontalLink.length === 0 || verticalLink.length === 0)) {
            refresh(function () {
                activeLinks(horizontalUrl, verticalUrl, false);
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