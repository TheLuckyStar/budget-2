
// The module pattern
var IndexModule = (function() {



    // Container for page
    var page = $('#page-wrapper');
    var baseUrl = page.data('url').slice(0, -4);

    // Refresh page with ajax call to url set in container attribute
    var refreshPage = function (url) {
        if (url) {
            page.data('url', url);
        } else {
            var url = page.data('url');
        }

        console.log('Refresh page to '+url);
        page.load(url);
        window.location.hash = url.replace(baseUrl, '');
    };



    // Used on module loading
    var init = function () {
        initEvents();
        initPage();
    };

    // Bind main user events
    var initEvents = function () {
        // Click on some links should reload page asynchronously
        $(page).on('click', '.link-to-page', function () {
            var url = $(this).attr('href');
            refreshPage(url);
            return false;
        });

        // URL page change should reload page asynchronously
        $(window).on('hashchange', function () {
            initPage();
        });
    };

    // Refresh page based on URL hash
    var initPage = function () {
        var fragment = window.location.hash;
        var url = fragment.substr(1);

        if (url) {
            refreshPage(baseUrl+url);
        } else {
            refreshPage();
        }
    };



    // Define public methods
    return {
        init: init,
        refreshPage: refreshPage
    };



})();



// Trigger module initilization
IndexModule.init();